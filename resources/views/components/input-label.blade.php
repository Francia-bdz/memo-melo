@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-inter font-medium text-lg text-black']) }}>
    {{ $value ?? $slot }}
</label>
