<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaMaquinarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaMaquinarioController extends BaseController
{

    private $categoria_maquinario;

    public function __construct()
    {
        $this->categoria_maquinario = new CategoriaMaquinarioModel();
    }
    public function listar()
    {
        echo view("layouts/header",[
            "itens" => $this->categoria_maquinario->orderBy("nome")->paginate(2),
            "pager" => $this->categoria_maquinario->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("categoria-maquinario/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("categoria-maquinario/inserir");
        echo view("layouts/footer");
    }
    public function editar(int $param)
    {
        echo view("layouts/header",[
            "item" => $this->categoria_maquinario->find($param)
        ]);
        echo view("layouts/menuMaster");
        echo view("categoria-maquinario/editar");
        echo view("layouts/footer");
    }
    public function onSave()
    {
        $resultado = $this->categoria_maquinario->save($this->request->getPost());
        
        if($resultado){
            return redirect()->route("categoria-maquinario.listar");
        }else{
            return redirect()->back();
        }
    }
    public function onDelete(int $param)
    {
        $resultado = $this->categoria_maquinario->delete($param);

        if($resultado){
            return redirect()->route("categoria-maquinario.listar");
        }else{
            return redirect()->back();
        }
    }
}
