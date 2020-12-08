<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_respuestas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->bigInteger('cuestionario_id')->unsigned();
            $table->foreign('cuestionario_id')->references('id')->on('cuestionarios');
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
        Schema::dropIfExists('empresas_respuestas');
    }
}
