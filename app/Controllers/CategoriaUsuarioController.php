<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaUsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaUsuarioController extends BaseController
{
    private $lista;

    public function __construct()
    {
        $lista = new CategoriaUsuarioModel();
    }

    public function list()
    {
        
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("categorias_usuarios/list");
        echo view("layouts/footer");
    }

    public function formInsert()
    {

        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("categorias_usuarios/formInsert");
        echo view("layouts/footer");
    }

    public function formUpdate($param)
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("usuarios/formUpdate");
        echo view("layouts/footer");
    }
}
