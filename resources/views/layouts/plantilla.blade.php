<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- fivicon -->
    <!-- estilos -->
    <style>
        .active{
            color: red;
            font-weight: white;
        }
    </style>
</head>

<body>
    <!-- header -->
    <!-- nav -->

    <header>
        <nav>
            
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' :/*else*/'' }}">Home</a>
            </li>
            <li>
                <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' :/*else*/'' }}">cursos</a>
            </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' :/*else*/'' }}">Nosotros</a>
            </li>
                

            
        </nav>
    </header>


    @yield('content')

    <!-- footer -->

    <!-- script -->
</body>

</html>