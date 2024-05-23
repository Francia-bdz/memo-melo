<x-guest-layout>
    <div class="authPage">
        <form method="POST" action="{{ route('register') }}">
            @csrf


            <h2>S'INSCRIRE</h2>


            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Pseudo')" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                    autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="redirection-link">
                <p class="mr-1">Déja inscrit ?</p>
                <a href="{{ route('login') }}">
                    {{ __('Se connecter') }}
                </a>
            </div>

            <x-primary-button>
                {{ __('VALIDER') }}
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>
