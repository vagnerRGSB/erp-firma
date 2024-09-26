<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CidadeModel;
use App\Models\EstadoModel;
use CodeIgniter\HTTP\ResponseInterface;

class CidadeController extends BaseController
{
    private $cidade;
    private $estado;
    public function __construct()
    {
        $this->cidade = new CidadeModel();
        $this->estado = new EstadoModel();
    }
    public function listar()
    {
        echo view("layouts/header",[
            "itens" => $this->cidade->orderBy("nome")->paginate(10),
            "pager" => $this->cidade->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("cidade/listar");
        echo view("layouts/footer");
    }

    public function inserir(){
        echo view("layouts/header",[
            "estados" => $this->estado->findAll()
        ]);
        echo view("layouts/menuMaster");
        echo view("cidade/inserir");
        echo view("layouts/footer");
    }
    public function editar($param)
    {
        echo view("layouts/header",[
            "estado" => $this->estado->find($param)
        ]);
        echo view("layouts/menuMaster");
        echo view("cidade/inserir");
        echo view("layouts/footer");
    }

    public function onSave(){

    }

    public function onDelete($param){
        
    }
}
