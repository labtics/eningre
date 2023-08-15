<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    protected $fillable = ['estado_id','nombre'];

     public static function municipios ($id)
     {
    	return Municipio::where('estado_id','=',$id)->get();
     }
    
}