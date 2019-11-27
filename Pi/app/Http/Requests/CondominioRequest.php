<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CondominioRequest extends FormRequest
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
            'cnpj' => 'required|max:255|unique:condominios',
            'nome' => 'required|max:255',
            'endereco' => 'required|max:255',
            'cep' => 'required|max:255',
            'cidade' => 'required|max:255',
            'bairro' => 'required|max:255',
            'uf' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'cnpj.required' => 'Campo CNPJ é obrigatorio',
            'cnpj.unique' => 'CNPJ já cadastrado',
            'cnpj.max' => 'Campo CNPJ tem que ser menor que 255 caracteres',

            'nome.required' => 'Campo Nome é obrigatorio',
            'nome.max' => 'Campo Nome tem que ser menor que 255 caracteres',

            'endereco.required' => 'Campo Endereço é obrigatorio',
            'endereco.max' => 'Campo Endereço tem que ser menor que 255 caracteres',

            'cep.required' => 'Campo CEP é obrigatorio',
            'cep.max' => 'Campo CEP tem que ser menor que 255 caracteres',

            'cidade.required' => 'Campo Cidade é obrigatorio',
            'cidade.max' => 'Campo Cidade tem que ser menor que 255 caracteres',

            'bairro.required' => 'Campo Bairro é obrigatorio',
            'bairro.max' => 'Campo Bairro tem que ser menor que 255 caracteres',

            'uf.required' => 'Campo UF é obrigatorio',
            'uf.max' => 'Campo UF tem que ser menor que 255 caracteres',
        ];

    }

}
