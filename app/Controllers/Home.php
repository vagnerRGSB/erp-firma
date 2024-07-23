<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function onLoginHome()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("homes/homeMaster");
        echo view("layouts/footer");
    }
}
