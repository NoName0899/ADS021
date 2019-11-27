@extends('layouts.app')

@section('title')
    <title>Lista Condominio</title>
@endsection

@section('listar')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card bg-dark">
                <div class="card-header">
                    Listar Condominio
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <td>Ações</td>
                            <td>CPNJ</td>
                            <td>Nome</td>
                            <td>Endereço</td>
                            <td>Cep</td>
                            <td>Cidade</td>
                            <td>Bairro</td>
                            <td>UF</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($condominio as $cond)
                            <tr>
                                <td>
                                    <a href="remover/{{$cond->id}}">
                                        <i class="fa fa-times-circle" style="color: red;"
                                           onclick="return confirm('Você tem certeza que quer excluir ?');"></i>
                                    </a>
                                    <a href="editar/{{$cond->id}}">
                                        <i class="fas fa-user-edit" style="color: #3490dc;"></i>
                                    </a>
                                </td>
                                <td>{{$cond->cnpj}}</td>
                                <td>{{$cond->nome}}</td>
                                <td>{{$cond->endereco}}</td>
                                <td>{{$cond->cep}}</td>
                                <td>{{$cond->cidade}}</td>
                                <td>{{$cond->bairro}}</td>
                                <td>{{$cond->uf}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="form-row">
                        <div class="form-group col-md-0">
                            <a class="btn btn-primary" href="formulario">Novo</a>
                        </div>
                        <div class="form-group col-md-1">
                            <a class="btn btn-primary" href="{{url('/')}}">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

