<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mémo-mélo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        h1 {
            text-shadow: -2px 2px 0 #000,
                2px 2px 0 #000,
                2px -2px 0 #000,
                -2px -2px 0 #000;
        }
    </style>

</head>

<body class="bg-beige ">
    <div class="bg-beige h-full w-full">
        <div class="flex flex-col items-center">
            <div class="bg-green w-max rounded-md border-2 border-black flex mt-24 pb-10">
                <div class="flex flex-col mt-16 ml-20 mr-28">
                    <h1 class="font-alinsa text-9xl	text-beige ">MÉMO</br>MÉLO</h1>
                    <h2 class="text-beige text-2xl	"> Gardez le rythme de </br>votre progression </h2>
                </div>
                <img src="{{ asset('assets/images/memo-melo.svg') }}" class="max-w-xs mr-10">
            </div>
            <div class="flex mt-10 gap-10	">
                <button
                    class="bg-pink rounded-full border border-black transition shadow-button hover:bg-pinkHover hover:shadow-buttonHover p-1">
                    <a href="{{ route('login') }}" class="font-inter px-3 py-2 text-black focus:outline-none">
                        VOIR LA DÉMO
                    </a>
                </button>

                @auth
                    <button
                        class="bg-green rounded-full border border-black transition shadow-button hover:bg-greenHover hover:shadow-buttonHover p-1">
                        <a href="{{ url('/dashboard') }}"
                            class="font-inter px-3 py-2 text-beige transition focus:outline-none">
                            ACCÉDER AU RÉPERTOIRE
                        </a>
                    </button>
                @else
                    <button
                        class="bg-green rounded-full border border-black transition shadow-button hover:bg-greenHover hover:shadow-buttonHover p-1">
                        <a href="{{ route('login') }}"
                            class="font-inter px-3 py-2 text-beige transition focus:outline-none">
                            SE CONNECTER
                        </a>
                    </button>

                @endauth
            </div>
        </div>
    </div>
</body>

</html>
