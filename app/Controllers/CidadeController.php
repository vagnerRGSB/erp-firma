<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CidadeController extends BaseController
{
    public function listar()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("cidade/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        
    }
    public function editar(int $param)
    {

    }
}
