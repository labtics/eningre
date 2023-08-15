<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->string('estado');
            $table->string('municipio');
            $table->string('colonia');
            $table->string('calle');
            $table->string('renta');
            $table->integer('municipio_renta');
            $table->string('colonia_renta');
            $table->string('calle_renta');
            $table->string('pago_renta');
           
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
        Schema::drop('domicilios');
    }
}
