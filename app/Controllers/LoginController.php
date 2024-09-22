<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\HTTP\ResponseInterface;
use PDO;

class LoginController extends BaseController
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();        
        
    }
    public function login()
    {
        return view("login/telaLogin");
    }
    public function onLogin()
    {
        $validate = $this->validate([
            "email" => "required|valid_email",
            "senha" => "required"
        ]);

        if(!$validate){
            return redirect()->route("login.tela")->with("errors", $this->validator->getErrors());
        }else{
            $usuario_login = $this->usuario->where(
                "email",$this->request->getPost("email"))->first();
            if(!$usuario_login){
                return redirect()->back()->withInput()->with("error_login","Email ou senha incorreta");
            }
            if(!password_verify($this->request->getPost("senha"), $usuario_login["senha"])){
                return redirect()->back()->withInput()->with("error_login","Email ou senha incorretas");
            }

            unset($usuario_login["senha"]);
            unset($usuario_login["email"]);
            session()->set("logado",$usuario_login);

            return redirect()->route("home");
        }
    }
    public function onLogout()
    {
        session()->destroy();
        return redirect()->route("login.tela");
    }
}
