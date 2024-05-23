<x-guest-layout>
    <div class="authPage">
        <p>
        {{ __("Il s'agit d'une zone sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.") }}
        </p>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Mot de passe')" />
                
                <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />
                
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <div>
                    <x-primary-button>
                        {{ __('CONFIRMER') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
</x-guest-layout>
