<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
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

            'name'  => 'min:5|max:50|required',
            'email' => 'required|unique:users,email'
    

          


            
        ];
    }

    public function messages()
{ 
    return [
        'name.required'=>'Ingrese el nombre completo del usuario',
        'email.required'=>'Ingrese un correo electrónico'
       
    ];
    
    
}

}
