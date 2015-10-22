<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Horarios_evento', function (Blueprint $table) {
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('Eventos');
            $table->integer('id_horario')->unsigned();
            $table->foreign('id_horario')->references('id')->on('Horarios');
            $table->date('fecha');
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
        Schema::drop('Horarios_evento');
    }
}
