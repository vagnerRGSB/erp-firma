<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Localidade extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idLocalidade" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nome" => [
                "type" => "varchar",
                "constraint" => 150
            ],
            "cep" =>
            [
                "type" => "varchar",
                "constraint" => 10,
            ],
            "idCidade" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idLocalidade");
        $this->forge->addUniqueKey("cep");
        $this->forge->addForeignKey(
            "idCidade",
            "cidade",
            "idCidade",
            "cascade",
            "cascade",
            "fk_localidade_has_cidade"
        );
        $this->forge->createTable("localidade", true, ["engine" => "InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("localidade", true, true);
    }
}
