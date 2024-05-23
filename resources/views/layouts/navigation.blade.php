<nav>
    <ul class="navbar">
        <li class="logo"><a href="/" class="logo">MÉMO-MÉLO</a></li>

        <li class="greeting-link" ><a href="{{ route('profile.edit') }}">Hello {{ Auth::user()->name }} :) </a></li>

        <li class="nav-links">
            <div>
                <a href="{{ url('/songs') }}">Mon répertoire</a>
                <a href="{{ url('/songs/create') }}">Ajouter des titres</a>
            <div>
        </li>

        <li class="hamburger-menu">
            <button id="hamburger" aria-label="Open Menu">
                &#9776; <!-- Hamburger icon -->
            </button>
        </li>

        <ul id="mobile-menu" class="mobile-menu">
            <button id="close-menu">X</button>
            <li><a href="{{ route('profile.edit') }}">Mon profil</a></li>
            <li><a href="{{ url('/songs') }}">Mon répertoire</a></li>
            <li><a href="{{ url('/songs/create') }}">Ajouter des titres</a></li>
        </ul>


    </ul>
</nav>


<script>
    document.getElementById('hamburger').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        if (menu.classList.contains('show')) {
            menu.classList.remove('show');
        } else {
            menu.classList.add('show');
        }
    });

    // Ajouter un gestionnaire d'événements pour fermer le menu lorsque l'utilisateur clique sur "X"
    document.getElementById('close-menu').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.remove('show');
    });
</script>