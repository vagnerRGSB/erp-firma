<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModeloMaquinario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "idModeloMaquinario"=>
            [
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true,
                "auto_increment"=>true
            ],
            "nome"=>[
                "type"=>"varchar",
                "constraint"=>200
            ],
            "idCategoriaMaquinario"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ],
            "idMarca"=>[
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ]
            ]);
            $this->forge->addPrimaryKey("idModeloMaquinario");
            $this->forge->addForeignKey("idCategoriaMaquinario","categoria_maquinario","idCategoriaMaquinario",
            "cascade","cascade",
            "fk_modelo_maquinario_has_categoria_maquinario");
            $this->forge->addForeignKey("idMarca","marca","idMarca","cascade","cascade",
            "fk_modelo_maquinario_has_marca");
            $this->forge->createTable("modelo_maquinario",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("modelo_maquinario",true,true);
    }
}
