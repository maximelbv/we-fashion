<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            margin: 0 5%;
        }

        .category {
            margin-right: 20px;
        }
    </style>

</head>

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
        

    </div>

</body>

</html>