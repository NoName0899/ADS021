<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Condominios;
use App\Http\Requests\ReservaRequest;
use App\Reservas;
use App\Unidades;
use Illuminate\Http\Request;

class ReservaController extends Controller{
    public function listar(){
        $reserva = Reservas::all();
        return view('reserva/listar', compact('reserva'));
    }

    public function criar(Request $request){
        $reserva = new Reservas();
        $condominio = Condominios::all();
        $unidade = Unidades::all();
        $area = Areas::all();
        return view('reserva/formulario', compact('reserva', 'condominio', 'unidade', 'area'));
    }

    public function editar($id){
        $reserva = Reservas::find($id);
        $condominio = Condominios::all();
        $unidade = Unidades::all();

        return view('reserva/formulario', compact('reserva', 'condominio', 'unidade'));
    }

    public function remover($id){
        $reserva = Reservas::find($id);
        $reserva->delete();
        return redirect('reserva/listar');
    }

    public function salvar(ReservaRequest $request){
        if($request->id){
            $reserva = Reservas::find($request->id);
            $reserva->fill($request->all());
        } else {
            $reserva = new Reservas($request->all());
        }

        $reserva->save();
        return redirect('reserva/listar');
    }
}
