<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function page_login()
    {
        echo view("layouts/header");
        echo view("pageLogin");
        echo view("layouts/footer");
    }
    public function index()
    {
        echo view("layouts/header");
        echo view("layouts/navbarMaster");
        echo view("pageMaster");
        echo view("layouts/footer");
    }
}
