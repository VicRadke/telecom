<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerateCredentialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id_prestador' => 'required|exists:prestadores,id_prestador'
        ];
    }

    public function messages(): array
    {
        return [
            'id_prestador.required' => 'El campo id_prestador es requerido',
            'id_prestador.exists' => 'El campo id_prestador no existe en la Base de Datos'
        ];
    }
}
