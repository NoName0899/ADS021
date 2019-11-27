@extends('layouts.app')

@section('title')
    <title>Lista Area</title>
@endsection

@section('listar')
    div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card bg-dark">
            <div class="card-header">
                Listar Visitantes
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr>
                        <td>Ações</td>
                        <td>Nome</td>
                        <td>RG</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>Data</td>
                        <td>Condominio</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($visitante as $visit)
                        <tr>
                            <td>
                                <a href="{{url('/area/remover/'.$visit->id)}}">
                                    <i class="fa fa-times-circle" style="color: red;"
                                       onclick="return confirm('Você tem certeza que quer excluir ?');"></i>
                                </a>
                                <a href="{{url('a/rea/editar/'.$visit->id)}}}}">
                                    <i class="fas fa-user-edit" style="color: #3490dc;"></i>
                                </a>
                            </td>
                            <td>{{$visit->nome}}</td>
                            <td>{{$visit->rg}}</td>
                            <td>{{$visit->email}}</td>
                            <td>{{$visit->telefone}}</td>
                            <td>{{$visit->data}}</td>
                            <td>{{$visit->condominio->nome}}</td>
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

@endsection

