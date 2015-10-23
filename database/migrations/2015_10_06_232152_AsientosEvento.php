<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsientosEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Asientos_evento', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('id_asiento')->unsigned();
            $table->foreign('id_asiento')->references('id')->on('Asientos');
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('Eventos');
            $table->integer('id_horario')->unsigned();
            $table->foreign('id_horario')->references('id')->on('Horarios');
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
        Schema::table('asientos_evento', function (Blueprint $table) {
            //
        });
    }
}
