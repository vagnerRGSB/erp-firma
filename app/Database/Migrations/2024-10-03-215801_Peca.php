<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peca extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idPeca" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nome" => [
                "type" => "int",
                "constraint" => 200
            ]
        ]);
        $this->forge->addPrimaryKey("idPeca");
        $this->forge->createTable(
            "peca",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "peca",
            true,
            true
        );
    }
}
