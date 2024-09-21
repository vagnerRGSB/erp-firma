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
            "idMarca" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idEspecificacao" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "valorUnit" => [
                "type" => "double",
                "unsigned" => true
            ],
            "quantiaEstoque" => [
                "type" => "double",
                "unsigned" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idPeca");
        $this->forge->addForeignKey(
            "idMarca",
            "marca",
            "idMarca",
            "cascade",
            "cascade",
            "fk_marca_has_peca"
        );
        $this->forge->addForeignKey(
            "idEspecificacao",
            "especificacao",
            "idEspecificacao",
            "cascade",
            "cascade",
            "fk_especificacao_has_peca"
        );
        $this->forge->createTable("peca", true, ["engine" => "InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("peca", true, true);
    }
}
