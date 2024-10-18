<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orcamento extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idOrcamento" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idCliente" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idSerie" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "observacao" => [
                "type" => "varchar",
                "constraint" => 200,
                "null" => true
            ],
            "finalizado" => [
                "type" => "int",
                "constraint" => 1,
                "null" => true,
                "default" => 1
            ]
        ]);
        $this->forge->addPrimaryKey("idOrcamento");
        $this->forge->addForeignKey(
            "idCliente",
            "cliente",
            "idCliente",
            "cascade",
            "cascade",
            "fk_cliente_has_orcamento"
        );
        $this->forge->addForeignKey(
            "idSerie",
            "serie",
            "idSerie",
            "cascade",
            "cascade",
            "fk_serie_has_orcamento"
        );
        $this->forge->createTable(
            "orcamento",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "orcamento",
            true,
            true
        );
    }
}
