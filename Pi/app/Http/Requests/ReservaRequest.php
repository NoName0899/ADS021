<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
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
            'data' => 'required|max:255',
            'condominio_id' => 'required|numeric',
            'unidade_id' => 'required|numeric',
            'area_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'data.required' => 'Campo Data é obrigatorio',
            'data.max' => 'Campo Data tem que ser menor que 255 caracteres',

            'condominio_id.required' => 'Campo Condominio é obrigatorio',
            'condominio_id.numeric' => 'Campo Condominio é obrigatorio',

            'unidade_id.required' => 'Campo Unidade é obrigatorio',
            'unidade_id.numeric' => 'Campo Unidade é obrigatorio',

            'area_id.required' => 'Campo Área é obrigatorio',
            'area_id.numeric' => 'Campo Área é obrigatorio'
        ];

    }
}
