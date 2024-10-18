<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Estoque extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idEstoque" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idEspecificacao" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idMarca" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "estoque" => [
                "type" => "double",
                "unsigned" => true,
                "default" => 0,
                "null" => true
            ],
            "valorUnitario" =>
            [
                "type" => "double",
                "unsigned" => true,
                "default" => 0,
                "null" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idEstoque");
        $this->forge->addForeignKey(
            "idEspecificacao",
            "especificacao",
            "idEspecificacao",
            "cascade",
            "cascade",
            "fk_especificacao_has_estoque"
        );
        $this->forge->addForeignKey(
            "idMarca",
            "marca",
            "idMarca",
            "cascade",
            "cascade",
            "fk_marca_has_estoque"
        );
        $this->forge->createTable(
            "estoque",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "estoque",
            true,
            true
        );
    }
}
