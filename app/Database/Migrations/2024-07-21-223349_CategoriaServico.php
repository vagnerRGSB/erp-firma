<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriaServico extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idCategoriaServico" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nome" =>
            [
                "type" => "varchar",
                "constraint" => 300
            ],
            "horaCobrada" =>
            [
                "type" => "double",
                "null" => true,
                "default" => "00.00"
            ]
        ]);

        $this->forge->addPrimaryKey("idCategoriaServico");
        $this->forge->createTable("categoria_servico", true, ["engine" => "InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("categoria_servico", true, true);
    }
}
