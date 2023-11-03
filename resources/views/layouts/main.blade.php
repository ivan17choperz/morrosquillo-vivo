<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morrosquillo Vivo | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <nav class="bg-green-500  shadow-md shadow-green-600 fixed z-50  font-bold">
        <div class="nav-wrapper  container ">
            <a href="/" class="brand-logo center font-bold ">Morrosquillo <span
                    class="text-green-700">Vivo</span></a>

            <ul class="hide-on-med-and-down center ">
                <li><a href="/cursos">Cursos</a></li>
                <li><a href="/">Inicio</a></li>

            </ul>
            @guest
                <ul class="hide-on-med-and-down right">
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register" class="btn green rounded-lg ">Registrarse</a></li>
                </ul>
            @endguest
            @auth
                <!-- Dropdown Trigger -->
                <a class='dropdown-trigger  right flex items-center' data-target='dropdown1'>
                    <img src="{{ asset('images-icons/user-icon.png') }}" class="w-8 mr-3 circle responsive-img"
                        alt="">
                    <p class="font-bold">{{ auth()->user()->username }}</p>
                    <div class="icon dropdown ml-2">
                        <svg width='24px' height='24px' viewBox='0 0 24 24' version='1.1'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <title>down_line</title>
                            <g id='页面-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                <g id='Arrow' transform='translate(-288.000000, 0.000000)'>
                                    <g id='down_line' transform='translate(288.000000, 0.000000)'>
                                        <path
                                            d='M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z'
                                            id='MingCute' fill-rule='nonzero'></path>
                                        <path
                                            d='M12.7071,15.7072 C12.3166,16.0977 11.6834,16.0977 11.2929,15.7072 L5.63604,10.0503 C5.24551,9.65982 5.24551,9.02666 5.63604,8.63613 C6.02656,8.24561 6.65973,8.24561 7.05025,8.63613 L12,13.5859 L16.9497,8.63613 C17.3403,8.24561 17.9734,8.24561 18.364,8.63613 C18.7545,9.02666 18.7545,9.65982 18.364,10.0503 L12.7071,15.7072 Z'
                                            id='路径' fill='#FFFFFFFF'></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content w-72 text-green-800 capitalize text-lg'>
                    <li class="text-green-800">
                        <a href="#!" class="w-full text-green-800 p-3">Perfil</a>
                    </li>
                    <li>
                        <form action="/auth/logOut" method="post">
                            @csrf
                            <button type="submit" class="w-full text-green-900 p-3">Cerrar Cesión</button>
                        </form>
                    </li>
                </ul>
            @endauth
        </div>
    </nav>

    <div class=" pt-14 ">
        @yield('content')
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @vite('resources/js/components.materialize.js')
    @vite('resources/js/app.js')
</body>

</html>
