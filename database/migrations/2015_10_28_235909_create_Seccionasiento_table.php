<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionasientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seccion_asiento', function (Blueprint $table) {
            $table->integer('id_seccion')->unsigned();
            $table->foreign('id_seccion')->references('id')->on('Seccion');
            $table->integer('id_asiento')->unsigned();
            $table->foreign('id_asiento')->references('id')->on('Asientos');
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
        //
    }
}
