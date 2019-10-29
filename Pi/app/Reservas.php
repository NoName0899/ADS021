<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    public function areas(){
        return $this->belongsTo('App/Areas');
    }

    public function condominios(){
        return $this->belongsTo('App/Condominios');
    }

    public function unidades(){
        return $this->belongsTo('App/Unidades');
    }
}
