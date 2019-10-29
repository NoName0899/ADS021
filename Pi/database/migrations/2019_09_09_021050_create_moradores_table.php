<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cpf');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('marca');
            $table->string('veiculo');
            $table->string('placa');
            $table->string('situacao');

            $table->bigInteger('condominio_id')->unsigned();
            $table->foreign('condominio_id')->references('id')->on('condominios')->onDelete('cascade');

            $table->bigInteger('unidade_id')->unsigned();
            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('cascade');


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
        Schema::dropIfExists('moradores');
    }
}
