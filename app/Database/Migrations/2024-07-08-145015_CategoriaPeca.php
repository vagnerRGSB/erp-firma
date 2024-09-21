<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriaPeca extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                "idCategoriaPeca" =>
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

        $this->forge->addPrimaryKey("idCategoriaPeca");
        $this->forge->createTable("categoria_peca", true, ["engine" => "InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("categoria_peca", true, true);
    }
}
