<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmpresaRequest extends FormRequest
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
            'cnpj' => ['required', 'min:18', Rule::unique('empresas')],
            'razao' => 'required|max:255',
            'fantasia' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'cnpj.required' => 'Preencha o campo CNPJ',
            'razao.required' => 'Preencha a razão social',
            'fantasia.required' => 'Preencha o nome fantasia',
            'cnpj.min' => 'CNPJ inválido',
            'cnpj.unique' => 'Este CNPJ já se encontra utilizado',
            '*.max' => 'Informe no máximo 255 caracteres'
        ];
    }
}
