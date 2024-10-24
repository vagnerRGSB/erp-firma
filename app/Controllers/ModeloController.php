<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MaquinarioModel;
use App\Models\MarcaModel;
use App\Models\ModeloModel;
use CodeIgniter\Database\Database;
use CodeIgniter\HTTP\ResponseInterface;

class ModeloController extends BaseController
{

    private $modelo;
    private $marca;
    private $maquinario;
    private $dataBase;

    public function __construct()
    {
        $this->modelo = new ModeloModel();
        $this->marca = new MarcaModel();
        $this->maquinario = new MaquinarioModel();
        $this->dataBase = \Config\Database::connect();
    }
    public function listar()
    {

        $dados = $this->modelo->select(
            "modelo.idModelo, modelo.nome as nomeModelo,
             marca.nome as nomeMarca,
             maquinario.nome as nomeMaquinario"
        )->join(
            "marca",
            "marca.idMarca=modelo.idMarca",
            "inner"
        )->join(
            "maquinario",
            "maquinario.idMaquinario=modelo.idMaquinario",
            "inner"
        )->paginate(10);

        $pager = $this->modelo->pager;
        return view(
            "modelo/listar",
            [
                "modelos" => $dados,
                "pager" => $pager
            ]
        );
    }

    public function inserir()
    {
        $marcas = $this->marca->select(
            "idMarca, nome as nomeMarca"
        )->findAll();
        $maquinarios = $this->maquinario->select(
            "idMaquinario, nome as nomeMaquinario"
        )->findAll();

        return view("modelo/inserir", [
            "marcas" => $marcas,
            "maquinarios" => $maquinarios
        ]);
    }

    public function editar(int $param)
    {
        $modelo = $this->modelo->find($param);
        $marcas = $this->marca->findAll();
        $maquinarios = $this->maquinario->findAll();

        return view("modelo/editar", [
            "modelo" => $modelo,
            "marcas" => $marcas,
            "maquinarios" => $maquinarios
        ]);
    }

    public function onSave()
    {
        $dados = [
            "idModelo" => $this->request->getPost("idModelo"),
            "idMarca" => $this->request->getPost("idMarca"),
            "idMaquinario" => $this->request->getPost("idMaquinario"),
            "nome" => $this->request->getPost("nome")
        ];

        if ($this->modelo->save($dados)) {
            if (empty($dados["idModelo"]) || $dados["idModelo"] == " ") {
                return redirect()->route("modelo.listar")->withInput()->with("success", "Modelo inserido com sucesso ( " . $dados["nome"] . " )");
            } else {
                return redirect()->route("modelo.listar")->withInput()->with("success", "Modelo atualizado com sucesso ( " . $dados["nome"] . " )");
            }
        } else {
            return redirect()->back()->withInput()->with("errors", "Falha em gravar modelo");
        }
    }

    public function onDelete(int $param)
    {
        $dados = $this->modelo->find($param);

        if ($this->modelo->delete($param)) {
            return redirect()->route("modelo.listar")->withInput()->with("delete", "Modelo deletado com sucesso ( " . $dados->nome . " )");
        } else {
            return redirect()->back()->withInput()->with("errors", "Falha em deletar modelo");
        }
    }
}
