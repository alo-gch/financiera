<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosrealizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagosrealizados', function (Blueprint $table) {
            $table->id();

              $table->unsignedBigInteger('idclie');

            $table->string('numpago');
            $table->string('cantidad');


            $table->timestamps();

               $table->foreign('idclie') //faltaba la G hahhahahah viste?
               ->references('id')
                ->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagosrealizados');
    }
}
