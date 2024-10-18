<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idCliente" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nome" => [
                "type" => "int",
                "constraint" => 200,
            ],
            "tipo" => [
                "type" => "int",
                "constraint" => 1,
                "default" => 1
            ],
            "cpfCnpj" => [
                "type" => "varchar",
                "constraint" => 25
            ],
            "idLocalizacao" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "endereco" => [
                "type" => "varchar",
                "constraint" => 200
            ],
            "numero" => [
                "type" => "int",
                "constraint" => 5
            ],
            "complemento" => [
                "type" => "varchar",
                "constraint" => 200,
                "null" => true
            ],
            "email" => [
                "type" => "varchar",
                "constraint" => 200,
                "null" => true,
                "unique" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idCliente");
        $this->forge->addForeignKey(
            "idLocalizacao",
            "localizacao",
            "idLocalizacao",
            "cascade",
            "cascade",
            "fk_localizacao_has_cliente"
        );
        $this->forge->createTable(
            "cliente",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "cliente",
            true,
            true
        );
    }
}
