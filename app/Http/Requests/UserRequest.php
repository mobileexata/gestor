<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'empresas' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'empresas.required' => 'Selecione pelo menos uma empresa',
            '*.required' => 'Campo obrigatório',
            'email.email' => 'Informe um email válido',
            'email.unique' => 'Este email já se encontra utilizado',
            '*.max' => 'Informe no máximo 255 caracteres',
            'password.min' => 'Informe no mínimo 6 caracteres',
            'password.confirmed' => 'As senhas não conferem',
        ];
    }

}
