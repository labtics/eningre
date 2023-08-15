<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
  
  protected $table = 'administrativos';
  protected $fillable = ['id','user_id','nombre_completo', 'create_at', 'update_at'];

}
