<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Serie extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idSerie" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idModelo" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "ano" => [
                "type" => "int",
                "constraint" => 5,
            ]
        ]);
        $this->forge->addPrimaryKey("idSerie");
        $this->forge->addForeignKey(
            "idModelo",
            "modelo",
            "idModelo",
            "cascade",
            "cascade",
            "fk_modelo_has_serie"
        );
        $this->forge->createTable(
            "serie",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "serie",
            true,
            true
        );
    }
}
