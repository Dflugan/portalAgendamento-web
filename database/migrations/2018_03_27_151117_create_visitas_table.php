<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_auth');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('rg');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('empresa');
            $table->string('funcao');
            $table->string('imagem');
            $table->timestamps();
        });
        Schema::table('visitas', function (Blueprint $table) {
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas');
    }
}
