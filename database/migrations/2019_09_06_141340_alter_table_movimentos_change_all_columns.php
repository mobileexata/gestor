<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableMovimentosChangeAllColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movimentos', function(Blueprint $table){
            $table->float('ly')->default(0.00)->change();
            $table->bigInteger('qtd_vendas')->default(0)->change();
            $table->float('vl_total_vendas')->default(0.00)->change();
            $table->bigInteger('pecas_vendidas')->default(0)->change();
            $table->float('markup')->default(0.00)->change();
            $table->bigInteger('clientes_identificados')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
