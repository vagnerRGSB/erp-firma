<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Localizacao extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idLocalizacao" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "idCidade" => [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ],
            "nome" => [
                "type" => "varchar",
                "constraint" => 200,
            ],
            "cep" =>
            [
                "type" => "varchar",
                "constraint" => 9,
            ]
        ]);
        $this->forge->addPrimaryKey("idLocalizacao");
        $this->forge->addForeignKey(
            "idCidade",
            "cidade",
            "idCidade",
            "cascade",
            "cascade",
            "fk_cidade_has_localizacao"
        );
        $this->forge->createTable(
            "localizacao",
            true,
            ["engine" => "InnoDB"]
        );
    }

    public function down()
    {
        $this->forge->dropTable(
            "localizacao",
            true,
            true
        );
    }
}
