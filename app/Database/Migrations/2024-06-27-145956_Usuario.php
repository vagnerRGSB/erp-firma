<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                "idUsuario"=>
                [
                    "type"=>"int",
                    "constraint"=>"7",
                    "unsigned"=>true,
                    "auto_increment"=>true
                ],
                "idCategoriaUsuario"=>
                [
                    "type"=>"int",
                    "constraint"=>"7",
                    "unsigned"=>true
                ],
                "nome"=>
                [
                    "type"=>"varchar",
                    "constraint"=>"200"
                ],
                "email"=>
                [
                    "type"=>"varchar",
                    "constraint"=>"200",
                    "unique"=>"true"
                ],
                "senha"=>
                [
                    "type"=>"varchar",
                    "constraint"=>"300"
                ]
            ]
        );
        $this->forge->addPrimaryKey("idUsuario");
        $this->forge->addForeignKey("idCategoriaUsuario","categorias_usuarios","idCategoriaUsuario","cascade","cascade","fk_categorias_has_usuario");
        $this->forge->createTable("usuarios",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
        //
    }
}
