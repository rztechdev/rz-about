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
        src="{{ asset('images/logo_rz_teks.jpeg') }}" 
        alt="RZ Digital Creative" 
        class="{{ $imgHeight }} w-auto rounded-xl object-contain shadow-md shadow-black/10 group-hover:scale-105 transition-transform duration-300 border border-[#8B9B70]/40"
    />
</div>
