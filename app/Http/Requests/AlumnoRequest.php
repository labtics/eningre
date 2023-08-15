<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
   
 //AUTENTICACION
 'email' => 'unique:users,email',
 'curp' => 'min:5|max:30|required',
 'verificarPass' => 'min:5|max:30|required',

 //PERSONALES
 'nombre'  => 'min:3|max:30|required',
 'ape_pat' => 'min:3|max:30|required',
 'ape_mat' => 'min:3|max:30|required',
 'sexo' => 'required|min:1',
 'estado_civ' => 'required|min:1',
  'edad' => 'required|numeric',
  'fecha_nac' => 'required',
  'celular' => 'min:10|required|numeric',
  'lenguaje' => 'required',

  //FAMILIARES
  'tutor_1' => 'required|min:1',
  'nombre_1'  => 'min:3|max:50|required',
  'celular_1' => 'min:10|required|numeric',
  'colonia_1' => 'required',
  'municipio_1' => 'required',
  'calle_1' => 'required',

  'tutor_2' => 'required|min:1',
  'nombre_2'  => 'min:3|max:50|required',
  'celular_2' => 'min:10|required|numeric',
  'municipio_2' => 'required',
  'colonia_2' => 'required',
  'calle_2' => 'required',

  //DOMICILIO
  'municipio' =>'required',
  'colonia' => 'required',
  'calle' => 'required',
  'renta' => 'required',

  //HISTORIAL CLINICO
  'enfermedad' => 'required',
  'capacidad_especial' => 'required',
  'alergia' => 'required',
  'medicamento' => 'required',
  'tipo_sangre' => 'required|min:1',             
  
 //DATOS SOCIOECONOMICOS
 'inscripcion' => 'required|min:1', 
 'beca' => 'required|min:1', 
 'transporte' => 'required|min:1', 
 'dependencia_eco' => 'required|min:1', 
 'hijos' => 'required|min:1', 
 'hermanos' => 'required|min:1', 
 'ees' => 'required|min:1', 
 'actual_trabajo' => 'required|min:1', 
 'casa_familia' => 'required|min:1', 
 'habitantes_casa' => 'required|min:1',

 'persona_dinero' => 'required|min:1', 
 'sostiene_estudio' => 'required|min:1', 
 'prospera' => 'required|min:1', 
 'material_techo' => 'required|min:1', 
 'material_piso' => 'required|min:1', 
 'numero_cuartos' => 'required|min:1', 
 'numero_cuartos_dor' => 'required|min:1', 
 'cuarto_cocina' => 'required|min:1', 
 'numero_banios' => 'required|min:1', 
 'toma_de_agua' => 'required|min:1',

 'numero_focos' => 'required|min:1', 
 'numero_autos' => 'required|min:1', 
 'numero_tvs' => 'required|min:1', 
 'numero_cels' => 'required|min:1', 
 'numero_comp' => 'required|min:1', 
 'internet' => 'required|min:1', 
 'espacio_estudio' => 'required|min:1', 
 'clase_social' => 'required|min:1', 
 'etnia_procedencia' => 'required|min:1',

 //DATOS ACADÉMICOS
 'matricula' => 'required|min:8|',
 'matricula' => 'unique:academicos,matricula', 
 'verificarMatri' => 'required|min:8',
 'licenciatura' => 'required|min:1',
 'ciclo_ing' => 'required|min:1',
 'promedio' => 'required|numeric'


        ];
    }

    public function messages()
    { 
        return [
            'email.required'=>'Escribe tu correo electrónico (EN DATOS DE AUTENTICACION)',
            'curp.required'=>'Escribe tu CURP (EN DATOS DE AUTENTICACION)',
            'verificarPass.required'=>'Escribe tu Contraseña de nuevo (EN DATOS DE AUTENTICACION)',
    
            'nombre.required'=>'Tu nombre es obligatorio (EN DATOS PERSONALES)',
            'ape_pat.required'=>'Tu apellido paterno es obligatorio (EN DATOS PERSONALES)',
            'ape_mat.required'=>'Tu apellido materno es obligatorio (EN DATOS PERSONALES)',
            'sexo.required'=>'Elige tu sexo (EN DATOS PERSONALES)',
            'estado_civ.required'=>'Elige tu estado civil (EN DATOS PERSONALES)',
            'edad.required'=>'Tu edad es obligatoria (EN DATOS PERSONALES)',
            'edad.numeric'=>'Tu edad debe ser un número (EN DATOS PERSONALES)',
            'celular.numeric'=>'Tu número de celular debe ser de 10 dígitos (EN DATOS PERSONALES)',
            'celular.required'=>'Tu número de celular es obligatorio (EN DATOS PERSONALES)',
            'fecha_nac.required'=>'Tu fecha de nacimiento es obligatoria (EN DATOS PERSONALES)',
            'lenguaje.required'=>'Elige un dialecto o idioma (EN DATOS PERSONALES)',
    
            'tutor_1.required'=>'Elige el parentesco del Tutor 1 (EN DATOS DEL RESPONSABLE)',
            'nombre_1.required' =>'Escribe el nombre del Tutor 1 (EN DATOS DEL RESPONSABLE)',
            'celular_1.numeric'=>'El número de celular del Tutor 1  debe ser de 10 dígitos (EN DATOS DEL RESPONSABLE)',
            'celular_1.required'=>'El número de celular del Tutor 1 es obligatorio (EN DATOS DEL RESPONSABLE)',
            'municipio_1.required'=>'El municipio del Tutor 1 es obligatorio (EN DATOS DEL RESPONSABLE)',
            'colonia_1.required'=>'La colonia del Tutor 1 es obligatoria (EN DATOS DEL RESPONSABLE)',
            'calle_1.required'=>'La calle del Tutor 1 es obligatoria (EN DATOS DEL RESPONSABLE)',
    
            'tutor_2.required'=>'Elige el parentesco del Tutor 2 (EN DATOS DEL RESPONSABLE)',
            'nombre_2.required' =>'Escribe el nombre del Tutor 2 (EN DATOS DEL RESPONSABLE)',
            'celular_2.numeric'=>'El número de celular del Tutor 2  debe ser de 10 dígitos (EN DATOS DEL RESPONSABLE)',
            'celular_2.required'=>'El número de celular del Tutor 2 es obligatorio (EN DATOS DEL RESPONSABLE)',
            'municipio_2.required'=>'El municipio del Tutor 2 es obligatorio (EN DATOS DEL RESPONSABLE)',
            'colonia_2.required'=>'La colonia del Tutor 2 es obligatoria (EN DATOS DEL RESPONSABLE)',
            'calle_2.required'=>'La calle del Tutor 2 es obligatoria (EN DATOS DEL RESPONSABLE)',
    
            'municipio.required'=>'Tu municipio es obligatorio (EN DATOS DEL DOMICILIO)',
            'colonia.required'=>'Tu colonia es obligatoria (EN DATOS DEL DOMICILIO)',
            'calle.required'=>'Tu calle obligatoria (EN DATOS DEL DOMICILIO)',
            'renta.required' => 'Elige si estas rentando un departamento actualmente (EN DATOS DEL DOMICILIO)',
            
            'enfermedad.required' => 'Elige si presentas alguna enfermedad (EN DATOS DEL HISTORIAL CLÍNICO)',
        'capacidad_especial.required' => 'Elige si presentas alguna capacidad diferente (EN DATOS DEL HISTORIAL CLÍNICO)',
            'alergia.required' => 'Elige si presentas alguna alergia (EN DATOS DEL HISTORIAL CLÍNICO)',
            'medicamento.required' => 'Elige si estas ingiriendo algun medicamento (EN DATOS DEL HISTORIAL CLÍNICO)',
            'tipo_sangre.required' => 'Elige tu tipo de sangre (EN DATOS DEL HISTORIAL CLÍNICO)',
    
            'inscripcion.required' => 'Elige el número de carreras inscritas (EN DATOS SOCIOECONOMICOS)', 
            'beca.required' => 'Elige si tienes alguna beca (EN DATOS SOCIOECONOMICOS)', 
            'transporte.required' => 'Elige tu medio de trasporte (EN DATOS SOCIOECONOMICOS)', 
            'dependencia_eco.required' => 'Elige si dependes economicamente (EN DATOS SOCIOECONOMICOS)', 
            'hijos.required' => 'Elige si tienes hijos (EN DATOS SOCIOECONOMICOS)', 
            'hermanos.required' => 'Elige si tienes hermanos (EN DATOS SOCIOECONOMICOS)', 
            'ees.required' => 'Elige si eres el primero en estudiar Educación Superior (EN DATOS SOCIOECONOMICOS)', 
            'actual_trabajo.required' => 'Elige si estas laborando actualmente (EN DATOS SOCIOECONOMICOS)', 
            'casa_familia.required' => 'Elige si la casa de tu famila es propia o pagada (EN DATOS SOCIOECONOMICOS)', 
            'habitantes_casa.required' => 'Elige el número de habitantes que hay en tu familia (EN DATOS SOCIOECONOMICOS)',
    
            'persona_dinero.required' => 'Elige el numero de personas que tienen ingreso en tu familia (EN DATOS SOCIOECONOMICOS)', 
            'sostiene_estudio.required' => 'Elige la persona que sostiene tus estudios (EN DATOS SOCIOECONOMICOS)', 
            'prospera.required' => 'Elige si tu familia cuenta con el programa PROSPERA (EN DATOS SOCIOECONOMICOS)', 
            'material_techo.required' => 'Elige el material de techo de tu casa (EN DATOS SOCIOECONOMICOS)', 
            'material_piso.required' => 'Elige el material de piso de tu casa (EN DATOS SOCIOECONOMICOS)', 
            'numero_cuartos.required' => 'Elige el número de cuartos de tu casa (EN DATOS SOCIOECONOMICOS)', 
            'numero_cuartos_dor.required' => 'Elige el número de cuartos dormitorios de tu casa (EN DATOS SOCIOECONOMICOS)', 
            'cuarto_cocina.required' => 'Elige si la cocina y dormitorios estan separados en tu casa (EN DATOS SOCIOECONOMICOS)', 
            'numero_banios.required' => 'Elige el número de baños en tu casa (EN DATOS SOCIOECONOMICOS)', 
            'toma_de_agua.required' => 'Elige si tu casa cuenta con toma de agua independiente (EN DATOS SOCIOECONOMICOS)',
    
            'numero_focos.required' => 'Elige la cantidad de focos que hay en tu casa (EN DATOS SOCIOECONOMICOS)', 
            'numero_autos.required' => 'Elige la cantidad de autos que hay en tu casa (EN DATOS SOCIOECONOMICOS)', 
            'numero_tvs.required' => 'Elige la cantidad de televisiones que hay en tu casa (EN DATOS SOCIOECONOMICOS)', 
           
    
            'numero_cels.required' => 'Elige la cantidad de celulares que tienen en tu familia (EN DATOS SOCIOECONOMICOS)', 
            'numero_comp.required' => 'Elige la cantidad de computadoras que hay en tu casa (EN DATOS SOCIOECONOMICOS)', 
            'internet.required' => 'Elige si tienes servicio de Internet en tu casa (EN DATOS SOCIOECONOMICOS)', 
            'espacio_estudio.required' => 'Elige si tienes un espacio de estudio en tu casa (EN DATOS SOCIOECONOMICOS)', 
            'clase_social.required' => 'Elige la clase social a la cual crees que pertenece tu familia (EN DATOS SOCIOECONOMICOS)', 
            'etnia_procedencia.required' => 'Elige si perteneces a una etnia (EN DATOS SOCIOECONOMICOS)',
                      
            'matricula.required' => 'Escribe tu matrícula (EN DATOS ACADÉMICOS)', 
            'verificarMatri.required' => 'Verifica tu matrícula (EN DATOS ACADÉMICOS)', 
            'licenciatura.required' => 'Elige tu licenciatura (EN DATOS ACADÉMICOS)', 
            'ciclo_ing.required' => 'Elige tu ciclo de ingreso (EN DATOS ACADÉMICOS)',
            'promedio.required' => 'Escribe tu promedio (EN DATOS ACADÉMICOS)'
    
        ];
        
        
    }
}
