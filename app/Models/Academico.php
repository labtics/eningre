<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;

class Academico extends Model
{
   protected $table = 'academicos';
   protected $fillable = ['alumno_id','matricula', 'licenciatura', 'ciclo_ing', 'promedio', 'tipo_ing', 'div_ant_cam', 'lic_ant_cam', 'uni_ant_equi','lic_ant_equi'];

    // Un ESTADO ACADEMICO le pertenece a un ALUMNO
    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }
}
