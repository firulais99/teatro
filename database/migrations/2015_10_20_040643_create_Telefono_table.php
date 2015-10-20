<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Telefono', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefono');
            $table->integer('id_teatro')->unsigned();
            $table->foreign('id_teatro')->references('id')->on('Teatro');
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
        Schema::drop('Telefono');
    }
}
