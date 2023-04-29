<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.filter', ['state' => 'promotion']) }}">DISCOUNT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.filter', ['category_id' => 1]) }}">MEN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.filter', ['category_id' => 2]) }}">WOMEN</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))

                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/admin">
                                    {{ __('Dashboard') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer">
            <ul aria-label="Informations">
                <li><a href="/">Legal Mentions</a></li>
                <li><a href="/">Press</a></li>
                <li><a href="/">Fabrication</a></li>
            </ul>
            <ul aria-label="Customer Service">
                <li><a href="/">Contact Us</a></li>
                <li><a href="/">Delivery & Return</a></li>
                <li><a href="/">Terms of sales</a></li>
            </ul>
            <ul aria-label="Socials">
                <li>
                    <a href="/">
                        <img src="../../public/images/icons/facebook.png" alt="icon facebook"></img>
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <img src="../../public/images/icons/instagram.png" alt="icon instagram">
                        <span>Instagram</span>
                    </a>
                </li>
                <li><a href="/">Subscribe to the Newsletter</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>