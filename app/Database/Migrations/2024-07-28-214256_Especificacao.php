<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Especificacao extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idEspecificacao"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true,
                "auto_increment"=>true
            ],
            "idCategoriaPeca"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ],
            "especificacao"=>[
                "type"=>"varchar",
                "constraint"=>"100",
            ],
            "dimensoes"=>[
                "type"=>"varchar",
                "constraint"=>100
            ]
        ]);
        $this->forge->addPrimaryKey("idEspecificacao");
        $this->forge->addForeignKey("idCategoriaPeca","categoria_peca","idCategoriaPeca","cascade","cascade",
        "fk_categoria_peca_has_especificacao");
        $this->forge->createTable("especificacao",true,["engine"=>"InnoDB"]);

    }

    public function down()
    {
        $this->forge->dropTable("especificacao");
    }
}
