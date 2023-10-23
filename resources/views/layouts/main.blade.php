<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morrosquillo Vivo | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <nav class="bg-cyan-500 shadow-lg fixed z-50 ">
        <div class="nav-wrapper  container ">
            <a href="#" class="brand-logo center ">Morrosquillo <span class="blue-text text-darken-2 ">Vivo</span></a>

            <ul class="hide-on-med-and-down center ">
                <li><a href="/courses" >Cursos</a></li>
                <li><a href="/home">Inicio</a></li>

            </ul>
            <ul class="hide-on-med-and-down right">
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register" class="btn light-blue ">Registrarse</a></li>
            </ul>

        </div>
    </nav>

    <div class=" pt-20 ">
        @yield('content')
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @vite('resources/js/components.materialize.js')
    @vite('resources/js/app.js')
</body>

</html>
