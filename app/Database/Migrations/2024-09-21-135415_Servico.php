<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Servico extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idServico" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                
            ],
            "dataCadastro" =>
            [
                "type" => "datetime"
            ],
            "descricao" =>
            [
                "type" => "varchar",
                "constraint" => 300,
            ],
            "minutoServico" =>
            [
                "type" => "int",
                "constraint" => 4,
                "unsigned" => true
            ],
            "idCategoriaServico" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idOrcamentoServico" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ]

        ]);
        $this->forge->addPrimaryKey("IdServico");
        $this->forge->addForeignKey(
            "idCategoriaServico",
            "categoria_servico",
            "idCategoriaServico",
            "cascade",
            "cascade",
            "fk_categoria_servico_has_servico"
        );
        $this->forge->addForeignKey(
            "idOrcamentoServico",
            "orcamento_servico",
            "idOrcamentoServico",
            "cascade",
            "cascade",
            "fk_orcamento_servico_has_servico"
        );
        $this->forge->createTable("servico", true, ["engine" => "InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("servico", true, true);
    }
}
