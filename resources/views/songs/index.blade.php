<x-app-layout>


    <h1 class="text-4xl font-bold">Mon répertoire </h1>

    @if (session()->has('success'))
        <div class="alert alert_success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert_error">
            {{ session()->get('error') }}
        </div>
    @endif

    @foreach ($mySongs as $song)
        <a href="{{ route('songs.show', $song) }}" title="Lire l'article">{{ $song->title }}</a>
    @endforeach

</x-app-layout>
