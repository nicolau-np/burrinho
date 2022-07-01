@php
$title = app()->view->getSections()['title'];
$menu = app()->view->getSections()['menu'];
$submenu = app()->view->getSections()['submenu'];
$type = app()->view->getSections()['type'];

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}" />-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap5/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles
    @livewireScripts

   <!-- <script src="{{ asset('js/app.js') }}"></script>-->
</head>

<body>
    <div class="container">

        @if ($type == 'login' || $type == 'register')
            @yield('content')
        @else
            <div class="menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/chat">Chat</a></li>
                    <li><a href="/about">Sobre</a></li>
                    <li>
                        <livewire:user.logout type="menu" />
                    </li>
                </ul>
            </div>

            <div class="content">
                @yield('content')
            </div>

            <div class="footer">
                &copy;Burrinho {{ date('Y') }}
            </div>
        @endif
    </div>

</body>


<script src="{{ asset('assets/bootstrap5/js/bootstrap.min.js') }}"></script>

</html>
