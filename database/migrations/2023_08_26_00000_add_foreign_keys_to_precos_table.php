<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('precos', function (Blueprint $table) {
            $table->foreign(['produto_id'], 'fk_produto_idx')->references(['id'])->on('produtos')->onUpdate('NO ACTION')->onDelete('cascade');
            $table->foreign(['cliente_id'], 'fk_cliente_creator_idx')->references(['id'])->on('clientes')->onUpdate('NO ACTION')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('precos', function (Blueprint $table) {
            $table->dropForeign('fk_produto_idx');
            $table->dropForeign('fk_cliente_creator_idx');
        });
    }
};
