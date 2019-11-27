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
    </style>
@endsection

@section('formulario')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card bg-dark">
                <div class="card-header">
                    Reserva
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

                    <form action="salvar" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$reserva->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="data"><i class="red">*</i> Data</label>
                                <input type="date" class="form-control" id="data" name="data" value="{{$reserva->data}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="condominio_id">Selecione o Condominio</label>
                                <select class="form-control" name="condominio_id">
                                    <option>-- Selecione o Condominio --</option>
                                    @foreach($condominio as $cond)
                                        @if($reserva->condominio_id == $cond->id)
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
                                        @if($reserva->unidade_id == $unid->id)
                                            <option value="{{$unid->id}}" selected>{{$unid->nome}}</option>
                                        @else
                                            <option value="{{$unid->id}}">{{$unid->nome}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="condominio_id">Selecione uma Área</label>
                                <select class="form-control" name="area_id">
                                    <option>-- Selecione uma Área --</option>
                                    @foreach($area as $ar)
                                        @if($reserva->area_id == $ar->id)
                                            <option value="{{$ar->id}}" selected>{{$ar->area}}</option>
                                        @else
                                            <option value="{{$ar->id}}" style="color: #fff;">{{$ar->area}}</option>
                                        @endif
                                    @endforeach
                                </select>
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
    <script>
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
    </script>
@endsection
