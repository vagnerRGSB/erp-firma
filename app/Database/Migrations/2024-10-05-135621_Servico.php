<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Servico extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idServico" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "dataCadastro" => [
                "type" => "date",
                "null" => true
            ],
            "idOrcamento" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idAtividade" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "descricao" => [
                "type" => "varchar",
                "constraint" => 200
            ],
            "tempoMinuto" =>
            [
                "type" => "double",
                "unsigned" => true,
                "default" => 0
            ]
        ]);
        $this->forge->addPrimaryKey("idServico");
        $this->forge->addForeignKey(
            "idOrcamento",
            "orcamento",
            "idOrcamento",
            "cascade",
            "cascade",
            "fk_orcamento_has_servico"
        );
        $this->forge->addForeignKey(
            "idAtividade",
            "atividade",
            "idAtividade",
            "cascade",
            "cascade",
            "fk_atividade_has_servico"
        );
        $this->forge->createTable(
            "servico",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "servico",
            true,
            true
        );
    }
}
