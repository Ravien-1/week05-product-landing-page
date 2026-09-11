@props([
    'name'       => '',
    'priceLabel' => 'Request a Quote',
    'description'=> '',
    'features'   => [],
    'buttonText' => 'Request a Quote',
    'featured'   => false,
])

<article {{ $attributes->merge(['class' => 'relative flex flex-col rounded-3xl overflow-hidden transition-all duration-300 ' . ($featured ? 'bg-[#111318] text-white shadow-2xl scale-105 ring-4 ring-[#B9FF2C]' : 'bg-white text-[#111318] shadow-sm hover:shadow-lg border border-gray-100 hover:-translate-y-1')]) }}>

    @if($featured)
    {{-- Popular badge --}}
    <div class="absolute top-0 inset-x-0 flex justify-center">
        <span class="bg-[#B9FF2C] text-[#111318] text-xs font-bold tracking-widest uppercase px-6 py-1 rounded-b-full shadow">
            Most Popular
        </span>
    </div>
    @endif

    <div class="p-8 pt-10 flex flex-col gap-6 flex-1">

        {{-- Header --}}
        <div>
            <p class="text-xs font-bold tracking-widest uppercase mb-2 {{ $featured ? 'text-[#B9FF2C]' : 'text-[#65676D]' }}">
                {{ $name }}
            </p>
            <p class="text-4xl font-black leading-none mb-2 {{ $featured ? 'text-white' : 'text-[#111318]' }}"
               style="font-family: 'Bebas Neue', sans-serif;">
                {{ $priceLabel }}
            </p>
            @if($description)
            <p class="text-sm leading-relaxed {{ $featured ? 'text-gray-400' : 'text-[#65676D]' }}">
                {{ $description }}
            </p>
            @endif
        </div>

        {{-- Divider --}}
        <hr class="{{ $featured ? 'border-white/20' : 'border-gray-100' }}">

        {{-- Feature list --}}
        <ul class="flex flex-col gap-3 flex-1" role="list">
            @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm {{ $featured ? 'text-gray-300' : 'text-[#65676D]' }}">
                <svg class="w-4 h-4 shrink-0 mt-0.5 {{ $featured ? 'text-[#B9FF2C]' : 'text-[#111318]' }}"
                     fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                {{ $feature }}
            </li>
            @endforeach
        </ul>

        {{-- CTA --}}
        <a href="#contact"
           class="mt-4 inline-flex items-center justify-center gap-2 w-full font-bold text-sm px-6 py-3.5 rounded-full transition-all duration-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B9FF2C]
                  {{ $featured
                     ? 'bg-[#B9FF2C] text-[#111318] hover:bg-[#a8ee1a] shadow-lg hover:shadow-xl'
                     : 'bg-[#F3F4F5] text-[#111318] hover:bg-[#B9FF2C] border border-gray-200 hover:border-[#B9FF2C]' }}">
            {{ $buttonText }}
        </a>
    </div>
</article>
