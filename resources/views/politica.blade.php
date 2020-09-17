
<!DOCTYPE html>

<html lang="pt-br">

<head title="App">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&family=Open+Sans:wght@700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script type="application/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <style>

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
                               <div class="card-header ">

                               </div>
                               <div class="card-body ">
                                   <h2>
                                       POLÍTICA DE PRIVACIDADE PFERD
                                   </h2>
                                   <p>
                                       Esta Política de Privacidade estabelece os termos nos quais a PFERD usa e protege as informações fornecidas por seus usuários ao usar seu site. Esta empresa está comprometida com a segurança dos dados de seus usuários. Quando solicitamos que você preencha os campos de informações pessoais com os quais você pode ser identificado, fazemos isso garantindo que elas sejam usadas apenas de acordo com os termos deste documento. No entanto, esta Política de Privacidade pode mudar com o tempo ou ser atualizada, por isso recomendamos e enfatizamos a revisão contínua desta página para garantir que você concorda com essas alterações.
                                       Informações coletadas
                                       Nosso site e nossas redes sociais podem coletar informações pessoais, tais como: Nome, informações de contato, como telefone, e-mail e informações demográficas. Da mesma forma, quando necessário, informações específicas podem ser necessárias para processar um pedido ou fazer uma entrega ou cobrança.
                                       Uso das informações coletadas
                                       Nosso site utiliza as informações para fornecer o melhor serviço possível, principalmente para rastrear usuários, pedidos, se aplicável, e para melhorar nossos produtos e serviços. É possível que os emails sejam enviados periodicamente através do nosso site com ofertas especiais, novos produtos e outras informações de publicidade que consideramos relevantes para você ou que possam lhe proporcionar benefícios, esses emails serão enviados para o endereço que você fornecer e poderão ser cancelados em qualquer momento.
                                       A PFERD está altamente comprometida em cumprir o compromisso de manter suas informações seguras. Utilizamos os sistemas mais avançados e os atualizamos constantemente para garantir que não haja acesso não autorizado.
                                       Cookies
                                       Um cookie refere-se a um arquivo que é enviado para solicitar permissão para ser armazenado no seu computador.Ao aceitar esse arquivo, o cookie é criado e serve para ter informações sobre o tráfego da Web e também facilita futuras visitas a um site. recorrente. Outra função que os cookies têm é que, com eles, os sites podem reconhecê-lo individualmente e, portanto, fornecer o melhor serviço personalizado em seu site.
                                       Nosso site usa cookies para identificar as páginas visitadas e sua frequência. Essas informações são usadas apenas para análise estatística e, em seguida, as informações são removidas permanentemente. Você pode excluir cookies a qualquer momento do seu computador. No entanto, os cookies ajudam a fornecer um serviço melhor aos sites, você não dá acesso a informações do seu computador ou de você, a menos que você queira e forneça diretamente, visitas a um site. Você pode aceitar ou negar o uso de cookies, no entanto, a maioria dos navegadores aceita cookies automaticamente, pois serve para ter um melhor serviço da web. Você também pode alterar as configurações do computador para recusar cookies. Se recusado, talvez você não consiga usar alguns de nossos serviços.
                                       Links para Terceiros
                                       Este site pode conter links para outros sites que podem ser do seu interesse. Depois que você clica nesses links e sai da nossa página, não temos mais controle sobre o site para o qual você é redirecionado e, portanto, não somos responsáveis ​​pelos termos, privacidade ou proteção de seus dados nesses sites de terceiros. Esses sites estão sujeitos a suas próprias políticas de privacidade, portanto, é recomendável que você os consulte para confirmar que concorda com eles.
                                       Controle de suas informações pessoais
                                       A qualquer momento, você pode restringir a coleta ou o uso de informações pessoais fornecidas ao nosso site. Toda vez que você é solicitado a preencher um formulário, como um registro de usuário, pode marcar ou desmarcar a opção de receber informações por email. Caso tenha marcado a opção de receber nossa newsletter ou anúncio, você pode cancelá-la a qualquer momento.
                                       A PFERD não venderá, atribuirá ou distribuirá as informações pessoais coletadas sem o seu consentimento, a menos que exigido por um juiz com uma ordem judicial.
                                       A PFERD se reserva o direito de alterar os termos desta Política de Privacidade a qualquer momento.
                                   </p>su

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
    <p hidden>DEVELOPED BY : r4tazan4, We are the new world order </p>
</footer>
</html>

