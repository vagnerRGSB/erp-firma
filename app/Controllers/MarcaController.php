<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarcaModel;
use CodeIgniter\HTTP\ResponseInterface;

class MarcaController extends BaseController
{

    private $marca;

    public function __construct()
    {
        $this->marca = new MarcaModel();
    }
    public function listar()
    {
        return view("marca/listar",[
            "marcas" => $this->marca->paginate(10),
            "pager" => $this->marca->pager
        ]);
    }

    public function inserir(){
        //var_dump("Inserir");die;
        return view("marca/inserir");
    }
    public function editar(int $param){
        return view("marca/editar",[
            "marca" => $this->marca->find($param)
        ]);
    }

    public function onSave(){
        $dados = [
            "idMarca" => $this->request->getPost("idMarca"),
            "nome" => $this->request->getPost("nome")
        ];

        if($this->marca->save($dados)){
            if(empty($dados["idMarca"])){
                return redirect()->route("marca.listar")->withInput()->with("success","Marca registrada ( ".$dados["nome"]." )");
            }else{
                return redirect()->route("marca.listar")->withInput()->with("success","Marca atualizada ( ".$dados["nome"]." )");
            }
        }else{
            return redirect()->back()->withInput()->with("errors","Erro em registrada marca");
        }
    }
}
