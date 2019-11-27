@extends('layouts.app')

@section('title')
    <title>Lista Area</title>
@endsection

@section('listar')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card bg-dark">
                <div class="card-header">
                    Listar Area
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <td>Ações</td>
                            <td>Área</td>
                            <td>Situação</td>
                            <td>Condominio</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($area as $ar)
                            <tr>
                                <td>
                                    <a href="{{url('/area/remover/'.$ar->id)}}">
                                        <i class="fa fa-times-circle" style="color: red;"
                                           onclick="return confirm('Você tem certeza que quer excluir ?');"></i>
                                    </a>
                                    <a href="{{url('/area/editar/'.$ar->id)}}}}">
                                        <i class="fas fa-user-edit" style="color: #3490dc;"></i>
                                    </a>
                                </td>
                                <td>{{$ar->area}}</td>
                                <td>{{$ar->situacao}}</td>
                                <td>{{$ar->condominio->nome}}</td>
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

