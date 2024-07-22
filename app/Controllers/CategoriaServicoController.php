<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaServicoModel;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaServicoController extends BaseController
{
    private $categoria_servico;

    public function __construct()
    {
        $this->categoria_servico = new CategoriaServicoModel();
    }
    public function listar()
    {
        echo view("layouts/header",[
            "itens"=>$this->categoria_servico->orderBy("nome")->paginate(10),
            "pager"=>$this->categoria_servico->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("categoria-servico/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("categoria-servico/inserir");
        echo view("layouts/footer");
    }
    public function editar($param)
    {
        echo view("layouts/header",[
            "item"=>$this->categoria_servico->find($param)
        ]);
        echo view("layouts/menuMaster");
        echo view("categoria-servico/editar");
        echo view("layouts/footer");
    }
    public function onSave()
    {
        $resultado = $this->categoria_servico->save($this->request->getPost());

        if($resultado)
        {
            return redirect()->route("categoria-servico.listar");
        }else
        {
            return redirect()->back();
        }
    }
    public function onDelete($param)
    {
        $resultado = $this->categoria_servico->delete($param);

        if($resultado)
        {
            return redirect()->route("categoria-servico.listar");
        }else
        {
            return redirect()->back();
        }
    }
}
