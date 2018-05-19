<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'veiculo';

    /**
     * Run the migrations.
     * @table veiculo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('PLACA');
            $table->integer('LOJA_NR_LOJA');
            $table->integer('MODELO_VEICULO_ID_MODELO');

            $table->index(["MODELO_VEICULO_ID_MODELO"], 'fk_VEICULO_MODELO_VEICULO1_idx');

            $table->index(["LOJA_NR_LOJA"], 'fk_VEICULO_LOJA1_idx');


            $table->foreign('LOJA_NR_LOJA', 'fk_VEICULO_LOJA1_idx')
                ->references('NR_LOJA')->on('loja')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('MODELO_VEICULO_ID_MODELO', 'fk_VEICULO_MODELO_VEICULO1_idx')
                ->references('ID_MODELO')->on('modelo_veiculo')
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
