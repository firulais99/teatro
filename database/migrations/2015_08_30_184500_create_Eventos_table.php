<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Eventos', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('id_teatro')->unsigned(); 
            $table->foreign('id_teatro')->references('id')->on('Teatros');
            $table->string('nombre');
            $table->text('sinopsis');
            $table->text('elenco');
            $table->datetime('fecha');
            $table->string('artista');
            $table->string('image');
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
        Schema::drop('Eventos');
    }
}
