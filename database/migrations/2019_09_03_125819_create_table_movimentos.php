<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMovimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('empresa_id')->unsigned();
            $table->date('data');
            $table->bigInteger('qtd_vendas');
            $table->float('vl_total_vendas');
            $table->float('ticket_medio');
            $table->bigInteger('pecas_vendidas');
            $table->float('pecas_atendimento');
            $table->float('markup');
            $table->bigInteger('clientes_identificados');
            $table->timestamps();
            $table->foreign('empresa_id')->on('empresas')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['empresa_id', 'data']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentos');
    }
}
