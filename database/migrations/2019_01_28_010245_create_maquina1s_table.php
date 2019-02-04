<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquina1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


/* Para crear una migracion y un modelo al mismo tiempo se escribe 
"php artisan make:model -m" la M representa la migracion que se debe crear con el mismo nombre */



    public function up()
    {
        Schema::create('maquina1s', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('programada');
            $table->dateTime('entrega');
            $table->string('folio');
            $table->string('nombre');
            $table->string('unidades');
            $table->string('proyecto');
            $table->string('material');
            $table->string('estado');
            $table->string('urgencia');
            $table->string('horas');
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
        Schema::dropIfExists('maquina1s');
    }
}
