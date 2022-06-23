<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeActividad extends FormRequest
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
            'nom_activ' => 'required|max:50',
            'hora_activ' => 'required',
            'limit_activ' => 'required|integer|max:2',
            'durac_activ' => 'required|integer|max:1'
        ];
    }

    public function messages(){
        return [

            'required' => "Esta campo es necesario!",
            'integer' => "Este campo solo lo puedes llenar con números!",
            'max' => "Este campo tiene más caracteres de los necesario!",
        ];
    }
}
