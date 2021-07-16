<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Films')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Caveat:wght@500&family=Gentium+Basic&family=Pacifico&family=Sacramento&display=swap" rel="stylesheet">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body>
    <header id="site_header" class="jumbo_header">
    
            <nav class="container">
                
                 <ul>
                    <li><a href="{{ route('home') }}"><strong>Home</strong></a></li>
                    <li><a href="{{ route('films') }}"><strong>Films</strong></a></li>
                    <li><a href="{{ route('about') }}"><strong>About</strong></a></li>
                    <li><a href="{{ route('contacts') }}"><strong>Contacts</strong></a></li>
                </ul>

            </nav>
               
       </header>
       <main id="site_main">
           @yield('content')
           
       </main>
       <footer id="site_footer"></footer>
    </body>
</html>
