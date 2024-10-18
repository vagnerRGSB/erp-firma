<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idProduto" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idEstoque" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idServico" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "quantia" => [
                "type" => "double",
                "unsigned" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idProduto");
        $this->forge->addForeignKey(
            "idEstoque",
            "estoque",
            "idEstoque",
            "cascade",
            "cascade",
            "fk_estoque_has_produto"
        );
        $this->forge->addForeignKey(
            "idServico",
            "servico",
            "idServico",
            "cascade",
            "cascade",
            "fk_servico_has_produto"
        );
        $this->forge->createTable(
            "produto",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "produto",
            true,
            true
        );
    }
}
