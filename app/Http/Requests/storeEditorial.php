<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeEditorial extends FormRequest
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
          'nom_edit' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
          'ciud_edit' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
          'direc_edit' => 'required|max:70',
          'tel_edit' => 'required|numeric|digits_between:7,15'
        ];
    }

    public function messages(){
        return [
            'required' => 'Este campo es necesario!',
            'max' => 'Este campo contiene demasiados caracteres!',
            'regex' => 'En este campo solo puedes ingresar letras!',
            'numeric' => 'En este campo solo puedes ingresar números!',
            'digits_between' => 'Este campo solo puede contener entre 7 y 15 caracteres!',

        ];
    }
}
