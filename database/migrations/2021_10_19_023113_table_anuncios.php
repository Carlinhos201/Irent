<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableAnuncios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
                    $table->id();
                    $table->unsignedBigInteger('user_id');
                    $table->foreign('user_id')->references('id')->on('users');
                    $table->string('titulo');
                    $table->string('descricao')->nullable();
                    $table->integer('quartos')->nullable();
                    $table->string('proprietario');
                    $table->string('bairro');
                    $table->string('logradouro');
                    $table->string('numero');
                    $table->string('cep')->nullable();
                    $table->string('tipo');
                    $table->string('valor');
                    $table->boolean('ativo');
                    $table->string('email')->nullable();
                    $table->string('data_nasc')->nullable();
                    $table->string('cpf');
                    $table->string('telefone')->nullable();
                    $table->string('celular');
                    $table->integer('qtd_quartos')->nullable();
                    $table->integer('qtd_banh')->nullable();
                    $table->integer('qtd_suites')->nullable();
                    $table->integer('qtd_garag')->nullable();
                    $table->integer('numero_andar')->nullable();
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
        Schema::dropIfExists('anuncios');
    }
}
