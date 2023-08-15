<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->string('tutor_1');
            $table->string('nombre_1');
            $table->string('telefono_1');
            $table->string('celular_1');
            $table->integer('estado_1');
            $table->integer('municipio_1');
            $table->string('colonia_1');
            $table->string('calle_1');
            $table->string('tutor_2');
            $table->string('nombre_2');
            $table->string('telefono_2');
            $table->string('celular_2');
            $table->integer('estado_2');
            $table->integer('municipio_2');
            $table->string('colonia_2');
            $table->string('calle_2');
            
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
        Schema::drop('familiares');
    }
}
