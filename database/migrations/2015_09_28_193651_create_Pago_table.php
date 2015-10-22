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
      Schema::create('Pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fecha');
            $table->integer('id_referencia')->unsigned();
            $table->foreign('id_referencia')->references('id')->on('Referencia');
            $table->integer('id_taquillero')->unsigned();
            $table->foreign('id_taquillero')->references('id')->on('Taquilleros');
           });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Pagos');
    }
}
