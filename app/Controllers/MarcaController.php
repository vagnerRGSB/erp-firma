<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarcaModel;
use CodeIgniter\HTTP\ResponseInterface;

class MarcaController extends BaseController
{

    private $marca;

    public function __construct()
    {
        $this->marca = new MarcaModel();
    }

    public function listar()
    {
        echo view("layouts/header",[
            "itens" => $this->marca->orderBy("nome")->paginate(10),
            "pager" => $this->marca->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("marca/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("marca/inserir");
        echo view("layouts/footer");
    }
    public function editar(int $param)
    {
        echo view("layouts/header",[
            "item"=> $this->marca->find($param)
        ]);
        echo view("layouts/menuMaster");
        echo view("marca/editar");
        echo view("layouts/footer");
    }
    public function onSave()
    {
        $resultado = $this->marca->save($this->request->getPost());

        if ($resultado) {
            return redirect()->route("marca.listar")->withInput()->with("success",$this->marca["nome"]);
        } else {
            return redirect()->route("marca.inserir")->withInput()->with("errors",$this->marca->errors());
        }
    }
    public function onDelete(int $param)
    {
        $resultado = $this->marca->delete($param);

        if ($resultado) {
            return redirect()->route("marca.listar");
        } else {
            return redirect()->back();
        }
    }
}
