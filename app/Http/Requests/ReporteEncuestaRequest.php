<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReporteEncuestaRequest extends Request
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
     * @return array
     */
    public function rules()
    {   
        return [

            'matricula' => 'required|min:8'    
        ];
    }

    public function messages()
{ 
    return [            
           'matricula.required' => 'Escribe tu matrícula'
    ];
    
    
}

}
