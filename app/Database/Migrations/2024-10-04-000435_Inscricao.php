<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inscricao extends Migration
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
            "idCliente" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "idLocalizacao" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "nome" => [
                "type" => "varchar",
                "constraint" => 200
            ],
            "inscMunicipal" => [
                "type" => "varchar",
                "constraint" => 25,
                "null" => true
            ],
            "inscEstadual" => [
                "type" => "varchar",
                "constraint" => 25,
                "null" => true
            ],
            "endereco" => [
                "type" => "varchar",
                "constraint" => 200,
                "null" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idInscricao");
        $this->forge->addForeignKey(
            "idLocalizacao",
            "localizacao",
            "idLocalizacao",
            "cascade",
            "cascade",
            "fk_localizacao_has_inscricao"
        );
        $this->forge->addForeignKey(
            "idCliente",
            "cliente",
            "idCliente",
            "cascade",
            "cascade",
            "fk_cliente_has_inscricao"
        );
        $this->forge->createTable(
            "inscricao",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "inscricao",
            true,
            true
        );
    }
}
