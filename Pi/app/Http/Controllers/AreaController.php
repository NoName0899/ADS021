<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Condominios;
use App\Http\Requests\AreaRequest;
use Illuminate\Http\Request;

class AreaController extends Controller{
    public function listar(){
        $area = Areas::all();
        return view('area/listar', compact('area'));
    }

    public function criar(Request $request){
        $area = new Areas();
        $condominio = Condominios::all();
        return view('area/formulario', compact('area', 'condominio'));
    }

    public function editar($id){
        $area = Areas::find($id);
        $condominio = Condominios::all();

        return view('area/formulario', compact('area', 'condominio'));
    }

    public function remover($id){
        $area = Areas::find($id);
        $area->delete();
        return redirect('area/listar');
    }

    public function salvar(AreaRequest $request){
        if($request->id){
            $area = Areas::find($request->id);
            $area->fill($request->all());
        } else {
            $area = new Areas($request->all());
        }

        $area->save();
        return redirect('area/listar');
    }
}
