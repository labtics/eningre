<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AlumnoRequest;
use App\Models\User;
use App\Models\Alumno;
use App\Models\Familiar;
use App\Models\Domicilio;
use App\Models\Historial;
use App\Models\Socioeconomico;
use App\Models\Academico;
use App\Models\Estado;
use App\Models\Municipio;
use DB;

class AlumnosController extends Controller
{
    
    public function index()
    {
        return view('inicio');
    }

    public function create()
    {
        $estados=Estado::pluck('nombre','id');
        return view('create',compact('estados'));  
    }

    public function getMunicipios(Request $request, $id)
    {
        if($request->ajax())
        {
            $municipios = Municipio::municipios($id);
                return response()->json($municipios);
        }

    }


    //En este método usaremos nuestro propio Request
    public function store(Request $request)
    {

         if($request->ajax())
         {

                $user = new User($request->all());
                $user->password = bcrypt($request->password);
                $user->rol = 0;
                $user->save();
                
                $id=$user->id; //El id de usuario se utilizará para pacientes y especialistas
            
                $alumno = new Alumno($request->all());
                $alumno->user_id=$id;
                $alumno->save();

                $id=$alumno->id;

                $familia = new Familiar($request->all());
                $familia->alumno_id=$id;
                $familia->save();

                $domicilio = new Domicilio($request->all());
                $domicilio->alumno_id=$id;
                $domicilio->save();

                $historial = new Historial($request->all());
                $historial->alumno_id=$id;
                $historial->save();

          }

    }


}
