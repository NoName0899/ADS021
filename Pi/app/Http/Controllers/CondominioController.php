<?php

namespace App\Http\Controllers;

use App\Condominios;
use App\Http\Requests\CondominioRequest;
use App\Unidades;
use Illuminate\Http\Request;

class CondominioController extends Controller{
    public function listar(){
        $condominio = Condominios::all();
        return view('condominio/listar', compact('condominio'));
    }

    public function criar(Request $request){
        $condominio = new Condominios();
        return view('condominio/formulario', compact('condominio'));
    }

    public function editar($id){
        $condominio = Condominios::find($id);

        return view('condominio/formulario', compact('condominio'));
    }

    public function remover($id){
        $condominio = Condominios::find($id);
        $condominio->delete();
        return redirect('condominio/listar');
    }

    public function salvar(CondominioRequest $request){
        if($request->id){
            $condominio = Condominios::find($request->id);
            $condominio->fill($request->all());
        } else {
            $condominio = new Condominios($request->all());
        }

        $condominio->save();
        return redirect('condominio/listar');
    }

    public function verificarCnpj($cnpj){
//        return $condominio = Condominios::where('cnpj', $cnpj)->count();
        return $condominio = Condominios::where('cnpj', $cnpj)->count();
    }
}
