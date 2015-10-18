<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaquillerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Taquilleros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Usuario');
            $table->string('password', 60);
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('domicilio');
            $table->string('email');
            $table->string('telefono');
            $table->string('nom_teatro')->unsigned();
            $table->foreign('nom_teatro')->references('nombre')->on('Teatro');
            $table->timestamps();
        });

    }
    
     public function down()
    {
        Schema::table('Taquilleros', function (Blueprint $table) {
            //
        });
    }
}
