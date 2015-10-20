<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Asientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_teatro')->unsigned();
            $table->foreign('id_teatro')->references('id')->on('Teatros');
            $table->integer('numero');
            $table->string('fila');
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
        Schema::drop('Asientos');
    }
}
