@props([
    'href'    => '#',
    'variant' => 'primary',   // primary | secondary | outline
    'size'    => 'md',        // sm | md | lg
    'target'  => '_self',
])

@php
$base = 'inline-flex items-center justify-center font-semibold rounded-full transition-all duration-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B9FF2C] no-underline';

$variants = [
    'primary'   => 'bg-[#B9FF2C] text-[#111318] hover:bg-[#a8ee1a] shadow-md hover:shadow-lg',
    'secondary' => 'bg-[#111318] text-white hover:bg-[#1e2230] shadow-md hover:shadow-lg',
    'outline'   => 'border-2 border-[#111318] text-[#111318] hover:bg-[#111318] hover:text-white',
];

$sizes = [
    'sm' => 'px-4 py-2 text-sm',
    'md' => 'px-6 py-3 text-base',
    'lg' => 'px-8 py-4 text-lg',
];

$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
