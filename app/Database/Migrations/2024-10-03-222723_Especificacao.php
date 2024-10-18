<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Especificacao extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idEspecificacao" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idPeca" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "especificacao" => [
                "type" => "int",
                "constraint" => 200
            ]
        ]);
        $this->forge->addPrimaryKey("idEspecificacao");
        $this->forge->addForeignKey(
            "idPeca",
            "peca",
            "idPeca",
            "cascade",
            "cascade",
            "fk_especificacao_has_peca"
        );
        $this->forge->createTable(
            "especificacao",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "especificacao",
            true,
            true
        );
    }
}
