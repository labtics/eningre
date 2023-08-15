<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nombre');
            $table->string('ape_pat');
            $table->string('ape_mat');
            $table->string('sexo');
            $table->string('estado_civ');
            $table->integer('edad');
            $table->date('fecha_nac');
            $table->string('lenguaje');
            $table->string('lenguaje_otro');
            $table->string('celular');
            $table->string('telefono_casa');
          
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('alumnos');
    }
}
