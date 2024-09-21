<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SerieModelo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idSerieModelo" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "descricao" => [
                "type" => "varchar",
                "constraint" => 300,
                "null" => true
            ],
            "ano" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idModeloMaquinario" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idSerieModelo");
        $this->forge->addForeignKey(
            "idModeloMaquinario",
            "modelo_maquinario",
            "idModeloMaquinario",
            "cascade",
            "cascade",
            "fk_serie_modelo_has_modelo_maquinario"
        );
        $this->forge->createTable("serie_modelo", true, ["engine" => "InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("serie_modelo", true, true);
    }
}
