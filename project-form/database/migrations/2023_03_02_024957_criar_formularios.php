<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarFormularios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome' , 128);
            $table->string('email',255);
            $table->string('telefone',20);
            $table->string('cep',20);
            $table->string('cpf',128);
            $table->string('rua', 255);
            $table->string('numero', 128);
            $table->string('cidade',128);
            $table->string('mensagem',255);
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}