<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("layouts/header");
        echo view("layouts/navbarMaster");
        echo view("pageMaster");
        echo view("layouts/footer");
    }
}
