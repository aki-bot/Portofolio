<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<title>@yield('title')</title>
<link rel="shortcut icon" href="/img/IMG_2666.jpg" type="image/png">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/front.css') }}" rel="stylesheet">
<link href="{{ asset('js/front.js') }}" rel="stylesheet"> 

<script href="{{asset('js/front.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<!--Bootstrapでモーダルを使うためには-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--app.js-->


<!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
<!-- jquery & iScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>

<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
<!--アイコンのリンクのやり方-->
{{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
{{--文字にアニメーションをつける--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

</head>
<body>
  
  <main>
    {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
    @yield('content')
  </main>
  
</body>
</html>
@yield('js')








    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    
    
    
    

    
            
            