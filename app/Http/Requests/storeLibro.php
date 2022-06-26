<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeLibro extends FormRequest
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
            'isbn_lib' => 'required|numeric|digits_between:6,13',
            'cod_lib' => 'required|max:10|alpha_num',
            'nom_lib' => 'required|max:50',
            'anno_lib' => 'required|numeric|digits_between:2,4',
            'pag_lib' => 'required|numeric|digits_between:2,4'
        ];
    }

    public function messages(){
        return [
            'required' => 'Este campo es necesario!',
            'max' => 'Este campo contiene demasiados caracteres!',
            'regex' => 'En este campo solo puedes ingresar letras!',
            'numeric' => 'En este campo solo puedes ingresar números!',
            'isbn_lib.digits_between' => 'Porfavor ingresa un ISBN válido!',
            'anno_lib.digits_between' => 'Porfavor ingresa un año válido!',
            'pag_lib.digits_between' => 'Porfavor ingresa un cantidad de páginas válida!',
            'alpha_num' => 'En este campo solo puedes ingresar números y letras'
        ];
    }
}
