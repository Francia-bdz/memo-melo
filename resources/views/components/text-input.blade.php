@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-beige border-black focus:border-green focus:ring-greenHover rounded-full']) !!}>
