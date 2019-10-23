<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominios extends Model
{
    public function areas(){
        return $this->hasMany('App/Areas');
    }

    public function reservas(){
        return $this->hasMany('App/Reservas');
    }

    public function unidades(){
        return $this->hasMany('App/Unidades');
    }

    public function moradores(){
        return $this->hasMany('App/Moradores');
    }

    public function visitantes(){
        return $this->hasMany('App/Visitantes');
    }
}
