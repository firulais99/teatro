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
            $table->integer('id_teatro')->unsigned();
            $table->foreign('id_teatro')->references('id')->on('Teatro');
            $table->string('Usuario');
            $table->string('password', 60);
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('domicilio');
            $table->string('email');
<<<<<<< HEAD:database/migrations/2015_08_30_72358_create_Taquilleros_table.php
            $table->string('telefono');     
=======
            $table->string('telefono');
            $table->integer('id_teatro')->unsigned();
            $table->foreign('id_teatro')->references('id')->on('Teatro');
>>>>>>> 839143c3e259435a78edca875b0948de276af3b2:database/migrations/2015_08_72358_create_Taquilleros_table.php
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
