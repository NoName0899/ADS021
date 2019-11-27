<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model{

    protected $fillable = ['id', 'nome', 'proprietario', 'email', 'telefone', 'condominio_id'];
    protected $dates = ['deleted_at'];

    public function reserva(){
        return $this->hasMany('App\Reservas');
    }

    public function morador(){
        return $this->hasMany('App\Moradores');
    }

    public function condominio(){
        return $this->belongsTo('App\Condominios');
    }
}
