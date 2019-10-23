@extends('padrao.padrao')
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Listar</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/padrao.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @section('menu')
            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr>
                        <td>CPF</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>Marca do Veículo</td>
                        <td>Veiculo</td>
                        <td>Placa</td>
                        <td>Situação</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($moradores as $mor)
                        <tr>
                            <td>{{$mor->cpf}}</td>
                            <td>{{$mor->nome}}</td>
                            <td>{{$mor->email}}</td>
                            <td>{{$mor->telefone}}</td>
                            <td>{{$mor->marca}}</td>
                            <td>{{$mor->veiculo}}</td>
                            <td>{{$mor->placa}}</td>
                            <td>{{$mor->situacao}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        @endsection
    </body>
</html>
