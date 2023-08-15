<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('historiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->string('enfermedad');
            $table->string('enfermedad_otro');
            $table->string('capacidad_especial');
            $table->string('descripcion_capacidad');
            $table->string('alergia');
            $table->string('descripcion_alergia');
            $table->string('medicamento');
            $table->string('descripcion_medicamento');
            $table->string('tipo_sangre');

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
            Schema::drop('historiales');
    }
}
