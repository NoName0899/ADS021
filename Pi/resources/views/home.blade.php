@extends('layouts.app')

@section('title')
    <title>Condominio</title>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card bg-dark">
                <div class="card-header">Selecione uma categoria</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="item dropdown">
                            <a class="link dropdown-toggle btn btn-primary" href="#" id="areaDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Área</a>
                            <div class="dropdown-menu" aria-labelledby="areaDropdown">
                                <a class="dropdown-item" href="/area/formulario" id="item">Criar</a>
                                <a class="dropdown-item" href="/area/listar" id="item">Listar</a>
                            </div>
                        </div>

                        <div class="item dropdown">
                            <a class="link dropdown-toggle btn btn-primary" href="condominio" id="condominioDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Condominio</a>
                            <div class="dropdown-menu" aria-labelledby="condominioDropdown">
                                <a class="dropdown-item" href="/condominio/formulario" id="item">Criar</a>
                                <a class="dropdown-item" href="/condominio/listar" id="item">Listar</a>
                            </div>
                        </div>

                        <div class="item dropdown">
                            <a class="link dropdown-toggle btn btn-primary" href="morador" id="moradorDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Moradores</a>
                            <div class="dropdown-menu" aria-labelledby="moradorDropdown">
                                <a class="dropdown-item" href="/morador/formulario" id="item">Criar</a>
                                <a class="dropdown-item" href="/morador/listar" id="item">Listar</a>
                            </div>
                        </div>

                        <div class="item dropdown">
                            <a class="link dropdown-toggle btn btn-primary" href="reserva" id="reservaDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Reserva de áreas</a>
                            <div class="dropdown-menu" aria-labelledby="reservaDropdown">
                                <a class="dropdown-item" href="/reserva/formulario" id="item">Criar</a>
                                <a class="dropdown-item" href="/reserva/listar" id="item">Listar</a>
                            </div>
                        </div>

                        <div class="item dropdown">
                            <a class="link dropdown-toggle btn btn-primary" href="unidade" id="unidadeDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Unidade</a>
                            <div class="dropdown-menu" aria-labelledby="unidadeDropdown">
                                <a class="dropdown-item" href="/unidade/formulario" id="item">Criar</a>
                                <a class="dropdown-item" href="/unidade/listar" id="item">Listar</a>
                            </div>
                        </div>

                        <div class="item dropdown">
                            <a class="link dropdown-toggle btn btn-primary" href="visitante" id="visitanteDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Visitantes</a>
                            <div class="dropdown-menu" aria-labelledby="moradorDropdown">
                                <a class="dropdown-item" href="/visitante/formulario" id="item">Criar</a>
                                <a class="dropdown-item" href="/visitante/listar" id="item">Listar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
