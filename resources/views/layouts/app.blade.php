<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/font/css/all.css')}}">
    <style>



        *{
            box-sizing: border-box
        }
        #id{
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;

    /* background-color:white; */

background-image: url({{url('images/bg6.jpg')}});


}
.contain{
    min-height: 100vh;
}

        .input-group{
            border:1px solid gray;
            border-top-left-radius:4px;
            border-bottom-left-radius:4px;
            margin-left:100px;
        }
        .form-control{
             border:1px lightgray;
        }
        .input-group-text{
            border-radius: 0;

        }

        .input-contain{
            margin-top:2vh;
            margin-left:5vw;
            margin-right:5vw;
        }
        .login{

margin-left:12vw;
margin-right:12vw;
}

    </style>
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
