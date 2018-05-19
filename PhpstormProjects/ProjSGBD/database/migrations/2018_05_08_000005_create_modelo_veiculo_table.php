<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloVeiculoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'modelo_veiculo';

    /**
     * Run the migrations.
     * @table modelo_veiculo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_MODELO');
            $table->string('MARCA', 45);
            $table->string('MODELO', 45);
            $table->string('VERSAO', 45);
            $table->integer('CATEGORIA_ID_CATEG');

            $table->index(["CATEGORIA_ID_CATEG"], 'fk_MODELO_VEICULO_CATEGORIA1_idx');

            $table->unique(["MARCA", "MODELO", "VERSAO"], 'marca_modelo_versao');


            $table->foreign('CATEGORIA_ID_CATEG', 'fk_MODELO_VEICULO_CATEGORIA1_idx')
                ->references('ID_CATEG')->on('categoria')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
