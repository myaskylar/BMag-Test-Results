@props(['active'])

@php
$classes = 'block w-full ps-3 pe-4 py-2 border-t border-white text-start text-base font-medium text-white hover:bg-navy  focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
