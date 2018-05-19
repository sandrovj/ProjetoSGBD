<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemReservaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'item_reserva';

    /**
     * Run the migrations.
     * @table item_reserva
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('RESERVA_NUM_RESERVA');
            $table->string('VEICULO_PLACA', 7);
            $table->integer('TAXAS_ID_TAXA');
            $table->decimal('VALOR', 10, 2)->default('0.00');

            $table->index(["RESERVA_NUM_RESERVA"], 'fk_RESERVA_has_VEICULO_RESERVA1_idx');

            $table->index(["VEICULO_PLACA"], 'fk_RESERVA_has_VEICULO_VEICULO1_idx');

            $table->index(["TAXAS_ID_TAXA"], 'fk_ITEM_RESERVA_TAXAS1_idx');


            $table->foreign('TAXAS_ID_TAXA', 'fk_ITEM_RESERVA_TAXAS1_idx')
                ->references('ID_TAXA')->on('taxas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('RESERVA_NUM_RESERVA', 'item_reserva_RESERVA_NUM_RESERVA')
                ->references('NUM_RESERVA')->on('reserva')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('VEICULO_PLACA', 'fk_RESERVA_has_VEICULO_VEICULO1_idx')
                ->references('PLACA')->on('veiculo')
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
