<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EspecificacaoController extends BaseController
{
    public function listar()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("especificacao/listar");
        echo view("layouts/footer");
    }

    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("especificacao/inserir");
        echo view("layouts/footer");
    }

    public function editar()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("especificacao/editar");
        echo view("layouts/footer");
    }

    public function onSave(){

    }
    
    public function onDelete(){
        
    }
}
