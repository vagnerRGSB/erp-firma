<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{

    private $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }
    public function telaLogin()
    {
        return view("tela/telaLogin");
    }
    public function onLogin(){
        $validar = $this->validate([
            "email" => "required|valid_email",
            "senha" => "required"
        ],[
            "email" => [
                "required"=>"O email é obrigatório",
                "valid_email"=>"O email tem que ser válido"
            ],
            "senha" => [
                "required" => "A senha é obrigatória"
            ]
        ]);

        if(!$validar){
            return redirect()->back()->with("errors",$this->validator->getErrors());
        }

        $login = $this->usuario->where("email", $this->request->getPost("email"))->first();

        if(!$login){
            return redirect()->back()->with("message","Email ou senha incorreta");
        }

        if(password_verify($this->request->getPost("senha"), $login->senha)){
            return redirect()->back()->with("message","Email ou senha incorreta");
        }

        unset($login->senha);
        session()->set("logado",$login);

        return redirect()->route("home.principal");

    }
    public function onLogout(){

    }
}
