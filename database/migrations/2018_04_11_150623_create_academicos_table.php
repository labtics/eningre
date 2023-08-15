<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->string('matricula');
            $table->string('licenciatura');
            $table->string('ciclo_ing');
            $table->double('promedio',2,1);
            $table->string('tipo_ing');
            $table->string('div_ant_cam');
            $table->string('lic_ant_cam');
            $table->string('uni_ant_equi');
            $table->string('lic_ant_equi');
    
            $table->timestamps();

           $table->foreign('alumno_id')->references('id')->on('alumnos')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('academicos');
    }
}
