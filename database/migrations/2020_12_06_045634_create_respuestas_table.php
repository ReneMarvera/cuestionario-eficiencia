<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->boolean('verdadero');

            $table->bigInteger('empresa_respuesta_id')->unsigned();
            $table->foreign('empresa_respuesta_id')->references('id')->on('empresas_respuestas');

            $table->bigInteger('pregunta_id')->unsigned();
            $table->foreign('pregunta_id')->references('id')->on('preguntas');

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
        Schema::dropIfExists('respuestas');
    }
}
