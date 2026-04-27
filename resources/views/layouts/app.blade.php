<!DOCTYPE html>
<html>
<head>
    <title>Reading Room</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: Georgia, 'Times New Roman', serif;
            color: #d63384;
        }

        h2 {
            font-family: Georgia, 'Times New Roman', serif;
            text-align: center;
            color: #d63384;
            margin-top: 20px;
        }

        .navbar {
            text-align: center;
            background-color: #ffc0cb;
            padding: 12px;
        }

        .navbar a {
            text-decoration: none;
            color: #6f1d3a;
            margin: 0 10px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #d63384;
        }

        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        button {
            background-color: #ff85a2;
            border: none;
            padding: 10px 15px;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff5c8a;
        }
    </style>
</head>

<body>

    <h2>✨ Reading Room ✨</h2>

    <div class="navbar">
        <x-navbar :username="$username ?? null" />
    </div>

    @if(request()->is('/'))
        @yield('content')

    @elseif(request()->is('profile') && request()->username == null)
        <div class="container">
            @yield('content')
        </div>

    @elseif(request()->is('profile') && request()->username != null)
        @yield('content')

    @else
        <div class="container">
            @yield('content')
        </div>
    @endif

    @include('components.footer')

</body>
</html>