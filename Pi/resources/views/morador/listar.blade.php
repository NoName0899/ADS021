@extends('padrao.padrao')
<!DOCTYPE HTML>
<html lang="pt">
    <head>
        <title>Listar</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/padrao.css')}}" rel="stylesheet" type="text/css">
        <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
        <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    </head>
    <body>
        @section('menu')
            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($moradores as $mor)
                        <tr>
                            <td>
                                <a href="remover/{{$mor->id}}">
                                    <i class="fa fa-times-circle" style="color: red;"></i>
                                </a>
                                <a href="editar/{{$mor->id}}">
                                    <i class="fas fa-user-edit"  style="color: #3490dc;"></i>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        @endsection
    </body>
</html>
