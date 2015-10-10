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
        Schema::table('asientos_evento', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('id_asiento')->undigned();
            $table->foreign('id_asiento')->references('asientos')->on('id');
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('eventos')->on('id');
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
