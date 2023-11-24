<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="{{asset('dashboard/color-modes.js')}}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FFSD') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('dashboard/dashboard.js') }}" defer></script>
    <script src="{{ asset('dashboard/side_nav.min.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/font/css/all.css')}}">
    <link href="{{asset('dashboard/dashboard.css')}}" rel="stylesheet">

    <style>



        *{
            box-sizing: border-box
        }


       </style>
</head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


            @include('layouts.side_nav')
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <!-- top nav bar -->

                    @include('layouts.top_nav')
                    <div class="container-fluid mt-3">
                        <div class='mt-3'>

                        </div>





            @yield('content')
                    </div>
                </div>


    </div>


    <div class="footer">


    </div>

    <script>
        //add fadeout class for alert
const timeout =2000;

        document.addEventListener('DOMContentLoaded', function(){


    setTimeout(() => {
        var alertItems =document.querySelectorAll('.alert');
        alertItems.array.forEach(element => {
            element.classList.remove('show');

        });


    }, timeout);
        })
    </script>
</body>
</html>
