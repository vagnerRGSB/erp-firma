<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InscricaoCliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idInscricao" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idLocalidade" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idCliente" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "nome" => [
                "type" => "varchar",
                "constraint" => 200,
            ],
            "inscEstadual" =>
            [
                "type" => "varchar",
                "constraint" => 20,
                "null" => true,
                "unique" => true
            ],
            "inscMunicipal" => [
                "type" => "varchar",
                "constraint" => 20,
                "null" => true,
                "unique" => true
            ],
            "estrada" => [
                "type" => "varchar",
                "constraint" => 300,
                "null" => true
            ],
            "km" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "null" => true
            ]

        ]);
        $this->forge->addPrimaryKey("idInscricao");
        $this->forge->addForeignKey(
            "idLocalidade",
            "localidade",
            "idLocalidade",
            "cascade",
            "cascade",
            "fk_localidade_has_inscricao"
        );
        $this->forge->addForeignKey(
            "idCliente",
            "cliente",
            "idCliente",
            "cascade",
            "cascade",
            "fk_cliente_has_localidade"
        );
        $this->forge->createTable("inscricao_cliente", true, ["engine" => "InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("inscricao_cliente", true, true);
    }
}
