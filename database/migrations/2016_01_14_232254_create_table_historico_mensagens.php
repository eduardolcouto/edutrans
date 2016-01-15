<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHistoricoMensagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_mensagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa',10);
            $table->integer('id_mensagem')->unsigned();
            $table->foreign('id_mensagem')->references('id')->on('mensagens');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
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
        Schema::drop('historico_mensagens');
    }
}
