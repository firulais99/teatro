<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id_lineadeventa')->unsigned();
            $table->foreign('id_lineadeventa')->references('id')->on('lineadeventa');
            $table->integer('id_pago')->unsigned();
            $table->foreign('id_pago')->references('id')->on('Pagos');
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
        Schema::drop('Ventas');
    }
}
