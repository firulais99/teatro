<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineadeventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('lineadeventa', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('id_pago')->unsigned();
            $table->foreign('id_pago')->references('id')->on('Pagos');
            $table->boolean('confirmado');
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
