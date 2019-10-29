<?php

namespace App\Http\Controllers;

use App\Moradores;
use App\Visitantes;
use Illuminate\Http\Request;

class VisitanteController extends Controller{
    public function listar(){
        $visitante = Visitantes::all();
        return view('visitante/listar', compact('visitante'));
    }

    public function criar(Request $request){
        return view('visitante/criar');
    }

    public function editar($id){
        return Visitantes::find($id);
    }

    public function remover($id){
        $visitante = Visitantes::find($id);
        $visitante->delete();
        return redirect('visitante/listar');
    }

    public function salvar(Request $request){
        $visitante = new Visitantes();

        if($request->id){
            $visitante = Visitantes::find($request->id);
            $visitante->fill($request->id);
        } else {
            $visitante = new Visitantes($request->all());
        }

        $visitante->save();
        return redirect('visitante/listar');
    }
}
