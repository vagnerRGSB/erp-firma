<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PecaServico extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idPecaServico"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ],
            "quantia"=>[
                "type"=>"double"
            ],
            "idServico"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ],
            "idPeca"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ]
            ]);
            $this->forge->addPrimaryKey("idPecaServico");
            $this->forge->addForeignKey("idServico","servico","idServico","cascade","cascade",
            "fk_servico_has_peca_servico");
            $this->forge->addForeignKey("idPeca","peca","idPeca","cascade","cascade",
            "fk_peca_has_peca_servico");
            $this->forge->createTable("peca_servico",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("peca_servico",true,true);
    }
}
