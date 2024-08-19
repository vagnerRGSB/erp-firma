<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstadoModel;
use CodeIgniter\HTTP\ResponseInterface;

class EstadoController extends BaseController
{

    private $estado;

    public function __construct()
    {
        $this->estado = new EstadoModel();
    }
    public function listar()
    {
        echo view("layouts/header",[
            "itens"=>$this->estado->orderBy("nome")->paginate(10),
            "pager"=>$this->estado->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("estado/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("estado/inserir");
        echo view("layouts/footer");
    }

    public function editar($param)
    {
        echo view("layouts/header",[
            "item" => $this->estado->find($param)
        ]);
        echo view("layouts/menuMaster");
        echo view("estado/editar");
        echo view("layouts/footer");
    }

    public function onSave(){

        $status = $this->estado->save($this->request->getPost());

        if($status)
        {
            return redirect()->route("estado.listar")->withInput()->with
            ("success",$this->request->getPost("nome")." - ".$this->request->getPost("sigla"));
        }else{
            return redirect()->route("estado.inserir")->withInput()->with("errors",$this->estado->errors());
        }
    }

    public function onDelete(int $param)
    {
        $resultado = $this->estado->delete($param);

        if($resultado){
            return redirect()->route("estado.listar");
        }else{
            return redirect()->back();
        }
    }
}
