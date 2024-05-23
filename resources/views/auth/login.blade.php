<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="authPage">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h2>SE CONNECTER</h2>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span>{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>



            <div class="forget-link">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

            </div>

            <div class="redirection-link">
                @if (Route::has('register'))
                    <p class="">Pas encore inscrit ?</p>
                    <a href="{{ route('register') }}">
                        {{ __('S’inscrire') }}
                    </a>
                @endif

            </div>

            <x-primary-button>
                {{ __('VALIDER') }}
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>
