<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Pago', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fecha');
            $table->integer('id_referencia')->unsigned();
            $table->foreign('id_referencia')->references('id')->on('Referencia');
            $table->integer('id_Venta')->unsigned();
            $table->foreign('id_Venta')->references('id')->on('Venta');
            $table->integer('id_Taquillero')->unsigned();
            $table->foreign('id_Taquillero')->references('id')->on('Taquillero');
           });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Pago');
    }
}
