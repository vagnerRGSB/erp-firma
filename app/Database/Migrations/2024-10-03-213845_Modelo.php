<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Modelo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idModelo" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idMarca" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idMaquinario" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "nome" => [
                "type" => "varchar",
                "constraint" => 200,
            ]
        ]);
        $this->forge->addPrimaryKey("idModelo");
        $this->forge->addForeignKey(
            "idMarca",
            "marca",
            "idMarca",
            "cascade",
            "cascade",
            "fk_marca_has_modelo"
        );
        $this->forge->addForeignKey(
            "idMaquinario",
            "maquinario",
            "idMaquinario",
            "cascade",
            "cascade",
            "fk_maquinario_has_modelo"
        );
        $this->forge->createTable(
            "modelo",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "modelo",
            true,
            true
        );
    }
}
