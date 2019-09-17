<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitantes extends Model
{
    public function moradores(){
       return $this->hasMany('App/Moradores');
       return $this->belongsTo('App/Moradores');
    }

    public function condominios(){
        return $this->belongsTo('App/Condominios');
    }
}
