<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaUsuarioController extends BaseController
{
    public function list($main="list")
    {
        if(!is_file(APPPATH."/Views/categorias_usuarios/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Lista Categorias de Usuários";
        echo view("layouts/header",$data);
        echo view("layouts/navbarMaster");
        echo view("categorias_usuarios/".$main);
        echo view("layouts/footer");
    }

    public function formInsert($main="formInsert")
    {
        if(!is_file(APPPATH."/Views/categorias_usuarios/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Formulário Inserção Categoria de Usuários";
        echo view("layouts/header",$data);
        echo view("layouts/navbarMaster");
        echo view("categorias_usuarios/".$main);
        echo view("layouts/footer");
    }

    public function formUpdate($main="formUpdate")
    {
        if(!is_file(APPPATH."/Views/categorias_usuarios/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Formulário Edição Categoria de Usuário";
        echo view("layouts/header",$data);
        echo view("layouts/navbarMaster");
        echo view("usuarios/".$main);
        echo view("layouts/footer");
    }
}
