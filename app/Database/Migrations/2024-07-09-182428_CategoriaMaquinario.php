<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriaMaquinario extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                "idCategoriaMaquinario" =>
                [
                    "type" => "int",
                    "constraint" => 5,
                    "unsigned" => true,
                    "auto_increment" => true
                ],
                "nome" =>
                [
                    "type" => "varchar",
                    "constraint" => 200
                ]
            ]
        );
        $this->forge->addPrimaryKey("idCategoriaMaquinario");
        $this->forge->createTable("categoria_maquinario",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("categoria_maquinario");
    }
}
