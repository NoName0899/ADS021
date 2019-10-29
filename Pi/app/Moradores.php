<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moradores extends Model
 {
    protected $fillable = ['id', 'nome'];
    protected $dates = ['deleted_at'];

    public function condominio()
    {
        return $this->belongsTo('App\Condominios');
    }

    public function visitante()
    {
        return $this->hasMany('App\Visitantes');
    }


    public function unidade()
    {
        return $this->belongsTo('App\Unidades');
    }
}
