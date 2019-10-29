<?php

namespace App\Http\Controllers;

use App\Condominios;
use App\Moradores;
use App\Unidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoradorController extends Controller{
    public function listar(){
        $moradores = Moradores::all();
        return view('morador/listar', compact('moradores'));
    }

    public function criar(Request $request){
        $moradores = new Moradores();
        $condominios = Condominios::all();
        $unidades = Unidades::all();
        return view('morador/formulario', compact('moradores','unidades', 'condominios'));
    }

    public function editar($id){
        $moradores = Moradores::find($id);
        $condominios = Condominios::all();
        $unidades = Unidades::all();

        return view('morador/formulario', compact('moradores', 'condominios', 'unidades'));
    }

    public function remover($id){
        $moradores = Moradores::find($id);
        $moradores->delete();
        return redirect('morador/listar');
    }

    public function salvar(Request $request){

         if($request->id){
            $moradores = Moradores::find($request->id);
            $moradores->fill($request->all());
        } else {
             $moradores = new Moradores($request->all());
        }

        $moradores->save();
        return view('morador/listar');
    }
}
