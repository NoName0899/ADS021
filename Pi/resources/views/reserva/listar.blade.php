@extends('layouts.app')

@section('title')
    <title>Lista Reserva</title>
@endsection

@section('listar')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card bg-dark">
                <div class="card-header">
                    Listar Reserva
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <td>Ações</td>
                            <td>Data</td>
                            <td>Condominio</td>
                            <td>Unidade</td>
                            <td>Área</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reserva as $res)
                            <tr>
                                <td>
                                    <a href="{{url('/reserva/remover/'.$res->id)}}">
                                        <i class="fa fa-times-circle" style="color: red;"
                                           onclick="return confirm('Você tem certeza que quer excluir ?');"></i>
                                    </a>
                                    <a href="{{url('/reserva/editar/'.$res->id)}}}}">
                                        <i class="fas fa-user-edit" style="color: #3490dc;"></i>
                                    </a>
                                </td>
                                <td>{{$res->data}}</td>
                                <td>{{$res->condominio->nome}}</td>
                                <td>{{$res->unidade->nome}}</td>
                                <td>{{$res->area->area}}</td>
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

