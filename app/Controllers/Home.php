<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function homeLogin()
    {
        echo view("layouts/header");
        echo view("pageLogin");
        echo view("layouts/footer");
    }
    public function homeMaster()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("homes/homeMaster");
        echo view("layouts/footer");
    }
}
