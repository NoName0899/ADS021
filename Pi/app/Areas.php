<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    public function reservas(){
        return $this->hasMany('App/Reservas');
    }

    public function condominios(){
        return $this->belongsTo('App/Condominios');
    }
}
