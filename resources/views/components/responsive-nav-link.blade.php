@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-black-400 text-start text-base font-medium text-black-700 bg-black-50 focus:outline-none focus:text-black-800 focus:bg-black-100 focus:border-black-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-green hover:bg-beige hover:border-green focus:outline-none focus:text-green focus:bg-beige focus:border-green transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
