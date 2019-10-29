<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    public function reservas(){
        return $this->hasMany('App/Reservas');
    }

    public function moradores(){
        return $this->hasMany('App/Moradores');
    }

    public function condominios(){
        return $this->belongsTo('App/Condominios');
    }
}
