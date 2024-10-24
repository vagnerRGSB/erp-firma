<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function principal()
    {
        return view("home/principal");
    }
    public function graficoServicos(){
        return view("home/graficoServicos");
    }
    public function graficoPecas(){
        return view("home/graficoPecas");
    }
}
