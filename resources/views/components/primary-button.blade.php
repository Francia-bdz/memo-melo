<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button button-green']) }}>
    {{ $slot }}
</button>
