<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitantes extends Model{

    protected $fillable = ['id', 'nome', 'rg', 'email', 'telefone', 'data', 'condominio_id'];
    protected $dates = ['deleted_at'];

    public function morador(){
       return $this->hasMany('App\Moradores');
    }

    public function condominio(){
        return $this->belongsTo('App\Condominios');
    }
}
