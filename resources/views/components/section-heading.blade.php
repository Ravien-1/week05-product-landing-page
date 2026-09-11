@props([
    'eyebrow'  => '',
    'title'    => '',
    'subtitle' => '',
    'center'   => false,
])

<div class="{{ $center ? 'text-center' : '' }} mb-12">
    @if($eyebrow)
        <span class="inline-block bg-[#B9FF2C] text-[#111318] text-xs font-bold tracking-widest uppercase px-3 py-1 rounded-full mb-4">
            {{ $eyebrow }}
        </span>
    @endif

    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase leading-none tracking-tight text-[#111318]"
        style="font-family: 'Bebas Neue', sans-serif;">
        {{ $title }}
    </h2>

    @if($subtitle)
        <p class="mt-4 text-[#65676D] text-lg max-w-2xl {{ $center ? 'mx-auto' : '' }} leading-relaxed">
            {{ $subtitle }}
        </p>
    @endif
</div>
