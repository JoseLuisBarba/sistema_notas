<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'curso' => 'required',
            'nota1' => 'required',
            'nota2' => 'required'
        ];
    }

    public function messages() {
        return [
            'nombre.required' => 'Se necesita un nombre para el Alumno',
            'curso.required' => 'Se necesita un nombre para el Curso',
            'nota1.required' => 'Se necesita una nota 1 para el curso',
            'nota2.required' => 'Se necesita una nota 2 para el curso'
        ];
    }
}
