<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeGenero extends FormRequest
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
            'nom_gen'=>'required|max:20',
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
            'nom_gen.max' => 'Este campo contiene demasidos caracteres!'
        ];
    }
}
