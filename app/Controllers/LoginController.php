<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function telaLogin()
    {
        return view("tela/telaLogin");
    }
    public function onLogin(){
        $dados = [
            "email" => $this->request->getPost("email"),
            "senha" => $this->request->getPost("senha")
        ];

    }
    public function onLogout(){

    }
}
