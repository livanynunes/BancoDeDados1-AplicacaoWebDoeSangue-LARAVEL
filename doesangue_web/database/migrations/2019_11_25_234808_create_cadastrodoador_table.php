<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrodoadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastrodoador', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('doadorcpf');
            // $table->foreign('doadorcpf')->references('d_cpf')->on('doadores');

            $table->string('bancocodigo');
            // $table->foreign('bancocodigo')->references('id')->on('bancodesangue');


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
        Schema::dropIfExists('cadastrodoador');
    }
}
