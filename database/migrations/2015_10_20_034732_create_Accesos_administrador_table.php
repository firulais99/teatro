<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Accesos_administrador', function (Blueprint $table) {
            $table->integer('id_administrador')->unsigned();
            $table->foreign('id_administrador')->references('id')->on('Administradores');
            $table->integer('id_acceso')->unsigned();
            $table->foreign('id_acceso')->references('id')->on('Accesos');
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
        Schema::drop('Accesos_administrador');
    }
}
