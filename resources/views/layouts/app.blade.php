<html>
    <head>
        <title>
            hema
        </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/app.css">
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <style>
        
    </style>
    <body>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
            <li><form action="/logout" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form></li>
        </ul>
        @yield('content')
    </body>
    <style>
        ul{
            display: grid;
            list-style: none;
            text-decoration: none;
            grid-auto-flow: dense column;
            margin-top: 50px;
        }
    </style>
    
</html>