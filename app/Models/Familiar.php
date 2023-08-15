<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;

class familiar extends Model
{
    protected $table = 'familiares';
    protected $fillable = ['id','alumno_id','tutor_1','nombre_1','telefono_1','celular_1','estado_1','municipio_1','colonia_1','calle_1','tutor_2','nombre_2','telefono_2','celular_2','estado_2','municipio_2','colonia_2','calle_2'];

    // Un FAMILIAR le pertenece a un ALUMNO
    public function alumno()
    {
        return $this->belongsTo('App\Models\Alumno');
    }
}
 