<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cidade extends Migration
{
    public function up()
    {
    $this->forge->addField([
        "idCidade"=>
        [
            "type"=>"int",
            "constraint"=>5,
            "unsigned"=>true,
            "auto_increment"=>true
        ],
        "nome"=>
        [
            "type"=>"varchar",
            "constraint"=>200
        ],
        "idEstado"=>
        [
            "type"=>"int",
            "constraint"=>5,
            "unsigned"=>true
        ]
    ]);
        $this->forge->addPrimaryKey("idCidade");
        $this->forge->addForeignKey("idEstado","estado","idEstado","cascade","cascade",
        "fk_cidade_has_estado");
        $this->forge->createTable("cidade",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("cidade",true,true);
    }
}
