<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ClienteController extends BaseController
{
    public function list($main="list")
    {
        if(!is_file(APPPATH."/Views/clientes/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Lista Clientes";
        echo view("layouts/header",$data);
        echo view("layouts/navbarMaster");
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
        echo view("layouts/navbarMaster");
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
        echo view("layouts/navbarMaster");
        echo view("categorias_usuarios/".$main);
        echo view("layouts/footer");
    }
}
