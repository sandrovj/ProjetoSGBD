<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientePfTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cliente_pf';

    /**
     * Run the migrations.
     * @table cliente_pf
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('CPF');
            $table->integer('CLIENTE_ID_CLIENTE');

            $table->index(["CLIENTE_ID_CLIENTE"], 'fk_CLIENTE_PF_CLIENTE1_idx');


            $table->foreign('CLIENTE_ID_CLIENTE', 'fk_CLIENTE_PF_CLIENTE1_idx')
                ->references('ID_CLIENTE')->on('cliente')
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
