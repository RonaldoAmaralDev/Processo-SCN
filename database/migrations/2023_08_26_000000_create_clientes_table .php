<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf_cnpj')->unique();
            $table->string('endereco_residencial_cep');
            $table->string('endereco_residencial_numero');
            $table->string('endereco_residencial_complemento');
            $table->string('endereco_comercial_cep')->nullable();
            $table->string('endereco_comercial_numero')->nullable();
            $table->string('endereco_comercial_complemento')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
