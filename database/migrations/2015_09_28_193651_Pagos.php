<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pagos', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->dateTime('fecha');
            $table->decimal('importe', 5, 2);
            $table->integer('id_referencia')->unsigned();
            $table->foreign('id_referencia')->references('id')->on('Referencias');
            $table->integer('id_taquillero')->unsigned();
            $table->foreign('id_taquillero')->references('id')->on('Taquilleros');
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('Eventos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Pagos', function (Blueprint $table) {
            //
        });
    }
}
