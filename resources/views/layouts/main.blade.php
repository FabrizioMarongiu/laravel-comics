<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        {{--MAIN STYLES--}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       
    </head>
    <body>
        <div class="app">
             @include('partials.header')

            <main>
                @yield('content')
            </main>

            {{-- INCLUSIONE FOOTER --}}
            @include('partials.footer')
        </div>
        
        {{-- INCLUSIONE HEADER --}}
       

        

        {{-- JS --}}
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>