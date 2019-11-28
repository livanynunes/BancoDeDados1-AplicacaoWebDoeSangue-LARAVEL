<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('data_nascimento');
            $table->string('d_cpf');
            $table->string('d_endereco');
            $table->string('d_telefone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->double('d_peso');
            $table->enum('d_sexo',array('M', 'F'));
            $table->enum('tipo_sangue',array('A+', 'B+', 'O+', 'AB+', 'A-', 'B-', 'O-', 'AB-'));
            $table->rememberToken();
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
        Schema::dropIfExists('doadores');
    }
}
