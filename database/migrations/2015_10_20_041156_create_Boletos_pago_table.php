<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletosPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Boletos_pago', function (Blueprint $table) {
            $table->integer('id_boleto')->unsigned();
            $table->foreign('id_boleto')->references('id')->on('Boletos');
            $table->integer('id_pago')->unsigned();
            $table->foreign('id_pago')->references('id')->on('Pagos');
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
        Schema::drop('Boletos_pago');
    }
}
