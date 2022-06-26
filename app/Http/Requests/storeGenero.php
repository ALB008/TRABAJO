<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeGenero extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom_gen'=>'required|max:20|regex:/^[\pL\s\-]+$/u',
        ];
    }

    public function attributes(){
        return [
            'nom_gen' => 'genero',
        ];
    }

    public function messages(){
        return [
            'nom_gen.required' => 'Este campo es necesario!',
            'nom_gen.max' => 'Este campo contiene demasidos caracteres!',
            'regex' => 'En este campo solo puedes ingresar letras!'
        ];
    }
}
