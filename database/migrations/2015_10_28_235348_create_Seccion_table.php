<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->decimal('pecio',5,4);
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
