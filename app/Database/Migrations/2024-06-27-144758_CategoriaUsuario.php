<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriaUsuario extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                "idCategoriaUsuario"=>
                [
                    "type"=>"int",
                    "constraint"=>"7",
                    "unsigned"=>true,
                    "auto_increment"=>true
                ],
                "nome"=>
                [
                    "type"=>"varchar",
                    "constraint"=>"100",

                ],
                "prefixo"=>
                [
                    "type"=>"varchar",
                    "constraint"=>"3",
                    "unique"=>true,
                ]
            ]
        );
        $this->forge->addPrimaryKey("idCategoriaUsuario");
        $this->forge->createTable("categorias_usuarios",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
       $this->forge->dropTable("categorias_usuarios");
    }
}
