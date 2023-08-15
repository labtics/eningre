<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;

class Socioeconomico extends Model
{
   protected $table = 'socioeconomicos';
   protected $fillable = ['alumno_id','inscripcion', 'beca', 'transporte', 'dependencia_eco', 'hijos', 'hermanos', 'ees','actual_trabajo', 'casa_familia', 'habitantes_casa', 'persona_dinero', 'sostiene_estudio', 'prospera', 'material_techo', 'material_piso','numero_cuartos','numero_cuartos_dor','cuarto_cocina','numero_banios','toma_de_agua','numero_focos', 'numero_autos','numero_tvs', 'numero_cels', 'numero_comp', 'internet', 'espacio_estudio','clase_social','etnia_procedencia'];

    // Un ESTADO SOCIOECONOMICO le pertenece a un ALUMNO
    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }
}
 