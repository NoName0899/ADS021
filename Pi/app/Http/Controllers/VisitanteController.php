<?php

namespace App\Http\Controllers;

use App\Condominios;
use App\Http\Requests\VisitanteRequest;
use App\Visitantes;
use Illuminate\Http\Request;

class VisitanteController extends Controller{
    public function listar(){
        $visitante = Visitantes::all();
        return view('visitante/listar', compact('visitante'));
    }

    public function criar(Request $request){
        $visitante = new Visitantes();
        $condominio = Condominios::all();
        return view('visitante/formulario', compact('visitante', 'condominio'));
    }

    public function editar($id){
        $visitante = new Visitantes($id);
        $condominio = Condominios::all();
        return view('visitante/formulario', compact('visitante', 'condominio'));
    }

    public function remover($id){
        $visitante = Visitantes::find($id);
        $visitante->delete();
        return redirect('visitante/listar');
    }

    public function salvar(VisitanteRequest $request){
        if($request->id){
            $visitante = Visitantes::find($request->id);
            $visitante->fill($request->all());
        } else {
            $visitante = new Visitantes($request->all());
        }

        $visitante->save();
        return redirect('visitante/listar');
    }

    public function verificarEmail($email){
        return $visitante = Visitantes::where('email', $email)->count();
    }

    public function verificarRg($rg){
        return $visitante = Visitantes::where('rg', $rg)->count();
    }
}
