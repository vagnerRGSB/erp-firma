<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaPecaModel;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaPecaController extends BaseController
{
    private $categoria_peca;

    public function __construct()
    {
        $this->categoria_peca = new CategoriaPecaModel();
    }

    public function listar()
    {
        echo view("layouts/header",[
            "itens" => $this->categoria_peca->orderBy("nome")->paginate(10),
            "pager" => $this->categoria_peca->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("categoria-peca/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("categoria-peca/inserir");
        echo view("layouts/footer");
    }
    public function editar(int $param)
    {
        echo view("layouts/header",[
            "item" => $this->categoria_peca->find($param)
        ]);
        echo view("layouts/menuMaster");
        echo view("categoria-peca/editar");
        echo view("layouts/footer");
    }

    public function onSave()
    {
        $resultado = $this->categoria_peca->save($this->request->getPost());

        if($resultado)
        {
            return redirect()->route("categoria-peca.listar");
        }else
        {
            return redirect()->back();
        }
    }

    public function onDelete($param)
    {
        $resultado = $this->categoria_peca->delete($param);

        if($resultado)
        {
            return redirect()->route("categoria-peca.listar");
        }else
        {
            return redirect()->back();
        }
    }
}
