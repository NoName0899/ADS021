<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominios extends Model
{
    protected $fillable = ['id', 'cnpj', 'nome', 'endereco', 'cep', 'cidade', 'bairro', 'uf'];
    protected $dates = ['deleted_at'];

    public function area(){
        return $this->hasMany('App\Areas');
    }

    public function reserva(){
        return $this->hasMany('App\Reservas');
    }

    public function unidade(){
        return $this->hasMany('App\Unidades');
    }

    public function visitante(){
        return $this->hasMany('App\Visitantes');
    }

    public function getCnpj($cnpj){
        return ucfirst($cnpj);
    }
}
