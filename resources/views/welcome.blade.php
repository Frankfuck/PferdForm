<!DOCTYPE html>

<html lang="pt-br">

<head title="App">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&family=Open+Sans:wght@700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script type="application/javascript" src="{{asset('js/all.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>

        $(document).ready(function () {
            $("#slideshow > div:gt(0)").hide();

            setInterval(function() {
                $('#slideshow > div:first')
                    .fadeOut(1000)
                    .next()
                    .fadeIn(1000)
                    .end()
                    .appendTo('#slideshow');
            }, 3000);
        })

    </script>
    <style>


        #slideshow > div {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
        }
        .fontefru {
            font-family: 'Open Sans', sans-serif;

        }

        html, body {

            height: 100%;
            width: 100%

        }

        body {
            background-image: url("{{asset('img/text.png')}}");
            background-repeat: no-repeat;
            background-position: center top;
            background-size: 100% 60%;

        }

        .margintop {
            margin-top: 38%;
        }

        .card-header {
            background: white;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 0px; /* 5px rounded corners */

        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        @media only screen and (max-width: 767px) {
            body {

                background-image: url({{asset('img/text.png')}});
                background-size: 100% 25%;
            }

            .margintop {
                margin: 50px auto 0;

            }
            .textaa
            {
                width: 10%;
                height: 10%;
            }

            .casc{
                display: none;
            }

        }

        .texta
        {
            max-width: 100%;
            height: 70%;
        }

        .as
        {
            color: rgb(0,105,180);
        }


    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger" style="margin-top: 2rem">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('Success'))
                <div class="alert alert-success" style="margin-top: 2rem">
                    <ul>
                        <li>{!! \Session::get('Success') !!}</li>
                    </ul>
                </div>
            @endif
            <form method="GET" action="{{url('/sendemail/send')}}">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card margintop">
                                <div class="card-header justify-content-center">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <img class="animate__animated animate__fadeIn" src="{{asset('img/logo.png')}}"
                                                 style="height: 100%;width: 25%;float: right">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body animate__animated animate__fadeIn">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 style="color: rgb(0,105,180)">Inscrição para o Treinamento de Segurança Online PFERD VSM

                                            </h2>
                                            <br>
                                            <h5>Para participar do nosso Treinamento de Segurança, basta preencher os dados da inscrição.

                                                Após finalizado o cadastro, enviaremos um link de acesso para o endereço de e-mail cadastrado.
                                            </h5>
                                            <h5>
                                                O treinamento será realizado no dia 18/06/2020 quinta-feira às 16h00.
                                            </h5>
                                            <h4>
                                                Marque na sua agenda!
                                            </h4>
                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                                <div class="col-md-12" align="center">
                                                    <div id="" class="casc" >
                                                        <div>
                                                            <img class=""  src="{{asset('img/cat.png')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group justify-content-center">
                                                <div class="col-md-8">
                                                    <label for="name"><i class="as fa fa-user"></i>&nbsp Nome</label>
                                                    <input class="form-control" name="name" type="text" placeholder="Exemplo Exemplo" required>
                                                </div>
                                            </div>
                                            <div class="row form-group justify-content-center">
                                                <div class="col-md-8">
                                                    <label for="nome"><i class="as fa fa-at"></i>&nbsp E-mail</label>
                                                    <input class="form-control" name="email" placeholder="exemplo@exemplo.com.br" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row form-group justify-content-center">
                                                <div class="col-md-8">
                                                    <label for="telefone" class=""><i class="as fa fa-phone"></i>&nbsp Telefone</label>
                                                    <input class="form-control" name="telefone" placeholder="(99) 99999999" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row form-group justify-content-center">
                                                <div class="col-md-8">
                                                    <label for="empresa"><i class="as fa fa-home"></i>&nbsp Empresa</label>
                                                    <input class="form-control" name="empresa" placeholder="exemplos e cia" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row form-group justify-content-center">
                                                <div class="col-md-4">
                                                    <label for="cidade"><i class="as fa fa-location-arrow"></i>&nbsp Cidade</label>
                                                    <input name="cidade" id="cidade" class="form-control" placeholder="Curitiba" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="estado"><i class="as fa fa-map-signs"></i>&nbsp Estado</label>
                                                    <select name="estado" id="estado" class="form-control">
                                                        <option value="AC">Acre</option>
                                                        <option value="AL">Alagoas</option>
                                                        <option value="AP">Amapá</option>
                                                        <option value="AM">Amazonas</option>
                                                        <option value="BA">Bahia</option>
                                                        <option value="CE">Ceará</option>
                                                        <option value="DF">Distrito Federal</option>
                                                        <option value="ES">Espírito Santo</option>
                                                        <option value="GO">Goiás</option>
                                                        <option value="MA">Maranhão</option>
                                                        <option value="MT">Mato Grosso</option>
                                                        <option value="MS">Mato Grosso do Sul</option>
                                                        <option value="MG">Minas Gerais</option>
                                                        <option value="PA">Pará</option>
                                                        <option value="PB">Paraíba</option>
                                                        <option value="PR">Paraná</option>
                                                        <option value="PE">Pernambuco</option>
                                                        <option value="PI">Piauí</option>
                                                        <option value="RJ">Rio de Janeiro</option>
                                                        <option value="RN">Rio Grande do Norte</option>
                                                        <option value="RS">Rio Grande do Sul</option>
                                                        <option value="RO">Rondônia</option>
                                                        <option value="RR">Roraima</option>
                                                        <option value="SC">Santa Catarina</option>
                                                        <option value="SP">São Paulo</option>
                                                        <option value="SE">Sergipe</option>
                                                        <option value="TO">Tocantins</option>
                                                        <option value="EX">Estrangeiro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row justify-content-center form-group">
                                                <div class="col-md-8">
                                                    <script>
                                                        $(document).ready(function () {
                                                            $('input[id=termosdecontrato]').change(function () {
                                                                if ($(this).is(':checked')) {
                                                                    $('#termos').val('1')
                                                                }
                                                            });
                                                        })
                                                    </script>
                                                    <div class="row form-group justify-content-center">

                                                    </div>
                                                    <input hidden id="termos" name="termos" required>
                                                    <input required type="checkbox" id="termosdecontrato" name="termosdecontrato">&nbsp Eu concordo e aceito a<a  target="_blank" href="https://pferd.com.br/App/public/politica">&nbsp POLÍTICA DE PRIVACIDADE</a>
                                                </div>
                                            </div>
                                            <br>
                                            <Br>
                                            <br>
                                            <br>
                                            <div class="row form-group justify-content-center">
                                                <div class="row justify-content-center">
                                                    <div class="col-xs-7">
                                                        <div class="g-recaptcha"
                                                             data-sitekey="6LdfUfMUAAAAACGv4bqwTs9TZ8wU3VRi5-Pv3edo"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-footer ">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <h5 class="fontefru"
                                                style="color: rgb(0,105,180);font-size: 16px;padding: 1rem;">
                                                #JUNTOSSOMOSMAISPFERDVSM
                                            </h5>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="submit" name="send" value="Cadastrar"
                                                   class="btn btn-lg btn-info"
                                                   style="color: white;background-color: rgb(0,105,180);float:right;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<br>
<footer>
    <p hidden>DEVELOPED BY : r4tazan4 WATNWO / @support NiceTryfdp</p>
</footer>
</html>
