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
            $table->string('id_admin')->references('id')->on('Administradores');
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
