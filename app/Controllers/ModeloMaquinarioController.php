<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaMaquinarioModel;
use App\Models\MarcaModel;
use App\Models\ModeloMaquinarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class ModeloMaquinarioController extends BaseController
{
    private $modelo_maquinario;
    private $categoria_maquinario;
    private $marca;

    public function __construct()
    {
        $this->modelo_maquinario = new ModeloMaquinarioModel();
        $this->categoria_maquinario = new CategoriaMaquinarioModel();
        $this->marca = new MarcaModel();
    }

    public function listar()
    {

        /**
         * INNER JOIN PARA RETORNAR CATEGORIA MAQUINARIO.NOME MARCA.NOME E MODELO_MAQUINARIO.NOME
         * select cm.nome, ma.nome, mm.nome 
         * from modelo_maquinario mm 
         * inner join categoria_maquinario cm on mm.idCategoriaMaquinario=cm.idCategoriaMaquinario 
         * inner join marca ma on mm.idMarca=ma.idMarca; 
         */
        
        echo view("layouts/header", [
            "itens" => $this->modelo_maquinario->orderBy("nome")->paginate(10),
            "pager" => $this->modelo_maquinario->pager
            
        ]);
        echo view("layouts/menuMaster");
        echo view("modelo-maquinario/listar");
        echo view("layouts/footer");
    }

    public function inserir()
    {
        echo view("layouts/header", [
            "marcas" => $this->marca->findAll(),
            "categorias" => $this->categoria_maquinario->findAll()
        ]);
        echo view("layouts/menuMaster");
        echo view("modelo-maquinario/inserir");
        echo view("layouts/footer");
    }

    public function editar()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo "Editar";
        echo view("layouts/footer");
    }

    public function onSave()
    {
        $resultado = $this->modelo_maquinario->save($this->request->getPost());
        if ($resultado) {
            return redirect()->route("modelo-maquinario.listar");
        } else {
            return redirect()->back();
        }
    }

    public function onDelete($param) {

    }
}
