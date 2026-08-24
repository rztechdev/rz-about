@props([
    'variant' => 'light',
    'size' => 'md',
    'showTagline' => true
])

@php
    $imgHeight = match($size) {
        'sm' => 'h-9 sm:h-10',
        'lg' => 'h-14 sm:h-16',
        default => 'h-11 sm:h-12',
    };
@endphp

<div class="inline-flex items-center select-none group">
    <img 
        src="{{ asset('images/logo_rz_teks.png') }}"
        alt="RZ Digital Creative"
        class="{{ $imgHeight }} w-auto object-contain brightness-0 dark:brightness-100 group-hover:scale-105 transition-transform duration-300"
    />
</div>
