<?php

namespace App\Http\Controllers;

use App\Moradores;
use Illuminate\Http\Request;

class UnidadeController extends Controller{
    public function listar(){
        $unidade = Unidades::all();
        return view('unidade/listar', compact('unidades'));
    }

    public function criar(Request $request){
        return view('unidade/criar');
    }

    public function editar($id){
        return Unidades::find($id);
    }

    public function remover($id){
        $unidade = Unidades::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }

    public function salvar(Request $request){
        $unidade = new Unidades();

        if($request->id){
            $unidade = Unidades::find($request->id);
            $unidade->fill($request->id);
        } else {
            $unidade = new Unidades($request->all());
        }

        $unidade->save();
        return redirect('unidade/listar');
    }
}
