@extends('layouts.app')

@section('style')
    <style>
        tr:hover {
            color: #fff;
        }

    </style>
@endsection

@section('listar')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-dark">
                <div class="card-header">
                    Listar Morador
                </div>
                <div id="table-responsive-lg">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <td>Ações</td>
                            <td>CPF</td>
                            <td>Nome</td>
                            <td>Email</td>
                            <td>Telefone</td>
                            <td>Marca do Veículo</td>
                            <td>Veiculo</td>
                            <td>Placa</td>
                            <td>Situação</td>
                            <td>Condominio</td>
                            <td>Unidade</td>
                            <td>Imagem</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($morador as $mor)
                            <tr>
                                <td>
                                    <a href="remover/{{$mor->id}}">
                                        <i class="fa fa-times-circle" style="color: red;"
                                           onclick="return confirm('Você tem certeza que quer excluir ?');"></i>
                                    </a>
                                    <a href="editar/{{$mor->id}}">
                                        <i class="fas fa-user-edit" style="color: #3490dc;"></i>
                                    </a>
                                </td>
                                <td>{{$mor->cpf}}</td>
                                <td>{{$mor->nome}}</td>
                                <td>{{$mor->email}}</td>
                                <td>{{$mor->telefone}}</td>
                                <td>{{$mor->marca}}</td>
                                <td>{{$mor->veiculo}}</td>
                                <td>{{$mor->placa}}</td>
                                <td>{{$mor->situacao}}</td>
                                <td>{{$mor->condominio->nome}}</td>
                                <td>{{$mor->unidade->nome}}</td>
                                <td>@if($mor->arquivo == null)

                                    @else
                                        <img class="rounded mx-auto d-block" width="100px"
                                             src="{{url('/storage/' . $mor->arquivo)}}" alt="picture">
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

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
@endsection

