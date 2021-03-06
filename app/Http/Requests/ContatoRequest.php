<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Campo de preenchimento obrigatório',
            '*.min' => 'Informe no mínimo 3 caracteres',
            'email.email' => 'Informe um e-mail válido'
        ];
    }
}
