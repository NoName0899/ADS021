<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoradoresHasVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores_has_visitantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('morador_id')->unsigned();
            $table->foreign('morador_id')->references('id')->on('moradores')->onDelete('cascade');

            $table->bigInteger('visitante_id')->unsigned();
            $table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('cascade');
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
        Schema::dropIfExists('moradores_has_visitantes');
    }
}
