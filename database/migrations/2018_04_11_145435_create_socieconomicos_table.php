<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocieconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socioeconomicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('inscripcion');
            $table->string('beca');
            $table->string('transporte');
            $table->string('dependencia_eco');
            $table->integer('hijos');
            $table->integer('hermanos');
            $table->string('ees');
            $table->string('actual_trabajo');
            $table->string('casa_familia');
            $table->integer('habitantes_casa');
            $table->integer('persona_dinero');
            $table->integer('sostiene_estudio');
            //$table->string('pago_estudio');
            $table->string('prospera');
            $table->string('material_techo');
            $table->string('material_piso');
            $table->integer('numero_cuartos');
            $table->integer('numero_cuartos_dor');
            $table->string('cuarto_cocina');
            $table->integer('numero_banios');
            $table->string('toma_de_agua');
            $table->integer('numero_focos');
            $table->integer('numero_autos');
            $table->integer('numero_tvs');
            $table->integer('numero_cels');
            $table->integer('numero_comp');
            $table->string('internet');
            $table->string('espacio_estudio');
            $table->string('clase_social');
            $table->string('etnia_procedencia');
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
         Schema::drop('socioeconomicos');
    }
}
