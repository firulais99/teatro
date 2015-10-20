<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Accesos', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->interger('id')->unsigned();
            $table->foreign('id_admin')->references('Administradores')->on('id');
=======
            $table->string('nombre');
            $table->string('url');
>>>>>>> 839143c3e259435a78edca875b0948de276af3b2
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void     */
    public function down()
    {
       Schema::drop('Accesos');
    }
}
