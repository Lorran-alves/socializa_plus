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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    
    <script src="https://kit.fontawesome.com/f29238e7e8.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ asset(mix('web_assets/css/app.css')) }}">
    <link rel="stylesheet" href="{{asset("web_assets/css/fontawesome.css")}}">
    <link rel="stylesheet" href="{{asset("web_assets/css/templatemo-digimedia-v2.css")}}">
    <link rel="stylesheet" href="{{asset("web_assets/css/animated.css")}}">
    <link rel="stylesheet" href="{{asset("web_assets/css/owl.css")}}">


</head>
<body>

    <?php 
        // echo asset("web_assets/css/fontawesome.css");
    // die; 
    ?>
@include('web.includes.header')
@yield('content')

@include('web.includes.footer')
@include('web.includes.modal_orders')

<!-- Scripts vendor/jquery/jquery.min.js -->
<script src="{{asset("web_assets/js/jquery/jquery.min.js")}}"></script>
<script src="{{asset("web_assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("web_assets/js/owl-carousel.js")}}"></script>
<script src="{{asset("web_assets/js/animation.js")}}"></script>
<script src="{{asset("web_assets/js/imagesloaded.js")}}"></script>
<script src="{{asset("web_assets/js/custom.js")}}"></script>

{{-- input telefone --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js" defer></script>

</body>
</html>
