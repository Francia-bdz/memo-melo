<x-app-layout>

    <h1 class="text-5xl font-normal leading-normal text-center ">{{ $song->title }}</h1>


    <a href="{{ route('songs.edit', $song) }}" title="Modifier les informations" >Modifier</a>

</x-app-layout>
