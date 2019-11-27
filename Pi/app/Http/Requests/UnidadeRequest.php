<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnidadeRequest extends FormRequest
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
            'proprietario' => 'required|max:255',
            'email' => 'required|max:255',
            'telefone' => 'required|max:255',
            'condominio_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo Nome é obrigatorio',
            'nome.max' => 'Campo Nome tem que ser menor que 255 caracteres',

            'proprietario.required' => 'Campo Proprietario é obrigatorio',
            'proprietario.max' => 'Campo Proprietario tem que ser menor que 255 caracteres',

            'email.required' => 'Campo Email é obrigatorio',
            'email.max' => 'Campo Email tem que ser menor que 255 caracteres',

            'condominio_id.required' => 'Campo Condominio é obrigatorio',
            'condominio_id.numeric' => 'Campo Condominio é obrigatorio',
        ];

    }
}
