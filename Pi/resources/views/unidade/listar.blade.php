@extends('layouts.app')

@section('title')
    <title>Lista Area</title>
@endsection

@section('listar')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card bg-dark">
                <div class="card-header">
                    Listar Unidade
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <td>Ações</td>
                            <td>Nome</td>
                            <td>Proprietario</td>
                            <td>Email</td>
                            <td>telefone</td>
                            <td>Condominio</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($unidade as $unid)
                            <tr>
                                <td>
                                    <a href="{{url('/unidade/remover/'.$unid->id)}}">
                                        <i class="fa fa-times-circle" style="color: red;"
                                           onclick="return confirm('Você tem certeza que quer excluir ?');"></i>
                                    </a>
                                    <a href="{{url('/unidade/editar/'.$unid->id)}}}}">
                                        <i class="fas fa-user-edit" style="color: #3490dc;"></i>
                                    </a>
                                </td>
                                <td>{{$unid->nome}}</td>
                                <td>{{$unid->proprietario}}</td>
                                <td>{{$unid->email}}</td>
                                <td>{{$unid->telefone}}</td>
                                <td>{{$unid->condominio->nome}}</td>
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

