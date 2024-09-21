<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }
    public function listar()
    {
        $id = [session("logado")["idUsuario"]];
        echo view("layouts/header", [
            "itens" => $this->usuario->whereNotIn("idUsuario",$id)->orderBy("nome")->paginate(10),
            "pager" => $this->usuario->pager
        ]);
        echo view("layouts/menuMaster");
        echo view("usuario/listar");
        echo view("layouts/footer");
    }
    public function inserir()
    {
        echo view("layouts/header");
        echo view("layouts/menuMaster");
        echo view("usuario/inserir");
        echo view("layouts/footer");
    }
    public function editar($param)
    {
        echo view("layouts/header", [
            "item" => $this->usuario->find($param)
        ]);
        echo view("layouts/menuMaster");
        echo view("usuario/editar");
        echo view("layouts/footer");
    }
    public function onSave()
    {
        $resultado = $this->usuario->save($this->request->getPost());
        if ($resultado) {
            return redirect()->route("usuario.listar")->withInput()->with(
                "success",
                $this->request->getPost("nome") . " inserido/atualizado com sucesso"
            );
        } else {
            return redirect()->back()->withInput()->with(
                "errors",
                $this->usuario->errors()
            );
        }
    }
    public function onDelete($param)
    {
        $data = $this->usuario->find($param);
        $resultado = $this->usuario->delete($param);
        if ($resultado) {
            return redirect()->route("usuario.listar")->withInput()->with(
                "success",
                " " . $data["nome"] . " removido com sucesso"
            );
        } else {
            return redirect()->back();
        }
    }
}
