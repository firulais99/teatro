<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Administradores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->string('password');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('domicilio');
            $table->string('email');
            $table->string('telefono');
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
         Schema::drop('Administradores');
    }
}
