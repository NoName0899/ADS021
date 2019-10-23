<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moradores extends Model
{
    public function visitantes(){
        return $this->hasMany('App/Visitantes');
    }

    public function condominio(){
        return $this->belongsTo('App/Condominios');
    }

    public function unidades(){
        return $this->belongsTo('App/Unidades');
    }
}
