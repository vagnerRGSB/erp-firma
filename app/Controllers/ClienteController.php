<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class ClienteController extends BaseController
{
    private $usuarioNew, $usuarioOld;
    public function __construct()
    {
        $usuarioNew = new UsuarioModel();
        $usuarioOld = new UsuarioModel();
        $usuarioList = new UsuarioModel();
    }

    public function list($main="list")
    {
        if(!is_file(APPPATH."/Views/clientes/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Lista Clientes";
        echo view("layouts/header",$data);
        echo view("layouts/menuMaster");
        echo view("clientes/".$main);
        echo view("layouts/footer");
    }

    public function formInsert($main="formInsert")
    {
        if(!is_file(APPPATH."/Views/clientes/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Formulário Inserção de Cliente";
        echo view("layouts/header",$data);
        echo view("layouts/menuMaster");
        echo view("clientes/".$main);
        echo view("layouts/footer");
    }

    public function formUpdate($main="formUpdate")
    {
        if(!is_file(APPPATH."/Views/categorias_usuarios/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Formulário Edição de Cliente";
        echo view("layouts/header",$data);
        echo view("layouts/menuMaster");
        echo view("categorias_usuarios/".$main);
        echo view("layouts/footer");
    }
}
