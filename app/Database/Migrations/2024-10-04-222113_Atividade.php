<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Atividade extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idAtividade" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nome" => [
                "type" => "int",
                "constraint" => 200
            ],
            "valorHora" => [
                "type" => "double",
                "null" => true,
                "default" => 0
            ]
        ]);
        $this->forge->addPrimaryKey("idAtividade");
        $this->forge->createTable(
            "atividade",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "atividade",
            true,
            true
        );
    }
}
