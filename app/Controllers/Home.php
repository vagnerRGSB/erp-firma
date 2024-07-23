<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("home/homeMaster");
        echo view("layouts/footer");
    }
}
