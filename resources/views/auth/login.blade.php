<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2 class="font-black font-inter text-green text-2xl mb-4">SE CONNECTER</h2>
        
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-beige border focus:border-green" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="bg-white/[0.5] rounded border-black text-green focus:ring-green" name="remember">
                <span class="ms-2 text-gray-800">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>



        <div class="flex items-center my-4">
            @if (Route::has('password.request'))
                <a class="underline underline-offset-2 text-green hover:text-greenHover transition ease-in-out duration-150 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
            @endif

        </div>

        <div class="flex items-center mt-4">
            @if (Route::has('register'))
                <p class="mr-1">Pas encore inscrit ?</p>
                <a class="underline underline-offset-2 text-green hover:text-greenHover transition ease-in-out duration-150 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green" href="{{ route('register') }}">
                    {{ __('S’inscrire') }}
                </a>
            @endif

        </div>

        <x-primary-button class="mt-4">
            {{ __('Valider') }}
        </x-primary-button>
    </form>
</x-guest-layout>
