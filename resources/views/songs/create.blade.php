<x-app-layout>
    <h1>Ajouter un titre</h1>

    <form method="POST" action="{{ route('songs.store') }}" enctype="multipart/form-data">
	
		@csrf
		

        <div>
            <x-input-label for="title" :value="__('Titre de la musique')" />
            <x-text-input id="title" class="block mt-1" type="text" name="title" required autofocus/>
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="artist" :value="__('Artiste(s)')" />
            <x-text-input id="artist" class="block mt-1" type="text" name="artist" required autofocus/>
            <x-input-error :messages="$errors->get('artist')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="tabs" :value="__('Lien vers la partition/tablature')" />
            <x-text-input id="tabs" class="block mt-1" type="text" name="tabs"  />
            <x-input-error :messages="$errors->get('tabs')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="link" :value="__('Lien vers la musique')" />
            <x-text-input id="link" class="block mt-1" type="text" name="link"/>
            <x-input-error :messages="$errors->get('link')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="chordsKnowledge" :value="__('Accords')" />
            <x-text-input id="chordsKnowledge" class="block mt-1" type="text" name="chordsKnowledge" required  />
            <x-input-error :messages="$errors->get('chordsKnowledge')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="rythmKnowledge" :value="__('Rythme')" />
            <x-text-input id="rythmKnowledge" class="block mt-1" type="text" name="rythmKnowledge" required  />
            <x-input-error :messages="$errors->get('rythmKnowledge')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="globalKnowledge" :value="__('Niveau global')" />
            <x-text-input id="globalKnowledge" class="block mt-1" type="text" name="globalKnowledge" required  />
            <x-input-error :messages="$errors->get('globalKnowledge')" class="mt-2" />
        </div>
		
		<input type="submit" name="valider" value="Valider" class=" bg-green rounded-full border border-black transition shadow-button hover:bg-greenHover hover:shadow-buttonHover p-1">

	</form>

</x-app-layout>
