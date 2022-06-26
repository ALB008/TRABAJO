<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUsuario extends FormRequest
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
            'doc_usu' => 'required|digits_between:6,11|numeric',
            'nom_usu' => 'required|max:40|regex:/^[\pL\s\-]+$/u',
            'apell_usu' => 'required|max:70|regex:/^[\pL\s\-]+$/u',
            'nacim_usu' => 'required',
            'tel_usu' => 'required|numeric|digits_between:7,13',
            'email_usu' => 'required|max:50|email',

        ];
    }

    public function messages(){
        return [
            'required' => 'Este campo es necesario!',
            'max' => 'Este campo contiene demasiados caracteres!',
            'regex' => 'En este campo solo puedes ingresar letras!',
            'numeric' => 'En este campo solo puedes ingresar números!',
            'tel_usu.digits_between' => 'Porfavor ingresa un número telefónico válido!',
            'doc_usu.digits_between' => 'Porfavor ingresa un número de documento válido!',
            'email' => 'Porfavor ingresa un correo electronico válido!'

        ];
    }


}
