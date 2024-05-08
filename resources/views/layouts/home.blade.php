<!DOCTYPE html>

<head>
    <title> WELCOME TO MR RAJANS BLOG APP!!! - @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('resources/css/testerstyles.css') }}">
</head>

<body>
    <centre> <h1> Rajan's Site - @yield('title') </h1> </centre>

    @if ($errors->any () )
        <div>
            Errors to fix: 
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        @yield('content')
    </div>

</body>

</html>