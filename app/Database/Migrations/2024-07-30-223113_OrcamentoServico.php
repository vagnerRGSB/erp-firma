<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrcamentoServico extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idOrcamentoServico"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true,
                "auto_increment"=>true
            ],
            "idCliente"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ],
            "observacao"=>
            [
                "type"=>"varchar",
                "constraint"=>300,
                "null"=>true
            ],
            "status"=>[
                "type"=>"int",
                "constraint"=>1,
                "unsigned"=>true,
                "null"=>true,
                "default"=>"1"
            ]
            ]);
            $this->forge->addPrimaryKey("idOrcamentoServico");
            $this->forge->addForeignKey("idCliente","cliente","idCliente","cascade","cascade",
            "fk_cliente_has_orcamento_servico");
            $this->forge->createTable("orcamento_servico",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("orcamento_servico",true,true);
    }
}
