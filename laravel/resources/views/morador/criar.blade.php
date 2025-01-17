@extends('padrao.padrao')
<!doctype html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Criar</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/padrao.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('js/app.js')}}"/>
        <script type="text/javascript">
            function input() {
                var control = 0;

                if (control=0){
                    control++;
                }else {
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

        <style>
            #span{
                border: #fff;

            }
        </style>
    </head>
    <body>
        @section('menu')
            <div id="main">
                <div id="span">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
                <form action="salvar" method="post">
                    @csrf
                    <div>
                        <input type="hidden" name="id" id="id">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" onclick="input()" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" onclick="input()"/>
                        </div>
                    </div>
                    <div>
                        <div class="form-group col-md-6">
                            <label for="veiculo">Veículo</label>
                            <input type="text"class="form-control" id="veiculo" placeholder="Ex: Corolla" name="veiculo" onclick="input()">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" placeholder="(00)00000-0000" maxlength="14" minlength="13" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" name="telefone" onclick="input()">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" id="marca" placeholder="Ex: Toyota" name="marca" onclick="input()">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="veiculo">Veículo</label>
                            <input type="text"class="form-control" id="veiculo" placeholder="Ex: Corolla" name="veiculo" onclick="input()">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="situacao">Situação</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situacao" id="situacao" value="ativo">
                            <label class="form-check-label" for="situacao">Ativo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situacao" id="inativo" value="inativo">
                            <label class="form-check-label" for="situacao">Inativo</label>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="int" id="condominio_id" name="condominio_id">
                        <input type="int" id="unidade_id" name="unidade_id">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Salvar">
                </form>


            </div>
        @endsection
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
        <script>
            $(window).load(function()
            {
                var phones = [{ "mask": "(##)#####-####"}, { "mask": "(###) ###-##############"}];
                $('#telefone').inputmask({
                    mask: phones,
                    greedy: false,
                    definitions: { '#': { validator: "[0-9]", cardinality: 1}} });
            });
        </script>
    </body>
</html>
