<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mémo-mélo</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])


</head>

<body>
    <div class="container">
        <div class="card">
            <div class="content">
                <h1>MÉMO<br>MÉLO</h1>
                <h2>Gardez le rythme de<br>votre progression</h2>
            </div>
            <img src="{{ asset('assets/images/memo-melo.svg') }}" class="image">
        </div>
        <div class="buttons">
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="button button-pink">SE DÉCONNECTER</button>
            </form>
            @else
            <form action="{{ route('demo-login') }}" method="POST">
                @csrf
                <button type="submit" class="button button-pink">VOIR LA DÉMO</button>
            </form>
            @endauth

            @auth
            <a href="{{ url('/songs') }}"><button class="button button-green">ACCÉDER AU RÉPERTOIRE</button></a>
            @else
            <a href="{{ route('login') }}" ><button class="button button-green"> SE CONNECTER</button></a>
            @endauth
        </div>
    </div>
</body>

</html>
