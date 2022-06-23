<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeAutor extends FormRequest
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
            'nom_aut'=> 'required|max:130|regex:/^[\pL\s\-]+$/u',
            'orige_aut' => 'required|max:70|regex:/^[\pL\s\-]+$/u',
        ];
    }

    public function messages(){
        return [
            'required' => 'Este campo es necesario!',
            'max' => 'Este campo contiene demasiados caracteres!',
            'regex' => 'En este campo solo puedes ingresar letras!'
        ];
    }
}
