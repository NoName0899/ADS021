@extends('layouts.app')

@section('title')
    <title>Criar Condominio</title>
@endsection

@section('style')
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .red {
            color: red;
        }
    </style>
@endsection

@section('formulario')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">
                    Condominio
                </div>
                <div class="card-body">
                    <div>
                        @if(count($errors) > 0)
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <form action="{{url('/condominio/salvar')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$condominio->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cnpj"><i class="red">*</i> CNPJ</label>
                                <input type="text" class="form-control" id="cnpj" placeholder="00.000.000-0000.00"
                                       onclick="input()"
                                       name="cnpj" value="{{$condominio->cnpj}}" maxlength="150">
                                <div class="alert alert-danger" id="mensagemCnpj" style="display: none;">
                                    O CNPJ já está cadastrado !
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nome"><i class="red">*</i> Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome" onclick="input()"
                                       name="nome" value="{{$condominio->nome}}" maxlength="150">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="endereco"><i class="red">*</i> Endereço</label>
                                <input type="text" class="form-control" id="endereco" placeholder="Endereço"
                                       onclick="input()"
                                       name="endereco" value="{{$condominio->endereco}}" maxlength="150">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cep"><i class="red">*</i> CEP</label>
                                <input type="text" class="form-control" id="cep" placeholder="00000-000"
                                       onclick="input()"
                                       name="cep" value="{{$condominio->cep}}" maxlength="150">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cidade"><i class="red">*</i> Cidade</label>
                                <input type="text" class="form-control" id="cidade" placeholder="Ex: Ceilândia"
                                       onclick="input()"
                                       name="cidade" value="{{$condominio->cidade}}" maxlength="150">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bairro"><i class="red">*</i> Bairro</label>
                                <input type="text" class="form-control" id="bairro" placeholder="Ex: Ceilândia Sul"
                                       onclick="input()"
                                       name="bairro" value="{{$condominio->bairro}}" maxlength="150">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="uf"><i class="red">*</i> UF</label>
                                <input type="text" class="form-control" id="uf" placeholder="Ex: DF" onclick="input()"
                                       name="uf" value="{{$condominio->uf}}" maxlength="150">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-0">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                            </div>
                            <div class="form-group col-md-1">
                                <a class="btn btn-primary" href="{{ route('home') }}">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            var cnpj = [{"mask": "##.###.###-####-##"}];
            $('#cnpj').inputmask({
                mask: cnpj,
                greedy: false,
                definitions: {'#': {validator: "[0-9]", cardinality: 1}}
            });

            var cep = [{"mask": "#####-###"}];
            $('#cep').inputmask({
                mask: cep,
                greedy: false,
                definitions: {'#': {validator: "[0-9]", cardinality: 1}}
            });

            var uf = [{"mask": "**"}];
            $('#uf').inputmask({
                mask: uf,
                greedy: false,
                definitions: {'*': {validator: "[A-Za-z]", cardinality: 1}}
            });
        });

        $(function () {
            $('#cnpj').change(function () {
                $.ajax({
                    url: 'verificar-cnpj/' + $('#cnpj').val(),
                    success: function (existe) {
                        if (existe > 0) {
                            $('#mensagemCnpj').show('slow');
                            $('#cnpj').focus();
                        } else {
                            $('#mensagemCnpj').hide('slow');
                        }
                    }
                })
            });
        })

    </script>
@endsection




