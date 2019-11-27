<?php

namespace App\Http\Controllers;

use App\Condominios;
use App\Http\Requests\UnidadeRequest;
use App\Unidades;
use Illuminate\Http\Request;

class UnidadeController extends Controller{
    public function listar(){
        $unidade = Unidades::all();
        return view('unidade/listar', compact('unidade'));
    }

    public function criar(Request $request){
        $unidade = new Unidades();
        $condominio = Condominios::all();
        return view('unidade/formulario', compact('unidade', 'condominio'));
    }

    public function editar($id){
        $unidade = new Unidades($id);
        $condominio = Condominios::all();
        return view('unidade/formulario', compact('unidade', 'condominio'));

    }

    public function remover($id){
        $unidade = Unidades::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }

    public function salvar(UnidadeRequest $request){
        if($request->id){
            $unidade = Unidades::find($request->id);
            $unidade->fill($request->all());
        } else {
            $unidade = new Unidades($request->all());
        }

        $unidade->save();
        return redirect('unidade/listar');
    }
}
