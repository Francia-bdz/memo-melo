<nav x-data="{ open: false }" class="bg-beige border lg:rounded-full  border-black mx-3 my-4 ">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 w-full ">
        <div class="flex justify-between w-full h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/songs') }}" class="font-alinsa text-green text-2xl ml-6 ">
                                        
                    MÉMO-MÉLO
                    </a>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md text-green hover:text-greenHover underline decoration-transparent	hover:decoration-green underline-offset-4 focus:outline-none transition ease-in-out duration-150	">
                            <div>Hello, {{ Auth::user()->name }}</div>
                            <svg class="fill-green ml-2" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 330 330" xml:space="preserve">
                       <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                           c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                           s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                       </svg>                        </button>
                    </x-slot>

            

                    <x-slot name="content" class=" bg-beige border ">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Mon profil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Se déconnecter') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            <div class="inline-flex items-center ">

            <button class="inline-flex items-center border border-transparent text-lg leading-4 font-medium rounded-md text-green hover:text-greenHover underline decoration-transparent hover:decoration-green underline-offset-2  focus:outline-none transition ease-in-out duration-150">
                <a href="{{ url('/songs') }}" > Mon répertoire </a>
            </button>
            <button class="inline-flex items-center ml-6 border border-transparent text-lg leading-4 font-medium rounded-md text-green hover:text-greenHover underline decoration-transparent hover:decoration-green underline-offset-2  focus:outline-none transition ease-in-out duration-150">
                <a href="{{ url('/songs/create') }}" > Ajouter des titres </a>
            </button>


            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-green hover:text-greenHover focus:outline-none  transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-black">
            <div class="px-4">
                <div class="font-medium text-base text-green">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-green/75">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Mon profil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Se déconnecter') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
