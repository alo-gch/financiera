<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();

           $table->unsignedBigInteger('idclie'); //error 1 faltaba la G hahhahahah v

            $table->string('cantidad');     
            $table->string('NoPagos');
            $table->string('cuota');
            $table->string('total');
            $table->date('fechaministracion');
            $table->date('fechavencimiento');

            $table->timestamps();

              $table->foreign('idclie') 
               ->references('id')       //error 2 hay que agregar el campo id, apesar que en la 
                ->on('clients');          // clients este vacio el campo, toma por defecto
        });                                 //el nombre 'id'
    }              

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
