<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalbancoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localbanco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Bnumero');
            // $table->foreign('Bnumero')->references('id')->on('bancodesangue');
            $table->string('Blocal');

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
        Schema::dropIfExists('localbanco');
    }
}
