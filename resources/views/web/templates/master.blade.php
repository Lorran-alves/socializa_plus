<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Socializa Plus - Agencia de Impusionamento</title>
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v2.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">


    {{-- //daqui pra baixo é velho --}}
	
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset(mix('web_assets/css/app.css')) }}">
    <script src="https://kit.fontawesome.com/0b08c8a640.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f29238e7e8.js" crossorigin="anonymous"></script>
    <!-- FONT AWESOME -->

    {{-- input telefone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js" defer></script>
   
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KK8CVLZ');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W3XN7HT');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KK8CVLZ');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BWGS8KMV2W"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-BWGS8KMV2W');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RTM6NGZHLK"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RTM6NGZHLK');
    </script>

    <!-- Event snippet for Compra no Site conversion page -->
    <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-11229640390/gItxCI_kwq8YEMbt2uop',
        'value': 1.0,
        'currency': 'BRL',
        'transaction_id': ''
    });
    </script>

</head>
<body>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3XN7HT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KK8CVLZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="sub">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Alcance mais visibilidade em seus Redes Sociais! 🌟</p>
            </div>
        </div>
    </div>
</section>

@include('web.includes.header')
@yield('content')

<!-- Modal Pedidos-->
<div class="modal fade" id="pedido" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons" src="{{ asset('web_assets/img/icons/padrao.png') }}">
                 <h2 id="title01">Consulte seu pedido</h2>

                <p class="modal_paragraf">Para localizar seu pedido é necessário seu e-mail.</p>
            
                <form id="form_verifica_pedido">
                    @csrf
                    <input id="pedido_search" type="email" placeholder="E-mail" autocapitalize="none" autocomplete="none" name="search">

                    <p style="color:red" id="msg_pedido"></p>
                    <button  id="verifica_pedido">
                        <i class="fa-solid fa-magnifying-glass icon-right"></i>Consultar
                    </button>
                </form> 
            </div>
        </div>
    </div>
</div>



{{-- modal promoção --}}
{{-- @include('web.modal_promocao') --}}

@include('web.includes.footer')


<script src="{{ asset(mix('web_assets/js/scripts.js')) }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // $(document).ready(function() {

    //     $.ajax({
    //         url: 'https://www.seguirplay.com/api_home', // Substitua pelo caminho real
    //         method: 'GET',
    //         success: function(response) {
    //             console.log('Função api_home foi chamada com sucesso!');
    //             // Se desejar, você pode processar a resposta adicionalmente aqui
    //         },
    //         error: function(error) {
    //             console.error('Erro ao chamar a função api_home:', error);
    //         }
    //     });
    
    // });
</script>

@stack('scripts')
</body>
</html>
