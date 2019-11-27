<?php

namespace App\Http\Controllers;

use App\Condominios;
use App\Http\Requests\MoradorRequest;
use App\Moradores;
use App\Unidades;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    public function listar()
    {
        $morador = Moradores::all();
        return view('morador/listar', compact('morador'));
    }

    public function criar(Request $request)
    {
        $morador = new Moradores();
        $condominio = Condominios::all();
        $unidade = Unidades::all();
        return view('morador/formulario', compact('morador', 'unidade', 'condominio'));
    }

    public function editar($id)
    {
        $morador = Moradores::find($id);
        $condominio = Condominios::all();
        $unidade = Unidades::all();

        return view('morador/formulario', compact('morador', 'condominio', 'unidade'));
    }

    public function remover($id)
    {
        $morador = Moradores::find($id);
        $morador->delete();
        return redirect('morador/listar');
    }

    public function salvar(MoradorRequest $request){
//        $this->validate('rules');
        if ($request->id) {
            $morador = Moradores::find($request->id);
            $morador->fill($request->all());

        } else {
            $morador = new Moradores($request->all());

        }


        if ($request->hasFile('arquivo')) {
            $morador->arquivo = $request->arquivo->store('img');
        }

        $morador->save();
        return redirect('morador/listar');
    }

    public function verificarEmail($email)
    {
        return $morador = Moradores::where('email', $email)->count();
    }

    public function verificarCpf($cpf)
    {
        return $morador = Moradores::where('cpf', $cpf)->count();
    }

    public function verificarTelefone($telefone)
    {
        return $morador = Moradores::where('telefone', $telefone)->count();
    }

    public function verificarPlaca($placa)
    {
        return $morador = Moradores::where('placa', $placa)->count();
    }
}
