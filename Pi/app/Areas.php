<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model{

    protected $fillable = ['id', 'area', 'situacao','condominio_id'];
    protected $dates = ['deleted_at'];

    public function reserva(){
        return $this->hasMany('App\Reservas');
    }

    public function condominio(){
        return $this->belongsTo('App\Condominios');
    }
}
