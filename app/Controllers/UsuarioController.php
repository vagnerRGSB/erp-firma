<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    public function list($main="list")
    {
        if(!is_file(APPPATH."/Views/usuarios/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }
        
        $data["title"]="Lista de Usuários";
        echo view("layouts/header",$data);
        echo view("layouts/navbarMaster");
        echo view("usuarios/".$main);
        echo view("layouts/footer");
    }
    public function formInsert($main="formInsert")
    {
        if(!is_file(APPPATH."/Views/usuarios/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Formulário Inserção de Usuario";
        echo view("layouts/header",$data);
        echo view("layouts/navbarMaster");
        echo view("usuarios/".$main);
        echo view("layouts/footer");
    }

    public function formUpdate($main="formUpdate")
    {
        if(!is_file(APPPATH."/Views/usuarios/".$main.".php")){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($main);
        }

        $data["title"]="Formulário de atualização de Usuario";
        echo view("layouts/header",$data);
        echo view("layouts/navbarMaster");
        echo view("usuarios/".$main);
        echo view("layouts/footer");
    }
}
