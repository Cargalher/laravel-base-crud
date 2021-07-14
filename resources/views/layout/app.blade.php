<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Films')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body>
    <header id="site_header">
            <nav>
           
                 <ul>
                    <li><a href="{{ route('home') }}"><strong>Home</strong></a></li>
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
