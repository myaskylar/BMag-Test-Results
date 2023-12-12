@props(['active'])

@php
$classes = 'inline-flex text-white items-center px-4 pt-1 text-base font-medium leading-5 hover:bg-navy transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
