<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaPecaModel;
use App\Models\EspecificacaoModel;
use CodeIgniter\HTTP\ResponseInterface;

class EspecificacaoController extends BaseController
{
    private $especificacao;
    private $categoria_peca;

    public function __construct()
    {
        $this->especificacao = new EspecificacaoModel();
        $this->categoria_peca = new CategoriaPecaModel();

    }
    public function listar()
    { 
        echo view("layouts/header", [
            "itens" => $this->especificacao->orderBy("nome")->paginate(10),
            "pager" => $this->especificacao->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("especificacao/listar");
        echo view("layouts/footer");
    }

    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("especificacao/inserir");
        echo view("layouts/footer");
    }

    public function editar()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("especificacao/editar");
        echo view("layouts/footer");
    }

    public function onSave(){

    }
    
    public function onDelete(){
        
    }
}
