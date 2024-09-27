<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idCliente" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment"
            ],
            "categoria" =>
            [
                "type" => "varchar",
                "constraint" => 1,
                "default"=>"f"
            ],
            "nome" =>
            [
                "type" => "varchar",
                "constraint" => 150,
            ],
            "cpfCnpj" =>
            [
                "type" => "varchar",
                "constraint" => 15,
                "unique" => true
            ],
            "logradouro" => [
                "type" => "varchar",
                "constraint" => 200,
                "null"=>true
            ],
            "numLogradouro" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned"=>true,
                "null"=>true
            ],
            "complemento" =>
            [
                "type" => "varchar",
                "constraint" => 200,
                "null" => true
            ],
            "email" =>
            [
                "type" => "varchar",
                "constraint" => 150,
                "unique" => true,
                "null"=>true
            ],
            "idLocalidade" =>
            [
                "type" => "int",
                "constraint" => 5,
                "unsigned" => true
            ]
        ]);
        $this->forge->addPrimaryKey("idCliente");
        $this->forge->addForeignKey(
            "idLocalidade",
            "localidade",
            "idLocalidade",
            "cascade",
            "cascade",
            "fk_localidade_has_cliente"
        );
        $this->forge->createTable("cliente");
    }

    public function down()
    {
        $this->forge->dropTable("cliente", true, true);
    }
}
