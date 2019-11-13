<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperimentoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experimento_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',100);
            $table->bigInteger('cobaia_numero_serie');
            $table->string('situacao', 100);
            $table->longText('descricao', 300);
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
        Schema::dropIfExists('experimento_models');
    }
}
