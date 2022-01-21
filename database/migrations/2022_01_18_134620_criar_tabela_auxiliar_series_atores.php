<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAuxiliarSeriesAtores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliar_series_atores', function (Blueprint $table){
            
        $table->integer('id_series')->unsigned();
        $table->foreign('id_series')->references('id_series')->on('series')->onDelete('cascade');

        $table->integer('id_atores')->unsigned();
        $table->foreign('id_atores')->references('id_atores')->on('atores')->onDelete('cascade');
      
    });
    }

    /**   $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        Schema::drop('auxiliar_series_atores');
    }
}
