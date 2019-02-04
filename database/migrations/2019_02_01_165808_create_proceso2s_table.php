<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProceso2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso2s', function (Blueprint $table) {
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
            $table->string('horasH');
            $table->string('horasM');
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
        Schema::dropIfExists('proceso2s');
    }
}
