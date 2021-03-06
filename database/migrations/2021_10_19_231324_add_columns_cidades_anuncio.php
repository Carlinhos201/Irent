<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsCidadesAnuncio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anuncios', function (Blueprint $table) {
            Schema::table('anuncios', function (Blueprint $table) {
                $table->unsignedBigInteger('cidade_id');
                $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anuncios', function (Blueprint $table) {
            $table->dropForeign('cidade_id');
            $table->dropColumn('cidade_id');
        });
    }
}
