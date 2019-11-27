<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'area' => 'required|max:255',
            'situacao' => 'required|max:255',
            'condominio_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return[
            'area.required'=>'Campo Área é obrigatorio',
            'nome.max'=>'Campo Área tem que ser menor que 255 caracteres',

            'situacao.required'=>'Campo Situação é obrigatorio',

            'condominio_id.required'=>'Campo Condominio é obrigatorio',
            'condominio_id.numeric'=>'Campo Condominio é obrigatorio'
        ];
    }
}
