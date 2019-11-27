<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitanteRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'rg' => 'required|max:22|unique:visitantes',
            'email' => 'required|max:255|unique:visitantes',
            'telefone' => 'required|max:255',
            'data' => 'required|max:255',
            'condominio_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo Nome é obrigatorio',
            'nome.max' => 'Campo Nome tem que ser menor que 255 caracteres',

            'rg.required' => 'Campo RG é obrigatorio',
            'rg.max' => 'Campo RG tem que ser menor que 255 caracteres',
            'rg.unique' => 'Campo RG já cadastrado',

            'email.required' => 'Campo Email é obrigatorio',
            'email.unique' => 'Email já cadastrado',
            'email.max' => 'Campo Email tem que ser menor que 255 caracteres',

            'telefone.required' => 'Campo Telefone é obrigatorio',
            'telefone.max' => 'Campo Telefone tem que ser menor que 255 caracteres',

            'data.required' => 'Campo Data é obrigatorio',
            'data.max' => 'Campo Data tem que ser menor que 255 caracteres',

            'condominio_id.required' => 'Campo Condominio é obrigatorio',
            'condominio_id.numeric' => 'Campo Condominio é obrigatorio',
        ];

    }
}
