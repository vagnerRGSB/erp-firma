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
    private $db;

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

         $db = \Config\Database::connect();
         $sql= "select mm.idModeloMaquinario, cm.nome as categoria, ma.nome as marca, mm.nome as modelo
          from modelo_maquinario mm 
          inner join categoria_maquinario cm on mm.idCategoriaMaquinario=cm.idCategoriaMaquinario 
          inner join marca ma on mm.idMarca=ma.idMarca"; 
          $resultado = $db->query($sql)->getResult();
          var_dump($resultado);
        
        echo view("layouts/header", [
            "itens" => $resultado,
            
            
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

    public function editar($param_marca, $param_categoria)
    {
        echo view("layouts/header",[
            "marcas" => $this->marca->findAll(),
            "item_marca" => $this->marca->find($param_marca),
            "categorias" => $this->categoria_maquinario->findAll(),
            "item_categoria" => $this->categoria_maquinario->find($param_categoria)
        ]);
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
