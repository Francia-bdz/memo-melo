<x-app-layout>

    <h1 >AJOUTER UN TITRE</h1>
    <h3 class="text-lg text-beige text-center mt-2">Une nouvelle corde à ma guitare ...</h3>

    <div class="bg-beige m-8 p-12 rounded-xl border border-black">

        <form method="POST" action="{{ route('songs.store') }}" enctype="multipart/form-data">

            @csrf

            <p class="font-inter font-bold text-lg text-green">INFORMATION SUR LA MUSIQUE</p>

            <div class="flex my-8 justify-between">
                <div class="flex flex-col gap-5">

                    <div>
                        <x-input-label for="title" :value="__('Titre de la musique')" />
                        <x-text-input id="title" class="block mt-1 min-w-96" type="text" name="title" required
                            autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="artist" :value="__('Artiste(s)')" />
                        <x-text-input id="artist" class="block mt-1 md:min-w-96" type="text" name="artist" required
                            autofocus />
                        <x-input-error :messages="$errors->get('artist')" class="mt-2" />
                    </div>
                </div>

                <div class="flex flex-col gap-5">

                    <div>
                        <x-input-label for="tabs" :value="__('Lien vers la partition/tablature')" />
                        <x-text-input id="tabs" class="block mt-1 min-w-96" type="text" name="tabs" />
                        <x-input-error :messages="$errors->get('tabs')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="link" :value="__('Lien vers la musique')" />
                        <x-text-input id="link" class="block mt-1 min-w-96" type="text" name="link" />
                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
                    </div>
                </div>
            </div>

            <p class="font-inter font-bold text-lg text-green my-2">NIVEAU DE CONNAISSANCE</p>

            <div class="flex mt-8 justify-between">


                <div x-data="{ chordsKnowledge: 0 }" id="chordsKnowledge" class="flex gap-1">
                    
                    <x-input-label for="chordsKnowledge" :value="__('Accords')" class="mr-3" />
                    @foreach (range(1, 5) as $index)
                    <svg @click="chordsKnowledge = (chordsKnowledge === 1 && {{ $index }} === 1) ? 0 : {{ $index }}"
                    width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                :class="{
                                    'fill-pink': chordsKnowledge >= {{ $index }},
                                    'fill-black/25': chordsKnowledge <
                                        {{ $index }}
                                }"
                                d="M25.4248 17.5084V1.60828C25.4248 1.38325 25.3275 1.16928 25.1578 1.02148C24.9882 0.873667 24.7629 0.806745 24.54 0.837345L9.63299 2.89926C9.2481 2.95252 8.96133 3.28156 8.96133 3.6702V16.6799C8.54774 16.3889 8.06448 16.1646 7.52239 16.0195C6.29643 15.6914 4.90709 15.8067 3.61039 16.3438C2.31369 16.8809 1.24988 17.7818 0.614846 18.8807C-0.0588768 20.0464 -0.178451 21.2956 0.278099 22.3979C0.734649 23.5003 1.70254 24.299 3.00336 24.6469C3.46113 24.7694 3.94157 24.8301 4.43162 24.8301C5.25383 24.8301 6.10291 24.6592 6.91544 24.3226C8.21214 23.7855 9.27595 22.8845 9.91098 21.7857C10.3371 21.0484 10.5408 20.2779 10.518 19.5321V7.88904L23.8684 6.04246V14.6555C23.4548 14.3645 22.9715 14.1401 22.4294 13.9951C21.2034 13.6671 19.8141 13.7823 18.5174 14.3194C17.2207 14.8565 16.1569 15.7575 15.5218 16.8563C14.8481 18.022 14.7285 19.2712 15.1851 20.3735C15.6416 21.4759 16.6095 22.2746 17.9103 22.6226C18.3681 22.745 18.8486 22.8057 19.3386 22.8057C20.1608 22.8057 21.0099 22.6348 21.8224 22.2982C23.1191 21.7611 24.1829 20.8602 24.818 19.7613C25.2436 19.0243 25.4474 18.2539 25.4248 17.5084ZM8.56316 21.0069C8.09852 21.811 7.30171 22.4777 6.31963 22.8845C5.67772 23.1505 5.02422 23.2768 4.41506 23.2767C3.16834 23.2766 2.10758 22.7473 1.71612 21.8023C1.44904 21.1575 1.53649 20.3965 1.96244 19.6596C2.42708 18.8556 3.22389 18.1889 4.20597 17.782C4.84788 17.516 5.50138 17.3898 6.11054 17.3898C7.35726 17.3898 8.41802 17.9193 8.80948 18.8642C9.07656 19.509 8.98911 20.2699 8.56316 21.0069ZM23.4701 18.9825C23.0055 19.7866 22.2087 20.4533 21.2266 20.8602C19.2711 21.6702 17.2059 21.1847 16.6232 19.778C16.3561 19.1332 16.4436 18.3721 16.8695 17.6352C17.3341 16.8311 18.131 16.1644 19.113 15.7575C21.0687 14.9475 23.1338 15.433 23.7165 16.8397C23.9835 17.4845 23.896 18.2455 23.4701 18.9825ZM23.8682 4.47113L10.5179 6.31778V4.34827L23.8682 2.50162V4.47113Z"
                                fill="#F79C99" />
                            </svg>
                    @endforeach
                    <input type="hidden" name="chordsKnowledge" x-model="chordsKnowledge">
                    <p class="italic text-black/60 ml-2" x-text="(chordsKnowledge === 0 ? 'Inconnu' : (chordsKnowledge === 1 ? 'Débutant' : (chordsKnowledge === 2 ? 'Intermédiaire' : (chordsKnowledge === 3 ? 'Avancé' : (chordsKnowledge === 4 ? 'Presque maîtrisé' : 'Maîtrisé')))))"></p>
                </div>


                <div x-data="{ rythmKnowledge: 0 }" id="rythmKnowledge" class="flex gap-1">
                    <x-input-label for="rythmKnowledge" :value="__('Rythme')" class="mr-3" />
                    @foreach (range(1, 5) as $index)
                        <svg @click="rythmKnowledge = (rythmKnowledge === 1 && {{ $index }} === 1) ? 0 : {{ $index }}"
                            width="26" height="25" viewBox="0 0 26 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                :class="{
                                    'fill-pink': rythmKnowledge >= {{ $index }},
                                    'fill-black/25': rythmKnowledge <
                                        {{ $index }}
                                }"
                                d="M25.4248 17.5084V1.60828C25.4248 1.38325 25.3275 1.16928 25.1578 1.02148C24.9882 0.873667 24.7629 0.806745 24.54 0.837345L9.63299 2.89926C9.2481 2.95252 8.96133 3.28156 8.96133 3.6702V16.6799C8.54774 16.3889 8.06448 16.1646 7.52239 16.0195C6.29643 15.6914 4.90709 15.8067 3.61039 16.3438C2.31369 16.8809 1.24988 17.7818 0.614846 18.8807C-0.0588768 20.0464 -0.178451 21.2956 0.278099 22.3979C0.734649 23.5003 1.70254 24.299 3.00336 24.6469C3.46113 24.7694 3.94157 24.8301 4.43162 24.8301C5.25383 24.8301 6.10291 24.6592 6.91544 24.3226C8.21214 23.7855 9.27595 22.8845 9.91098 21.7857C10.3371 21.0484 10.5408 20.2779 10.518 19.5321V7.88904L23.8684 6.04246V14.6555C23.4548 14.3645 22.9715 14.1401 22.4294 13.9951C21.2034 13.6671 19.8141 13.7823 18.5174 14.3194C17.2207 14.8565 16.1569 15.7575 15.5218 16.8563C14.8481 18.022 14.7285 19.2712 15.1851 20.3735C15.6416 21.4759 16.6095 22.2746 17.9103 22.6226C18.3681 22.745 18.8486 22.8057 19.3386 22.8057C20.1608 22.8057 21.0099 22.6348 21.8224 22.2982C23.1191 21.7611 24.1829 20.8602 24.818 19.7613C25.2436 19.0243 25.4474 18.2539 25.4248 17.5084ZM8.56316 21.0069C8.09852 21.811 7.30171 22.4777 6.31963 22.8845C5.67772 23.1505 5.02422 23.2768 4.41506 23.2767C3.16834 23.2766 2.10758 22.7473 1.71612 21.8023C1.44904 21.1575 1.53649 20.3965 1.96244 19.6596C2.42708 18.8556 3.22389 18.1889 4.20597 17.782C4.84788 17.516 5.50138 17.3898 6.11054 17.3898C7.35726 17.3898 8.41802 17.9193 8.80948 18.8642C9.07656 19.509 8.98911 20.2699 8.56316 21.0069ZM23.4701 18.9825C23.0055 19.7866 22.2087 20.4533 21.2266 20.8602C19.2711 21.6702 17.2059 21.1847 16.6232 19.778C16.3561 19.1332 16.4436 18.3721 16.8695 17.6352C17.3341 16.8311 18.131 16.1644 19.113 15.7575C21.0687 14.9475 23.1338 15.433 23.7165 16.8397C23.9835 17.4845 23.896 18.2455 23.4701 18.9825ZM23.8682 4.47113L10.5179 6.31778V4.34827L23.8682 2.50162V4.47113Z"
                                fill="#F79C99" />
                        </svg>
                    @endforeach
                    <p class="italic text-black/60 ml-2" x-text="(rythmKnowledge === 0 ? 'Inconnu' : (rythmKnowledge === 1 ? 'Débutant' : (rythmKnowledge === 2 ? 'Intermédiaire' : (rythmKnowledge === 3 ? 'Avancé' : (rythmKnowledge === 4 ? 'Presque maîtrisé' : 'Maîtrisé')))))"></p>
                    <input type="hidden" name="rythmKnowledge" x-model="rythmKnowledge">
                </div>

                
                <div x-data="{ globalKnowledge: 0 }" id="globalKnowledge" class="flex gap-1">
                    <x-input-label for="globalKnowledge" :value="__('Niveau global')" class="mr-3" />
                    @foreach (range(1, 5) as $index)
                        <svg @click="globalKnowledge = (globalKnowledge === 1 && {{ $index }} === 1) ? 0 : {{ $index }}"
                            width="26" height="25" viewBox="0 0 26 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                :class="{
                                    'fill-pink': globalKnowledge >= {{ $index }},
                                    'fill-black/25': globalKnowledge <
                                        {{ $index }}
                                }"
                                d="M25.4248 17.5084V1.60828C25.4248 1.38325 25.3275 1.16928 25.1578 1.02148C24.9882 0.873667 24.7629 0.806745 24.54 0.837345L9.63299 2.89926C9.2481 2.95252 8.96133 3.28156 8.96133 3.6702V16.6799C8.54774 16.3889 8.06448 16.1646 7.52239 16.0195C6.29643 15.6914 4.90709 15.8067 3.61039 16.3438C2.31369 16.8809 1.24988 17.7818 0.614846 18.8807C-0.0588768 20.0464 -0.178451 21.2956 0.278099 22.3979C0.734649 23.5003 1.70254 24.299 3.00336 24.6469C3.46113 24.7694 3.94157 24.8301 4.43162 24.8301C5.25383 24.8301 6.10291 24.6592 6.91544 24.3226C8.21214 23.7855 9.27595 22.8845 9.91098 21.7857C10.3371 21.0484 10.5408 20.2779 10.518 19.5321V7.88904L23.8684 6.04246V14.6555C23.4548 14.3645 22.9715 14.1401 22.4294 13.9951C21.2034 13.6671 19.8141 13.7823 18.5174 14.3194C17.2207 14.8565 16.1569 15.7575 15.5218 16.8563C14.8481 18.022 14.7285 19.2712 15.1851 20.3735C15.6416 21.4759 16.6095 22.2746 17.9103 22.6226C18.3681 22.745 18.8486 22.8057 19.3386 22.8057C20.1608 22.8057 21.0099 22.6348 21.8224 22.2982C23.1191 21.7611 24.1829 20.8602 24.818 19.7613C25.2436 19.0243 25.4474 18.2539 25.4248 17.5084ZM8.56316 21.0069C8.09852 21.811 7.30171 22.4777 6.31963 22.8845C5.67772 23.1505 5.02422 23.2768 4.41506 23.2767C3.16834 23.2766 2.10758 22.7473 1.71612 21.8023C1.44904 21.1575 1.53649 20.3965 1.96244 19.6596C2.42708 18.8556 3.22389 18.1889 4.20597 17.782C4.84788 17.516 5.50138 17.3898 6.11054 17.3898C7.35726 17.3898 8.41802 17.9193 8.80948 18.8642C9.07656 19.509 8.98911 20.2699 8.56316 21.0069ZM23.4701 18.9825C23.0055 19.7866 22.2087 20.4533 21.2266 20.8602C19.2711 21.6702 17.2059 21.1847 16.6232 19.778C16.3561 19.1332 16.4436 18.3721 16.8695 17.6352C17.3341 16.8311 18.131 16.1644 19.113 15.7575C21.0687 14.9475 23.1338 15.433 23.7165 16.8397C23.9835 17.4845 23.896 18.2455 23.4701 18.9825ZM23.8682 4.47113L10.5179 6.31778V4.34827L23.8682 2.50162V4.47113Z"
                                fill="#F79C99" />
                        </svg>
                    @endforeach
                    <p class="italic text-black/60 ml-2" x-text="(globalKnowledge === 0 ? 'Inconnu' : (globalKnowledge === 1 ? 'Débutant' : (globalKnowledge === 2 ? 'Intermédiaire' : (globalKnowledge === 3 ? 'Avancé' : (globalKnowledge === 4 ? 'Presque maîtrisé' : 'Maîtrisé')))))"></p>
                    <input type="hidden" name="globalKnowledge" x-model="globalKnowledge">
                </div>
            </div>

    </div>

    <input type="submit" name="valider" value="AJOUTER"
        class=" bg-beige rounded-full border border-black transition shadow-button hover:bg-beige hover:shadow-buttonHover py-2 px-4 ml-8 mb-6">
    </form>



</x-app-layout>
