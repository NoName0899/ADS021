<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moradores extends Model
 {
    protected $fillable = ['id', 'email', 'nome', 'cpf', 'telefone', 'marca', 'veiculo', 'placa', 'situacao', 'condominio_id', 'unidade_id'];
    protected $dates = ['deleted_at'];

//    public function setNameAttribute($value){
//        $this->attribute['nome'] = strtolower($value);
//    }

    public function condominio(){
        return $this->belongsTo('App\Condominios');
    }

    public function visitante(){
        return $this->hasMany('App\Visitantes');
    }

    public function unidade(){
        return $this->belongsTo('App\Unidades');
    }

//    public function getCpf($cpf){
//        return ucfirst($cpf);
//    }
}
