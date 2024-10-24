<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MaquinarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class MaquinarioController extends BaseController
{
    private $maquinario;

    public function __construct()
    {
        $this->maquinario = new MaquinarioModel();
    }

    public function listar(){

        //var_dump("Listar");die;

        $maquinario = $this->maquinario->paginate(10);

        return view("maquinario/listar",[
            "maquinarios" => $maquinario,
            "pager" => $this->maquinario->pager
        ]);
    }

    public function inserir(){
        return view("maquinario/inserir");
    }
    public function editar(int $param){
        $maquinario = $this->maquinario->find($param);

        return view("maquinario/editar",[
            "maquinario" => $maquinario
        ]);
    }

    public function onSave(){
        $dados = [
            "idMaquinario" => $this->request->getPost("idMaquinario"),
            "nome" => $this->request->getPost("nome")
        ];

        if($this->maquinario->save($dados)){
            if(is_null($dados["idMaquinario"])|| $dados["idMaquinario"]== ""){
                return redirect()->route("maquinario.listar")->withInput()->with("success","Maquinário registrado (".$dados["nome"].")");
            }else{
                return redirect()->route("maquinario.listar")->withInput()->with("success","Maquinario atualizado (".$dados["nome"].")");
            }
        }else{
            return redirect()->back()->withInput()->with("errors","Erro em gravar maquinário");
        }
    }

    public function onDelete(int $param){
        $maquinario = $this->maquinario->find($param);

        if($this->maquinario->delete($param)){
            return redirect()->route("maquinario.listar")->withInput()->with("delete","Maquinario deletado (".$maquinario->nome.")");
        }else{
            return redirect()->back()->withInput()->with("errors","Erro em deletar maquinario");
        }
    }
}
