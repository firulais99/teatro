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
        Schema::table('pagos', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->dateTime('fecha');
            $table->string('referencia');
            $table->decimal('importe', 5, 2);
            $table->integer('id_taquilla')->unsigned();
            $table->foreign('id_taquillero')->references('taquilleros')->on('id');
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
        Schema::table('pagos', function (Blueprint $table) {
            //
        });
    }
}
