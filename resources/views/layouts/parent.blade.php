<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >

    <link rel="stylesheet" href="{{asset('css/base.css')}}">

    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
{{--@include('layouts.navigation')--}}

<!-- Page Heading -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- ./navbar-header -->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav" id="navbar-links">
                    @auth
                    <li>
                        <a href="/add-note">NEW NOTE</a>
                    </li>
                    <li>
                        <a href="/notes/">VIEW ALL NOTES</a>
                    </li>



                    <li>
                        <a href="/register"> Sign Up </a>
                    </li>
                    <li>
                        <a href="/login"> Sign In </a>
                    </li>
                    @endauth
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @auth
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Welcome, {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
{{--                                <a href="/logout/" class="dropdown-item">--}}
{{--                                    <span class="glyphicon glyphicon-log-out"></span> Logout--}}
{{--                                </a>--}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth
                        @guest
                    <li><a href="/register/"> Sign Up </a></li>
                    <li><a href="/login/"> Sign in </a></li>
                        @endguest
                </ul>
            </div><!--/.nav-collapse -->
        </div><!-- ./container-->
    </nav>
    <div class="add-margin-top"></div>

    <!-- Page Content -->
    <main>
        @yield('layout_content')

    </main>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>
