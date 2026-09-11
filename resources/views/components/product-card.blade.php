@props([
    'image'       => '',
    'alt'         => '',
    'name'        => '',
    'price'       => '',
    'category'    => '',
    'featured'    => false,
])

<article {{ $attributes->merge(['class' => 'group relative bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col hover:-translate-y-1 border border-gray-100']) }}>

    {{-- Image --}}
    <div class="relative overflow-hidden aspect-[4/3] bg-[#F3F4F5]">
        <img src="{{ asset('images/luzon-furniture/' . $image) }}"
             alt="{{ $alt }}"
             class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105"
             loading="lazy"
             width="400"
             height="300">

        {{-- Category pill --}}
        @if($category)
        <div class="absolute top-3 left-3">
            <span class="bg-white/90 backdrop-blur-sm text-[#111318] text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                {{ $category }}
            </span>
        </div>
        @endif

        {{-- Featured badge --}}
        @if($featured)
        <div class="absolute top-3 right-3">
            <span class="bg-[#B9FF2C] text-[#111318] text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                Featured
            </span>
        </div>
        @endif
    </div>

    {{-- Info --}}
    <div class="p-5 flex flex-col gap-3 flex-1">
        <div class="flex-1">
            <h3 class="text-base font-bold text-[#111318] leading-tight mb-1">{{ $name }}</h3>
            <p class="text-xl font-black text-[#111318]">{{ $price }}</p>
            <p class="text-xs text-[#65676D] mt-0.5 italic">Subject to availability</p>
        </div>

        <a href="#contact"
           class="mt-auto inline-flex items-center justify-center gap-1.5 w-full bg-[#F3F4F5] text-[#111318] text-sm font-semibold px-4 py-2.5 rounded-full hover:bg-[#B9FF2C] transition-colors duration-200 focus-visible:outline-2 focus-visible:outline-[#B9FF2C]">
            Inquire Now
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
            </svg>
        </a>
    </div>
</article>
