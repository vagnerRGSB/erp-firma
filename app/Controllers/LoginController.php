<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\HTTP\ResponseInterface;

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

    }
    public function onLogout()
    {

    }
}
