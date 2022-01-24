<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApp1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //CREACION DE TABLAS
        Schema::create('app2s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('app1s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('correo');
            $table->string('imagen');
            //RELACION DE TABLAS
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('departamentos_id')->references('id')->on('app2s');
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
        Schema::dropIfExists('app1s');
        Schema::dropIfExists('app2s');
    }
}
