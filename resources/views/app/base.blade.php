<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Laravel</title>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
            color: #222222;
        }

        ul {
            padding-inline-start: 0;
        }

        li {
            text-decoration: none;
            list-style: none;
        }

        .logo {
            color: #66EB9A;
            font-weight: bolder;
            text-decoration: none;
            margin-right: 20px;
        }

        .divider {
            height: 20px;
            width: 2px;
            background: #222222;
            margin-right: 20px;
        }

        body {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ctn {
            width: 100%;
            max-width: 1280px;
        }

        .header {
            height: 100px;
            display: flex;
            align-items: center;
        }

        .category {
            margin-right: 20px;
        }

        ul:before {
            content: attr(aria-label);
            font-size: 120%;
            font-weight: bold;
        }

        .footer {
            padding: 50px 0;
            margin-top: 50px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            border-top: 1px solid black;
        }

        .footer li {
            margin: 10px 0;
        }

        .footer a {
            color: #27a1e8;
        }

        .articlesList {
            max-width: 100%;
            display: grid;
            justify-content: center;
            gap: 2rem;
            grid-template-columns: repeat(auto-fill, 400px);
        }

        .articlesList>* {
            width: 400px;
        }

        .articlesList img {
            width: 100%;
        }

        .pagnation {
            display: flex;
            background: red;
        }

        svg {
            width: 24px;
        }
    </style>

</head>

<?php
$path = public_path();
?>


<body>



    <div class="ctn">
        <header class="header">

            <a class="logo" href="{{ route('products.index') }}">
                <span>WE FASHION</span>
            </a>

            <div class="divider"></div>

            <a class="category" href="/app/discount">
                <span>DISCOUNT</span>
            </a>

            <a class="category" href="/app/men">
                <span>MEN</span>
            </a>

            <a class="category" href="/app/women">
                <span>WOMEN</span>
            </a>

        </header>

        <div class="content">
            @yield('content')
        </div>

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