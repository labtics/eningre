<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Alumno;

class Historial extends Model
{
   protected $table = 'historiales';
   protected $fillable = ['alumno_id','enfermedad','enfermedad_otro','capacidad_especial','descripcion_capacidad','alergia','descripcion_alergia', 'medicamento','descripcion_medicamento','tipo_sangre'];

    // Un HISTORIAL le pertenece a un ALUMNO
    public function alumno()
    {
        return $this->belongsTo('App\Models\Alumno');
    }
}
