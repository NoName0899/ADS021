<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model{

    protected $fillable = ['id', 'data','condominio_id', 'unidade_id', 'area_id'];
    protected $dates = ['deleted_at'];

    public function area(){
        return $this->belongsTo('App\Areas');
    }

    public function condominio(){
        return $this->belongsTo('App\Condominios');
    }

    public function unidade(){
        return $this->belongsTo('App\Unidades');
    }
}
