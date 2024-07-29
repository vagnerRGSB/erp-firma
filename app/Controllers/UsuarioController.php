<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    public function listar()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("usuario/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("usuario/inserir");
        echo view("layouts/footer");
    }
    public function editar()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("usuario/editar");
        echo view("layouts/footer");
    }
    public function onSave()
    {

    }
    public function onMudancaSenha()
    {
        
    }
    public function onDelete($param)
    {
        
    }
}
