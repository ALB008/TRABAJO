<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class storeEmpleado extends FormRequest
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
            'doc_emp' => 'required|unique:empleado,doc_emp|numeric|digits_between:8,11',
            'nom_emp' => 'required|regex:/^[\pL\s\-]+$/u|max:40',
            'apell_emp' => 'required|regex:/^[\pL\s\-]+$/u|max:70',
            'nacim_emp' => 'required',
            'tel_emp' => 'required|numeric|digits_between:7,13',
            'email_emp' => 'required|email|max:50',
            'estud_emp' => 'required|max:50'
        ];
    }

    public function messages(){
        return[
            'required' => 'Este campo es necesario!',
            'regex' => 'En este campo solo puedes ingresar letras°',
            'max' => 'Este campo contiene demasiados caracteres!',
            'numeric' => 'En este campo solo puedes ingresar números!',
            'doc_emp.digits_between' => 'Este campo solo puede contener entre 8 y 11 caracteres!',
            'tel_emp.digits_between' => 'Este campo solo puede contener entre 7 y 15 caracteres!',
            'email' => 'Porfavor ingresa un correo valido!',
            'unique' => 'Este documento ya esta registrado!'

        ];
    }
}
