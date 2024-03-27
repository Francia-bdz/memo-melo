<x-app-layout>


    <h1 class="text-6xl font-black text-beige text-center mt-10">MA MÉLODIE</h1>
    <h3 class="text-lg font-inter text-beige text-center mt-2">Je veux que ma mélodie fasse le tour du monde</h3>

    @if (session()->has('success'))
        <div class="alert alert_success text-beige ml-8 italic">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert_error text-red-900 ml-8 italic">
            {{ session()->get('error') }}
        </div>
    @endif
    <div class="bg-beige m-8 p-12 rounded-xl border border-black">

        <h3 class="font-inter text-3xl text-green uppercase font-semibold">{{ $song->title }}</h3>
        <p class="class=font-inter text-xl text-green/70 mt-3">{{ $song->artist }}</p>

        <p class="font-inter font-bold text-lg text-green mt-8">NIVEAU DE CONNAISSANCE</p>

        <div class="flex flex-col gap-4">
            <button
                class="bg-pink rounded-full border border-black transition shadow-button hover:bg-pinkHover hover:shadow-buttonHover p-1 max-w-fit">
                <a href="{{ $song->link }} "
                    class="font-inter font-medium px-3 py-2 text-black focus:outline-none uppercase" target="_blank" >
                    ÉCOUTER LA MUSIQUE
                </a>
            </button>

            <button
                class="bg-pink rounded-full border border-black transition shadow-button hover:bg-pinkHover hover:shadow-buttonHover p-1 max-w-fit">
                <a href="{{ $song->tabs }}"
                    class="font-inter font-medium px-3 py-2 text-black focus:outline-none uppercase"  target="_blank">
                    Revoir la tablature/partition
                </a>
            </button>
        </div>

    </div>

    <button
    class="bg-beige rounded-full border border-black transition shadow-button hover:bg-beige hover:shadow-buttonHover ml-8 p-1 max-w-fit">
    <a href="{{ route('songs.edit', $song) }}"
        class="font-inter font-medium px-3 py-2 text-black focus:outline-none uppercase">
        MODIFIER LES INFORMATIONS DE LA MUSIQUE    </a>
</button>



</x-app-layout>
