<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;

class Domicilio extends Model
{
   protected $table = 'domicilios';
   protected $fillable = ['alumno_id','estado', 'municipio', 'colonia', 'calle','renta','municipio_renta','colonia_renta','calle_renta', 'pago_renta'];
      
    // Un DOMICILIO le pertenece a un ALUMNO
    public function alumno()
    {
        return $this->belongsTo('App\Models\Alumno');
    }
}
 