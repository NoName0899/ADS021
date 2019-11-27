@extends('layouts.app')

@section('title')
    <title>Criar Morador</title>
@endsection

@section('style')
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .red {
            color: red;
        }

        .btn {
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
        }

        /*Also */
        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        /* This is copied from https://github.com/blueimp/jQuery-File-Upload/blob/master/css/jquery.fileupload.css */
        .fileinput-button {
            position: relative;
            overflow: hidden;
        }

        /*Also*/
        .fileinput-button input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            opacity: 0;
            -ms-filter: 'alpha(opacity=0)';
            font-size: 200px;
            direction: ltr;
            cursor: pointer;
        }

    </style>
@endsection

@section('formulario')

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-dark">
                <div class="card-header">
                    Morador
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

                    <form action="salvar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$morador->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email"><i class="red">*</i> E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="Email"
                                       onclick="input()"
                                       name="email" value="{{$morador->email}}" maxlength="150">
                                <div class="alert alert-danger" id="mensagemEmail" style="display: none;">
                                    O E-mail já está cadastrado !
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nome"><i class="red">*</i> Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
                                       onclick="input()"
                                       value="{{$morador->nome}}" maxlength="150"/>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="cpf"><i class="red">*</i> CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" name="cpf"
                                       onclick="input()" value="{{$morador->cpf}}" maxlength="150" \>
                                <div class="alert alert-danger" id="mensagemCpf" style="display: none;">
                                    O CPF já está cadastrado !
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="telefone"><i class="red">*</i> Telefone</label>
                                <input type="text" class="form-control" id="telefone" placeholder="(00)00000-0000"
                                       maxlength="14"
                                       minlength="13"
                                       onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
                                       name="telefone" onclick="input()" value="{{$morador->telefone}}" maxlength="150">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="marca"><i class="red">*</i> Marca</label>
                                <input type="text" class="form-control" id="marca" placeholder="Ex: Toyota" name="marca"
                                       onclick="input()" value="{{$morador->marca}}" maxlength="150">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="veiculo"><i class="red">*</i> Veículo</label>
                                <input type="text" class="form-control" id="veiculo" placeholder="Ex: Corolla"
                                       name="veiculo"
                                       onclick="input()" value="{{$morador->veiculo}}" maxlength="150">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="veiculo"><i class="red">*</i> Placa</label>
                                <input type="text" class="form-control" id="placa" placeholder="AAA-0000" name="placa"
                                       onclick="input()" value="{{$morador->placa}}" maxlength="150">
                                <div class="alert alert-danger" id="mensagemPlaca" style="display: none;">
                                    A placa já está cadastrada !
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="situacao"><i class="red">*</i> Situação</label>
                                <div class="form-check">
                                    @if($morador->situacao == 'Ativo')
                                        <input class="form-check-input" type="radio" name="situacao" id="situacao"
                                               value="Ativo"
                                               checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="situacao" id="situacao"
                                               value="Ativo">
                                    @endif
                                    <label class="form-check-label" for="situacao">Ativo</label>

                                </div>
                                <div class="form-check">
                                    @if($morador->situacao == 'Inativo')
                                        <input class="form-check-input" type="radio" name="situacao" id="inativo"
                                               value="Inativo"
                                               checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="situacao" id="inativo"
                                               value="Inativo"
                                        >
                                    @endif
                                    <label class="form-check-label" for="situacao">Inativo</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="condominio_id">Selecione o Condominio</label>
                                <select class="form-control" name="condominio_id">
                                    <option>-- Selecione o Condominio --</option>
                                    @foreach($condominio as $cond)
                                        @if($morador->condominio_id == $cond->id)
                                            <option value="{{$cond->id}}" selected>{{$cond->nome}}</option>
                                        @else
                                            <option value="{{$cond->id}}">{{$cond->nome}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="condominio_id">Selecione a unidade</label>
                                <select class="form-control" name="unidade_id">
                                    <option>-- Selecione a Unidade --</option>
                                    @foreach($unidade as $unid)
                                        @if($morador->unidade_id == $unid->id)
                                            <option value="{{$unid->id}}" selected>{{$unid->nome}}</option>
                                        @else
                                            <option value="{{$unid->id}}">{{$unid->nome}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <label class="col-md-12">Inserir imagem do Morador</label>
                            <span class="btn btn-primary fileinput-button form-control-file col-md-3">
                                <span>Selecione foto do Morador</span>
                                <input type="file" name="arquivo">
                            </span>
                        </div><br>

                        <div class="form-row col-0">
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
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            var phones = [{"mask": "(##)#####-####"}];
            $('#telefone').inputmask({
                mask: phones,
                greedy: false,
                definitions: {'#': {validator: "[0-9]", cardinality: 1}}
            });

            var cpf = [{"mask": "###.###.###-##"}];
            $('#cpf').inputmask({
                mask: cpf,
                greedy: false,
                definitions: {'#': {validator: "[0-9]", cardinality: 1}}
            });

            var placa = [{"mask": "***-####"}];
            $('#placa').inputmask({
                mask: placa,
                greedy: false,
                definitions: {
                    '#': {validator: "[0-9]", cardinality: 1},
                    '*': {validator: "[A-Za-z]", cardinality: 1}
                }
            });
        });

        function input() {
            var control = 0;

            if (control = 0) {
                control++;
            } else {
                document.getElementById("cpf").style.background = "#484848";
                document.getElementById("cpf").style.color = "#ffffff";

                document.getElementById("email").style.background = "#484848";
                document.getElementById("email").style.color = "#ffffff";

                document.getElementById("nome").style.background = "#484848";
                document.getElementById("nome").style.color = "#ffffff";

                document.getElementById("telefone").style.background = "#484848";
                document.getElementById("telefone").style.color = "#ffffff";

                document.getElementById("marca").style.background = "#484848";
                document.getElementById("marca").style.color = "#ffffff";

                document.getElementById("veiculo").style.background = "#484848";
                document.getElementById("veiculo").style.color = "#ffffff";

            }
        }

        $(function () {
            $('#cpf').change(function () {
                $.ajax({
                    url: 'verificar-cpf/' + $('#cpf').val(),
                    success: function (existe) {
                        if (existe > 0) {
                            $('#mensagemCpf').show('slow');
                            $('#cpf').focus();
                        } else {
                            $('#mensagemCpf').hide('slow');
                        }
                    }
                })
            });
        })

        $(function () {
            $('#email').change(function () {
                $.ajax({
                    url: 'verificar-email/' + $('#email').val(),
                    success: function (existe) {
                        if (existe > 0) {
                            $('#mensagemEmail').show('slow');
                            $('#email').focus();
                        } else {
                            $('#mensagemEmail').hide('slow');
                        }
                    }
                })
            });
        })

        $(function () {
            $('#placa').change(function () {
                $.ajax({
                    url: 'verificar-placa/' + $('#placa').val(),
                    success: function (existe) {
                        if (existe > 0) {
                            $('#mensagemPlaca').show('slow');
                            $('#cpf').focus();
                        } else {
                            $('#mensagemPlaca').hide('slow');
                        }
                    }
                })
            });
        })
    </script>
@endsection
