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
            "nome"=>
            [
                "type"=>"varchar",
                "constraint"=>200,
            ],
            "idCategoriaMaquinario"=>
            [
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ],
            "idMarca"=>
            [
                "type"=>"int",
                "constraint"=>5,
                "unsigned"=>true
            ]
        ]);
        $this->forge->addPrimaryKey("idModeloMaquinario");
        $this->forge->addForeignKey("idMarca","marca","IdMarca","cascade","cascade",
        "fk_marca_has_modelo_maquinario");
        $this->forge->addForeignKey("idCategoriaMaquinario","categoria_maquinario","cascade","cascade",
        "fk_categoria_maquinario_has_modelo_maquinario");
        $this->forge->createTable("modelo_maquinario");
    }

    public function down()
    {
        $this->forge->dropTable("modelo_maquinario");
    }
}
