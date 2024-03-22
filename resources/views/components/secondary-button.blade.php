<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 font-semibold text-sm text-beige uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-pink focus:ring-offset-2 bg-pink rounded-full border border-black shadow-button hover:bg-pinkHover hover:shadow-buttonHover transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
