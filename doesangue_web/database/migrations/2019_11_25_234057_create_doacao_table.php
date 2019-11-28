<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sangue_tipo');

            $table->string('Bsangue');
            // $table->foreign('Bsangue')->references('id')->on('bancodesangue');

            $table->string('Dcpf');
            // $table->foreign('Dcpf')->references('d_cpf')->on('doadores');


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
        Schema::dropIfExists('doacao');
    }
}
