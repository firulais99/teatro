    <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Boletos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('Eventos');
            $table->string('id_referencia');
            $table->integer('id_asiento')->unsigned();
                $table->integer('id_pago')->unsigned();
            $table->foreign('id_pago')->references('id')->on('Pagos');
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
        Schema::drop('Boletos');
    }
}
