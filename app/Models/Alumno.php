<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Domicilio;
use  App\Models\Historial;
use  App\Models\Familiar;
Use  App\Models\Socioeconomico;
Use  App\Models\Academico;

class Alumno extends Model
{
  protected $table = 'alumnos';
  protected $fillable = ['id','user_id','nombre', 'ape_pat','ape_mat', 'sexo', 'estado_civ', 'edad', 'fecha_nac', 'lenguaje', 'lenguaje_otro','celular', 'telefono_casa'];


  //Un ALUMNO tiene un DOMICILIO
    public function domicilio()
    {
        return $this->hasOne('App\Models\Domicilio');
    }

    //Un AlUMNO tiene un HISTORIAL
    public function historial()
    {
        return $this->hasOne('App\Models\Historial');
    }

    //Un AlUMNO tiene un FAMILIAR
    public function familiar()
    {
        return $this->hasOne('App\Models\Familiar');
    }

    //Un AlUMNO tiene un estado SOCIECONOMICO

    public function socioeconomico()
    {
        return $this->hasOne('App\Models\Socieconomico');
    }

    //Un AlUMNO tiene un estado ACADEMICO

    public function academico()
    {
        return $this->hasOne('App\Models\Academico');
    }

    public function scopeBuscar($query, $name='')
    {
        if(trim($name)!='')
        {

        $query=Alumno::select('alumnos.id','academicos.matricula','academicos.licenciatura', 'alumnos.nombre', 'alumnos.ape_pat', 'alumnos.ape_mat', 'alumnos.created_at') 
             ->join('academicos', 'academicos.alumno_id', '=', 'alumnos.id')
             ->where('alumnos.nombre','LIKE',"%".$name."%");
        
        return $query;



        }
    }

}
 