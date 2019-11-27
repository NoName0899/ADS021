<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoradorRequest extends FormRequest
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
            'email' => 'required|max:255|unique:moradores',
            'nome' => 'required|max:255',
            'cpf' => 'required|max:255|unique:moradores',
            'telefone' => 'required|max:255',
            'marca' => 'required|max:255',
            'veiculo' => 'required|max:255',
            'placa' => 'required|max:255|unique:moradores',
            'situacao' => 'required|max:255',
            'condominio_id' => 'required|numeric',
            'unidade_id' => 'required|numeric',
            'arquivo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Campo Email é obrigatorio',
            'email.unique' => 'Email já cadastrado',
            'email.max' => 'Campo Email tem que ser menor que 255 caracteres',

            'nome.required' => 'Campo Nome é obrigatorio',
            'nome.max' => 'Campo Nome tem que ser menor que 255 caracteres',

            'cpf.required' => 'Campo CPF é obrigatorio',
            'cpf.max' => 'Campo CPF tem que ser menor que 255 caracteres',
            'cpf.unique' => 'Campo CPF já cadastrado',

            'telefone.required' => 'Campo Telefone é obrigatorio',
            'telefone.max' => 'Campo Telefone tem que ser menor que 255 caracteres',

            'marca.required' => 'Campo Marca é obrigatorio',
            'marca.max' => 'Campo Marca tem que ser menor que 255 caracteres',

            'veiculo.required' => 'Campo Veiculo é obrigatorio',
            'veiculo.max' => 'Campo Veiculo tem que ser menor que 255 caracteres',

            'placa.required' => 'Campo Placa é obrigatorio',
            'placa.max' => 'Campo Placa tem que ser menor que 255 caracteres',
            'placa.unique' => 'Placa já cadastrada',

            'situacao.required' => 'Campo Situação é obrigatorio',

            'condominio_id.required' => 'Campo Condominio é obrigatorio',
            'condominio_id.numeric' => 'Campo Condominio é obrigatorio',
            'unidade_id.required' => 'Campo Unidade é obrigatorio',
            'unidade_id.numeric' => 'Campo Unidade é obrigatorio'
        ];

    }
}
