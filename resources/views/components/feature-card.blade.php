@props([
    'icon'        => '',   // SVG path data (stroke, viewBox 0 0 24 24)
    'title'       => '',
    'description' => '',
    'accent'      => false,
])

<div {{ $attributes->merge(['class' => 'group relative bg-white rounded-3xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col gap-4 border border-gray-100 hover:border-[#B9FF2C]/40 hover:-translate-y-1']) }}>

    {{-- Icon badge --}}
    <div class="w-12 h-12 rounded-2xl flex items-center justify-center shrink-0 transition-colors duration-300
                {{ $accent ? 'bg-[#B9FF2C] text-[#111318]' : 'bg-[#F3F4F5] text-[#111318] group-hover:bg-[#B9FF2C]' }}">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true">
            {!! $icon !!}
        </svg>
    </div>

    {{-- Content --}}
    <div>
        <h3 class="text-lg font-bold text-[#111318] mb-1 leading-tight">{{ $title }}</h3>
        <p class="text-[#65676D] text-sm leading-relaxed">{{ $description }}</p>
    </div>
</div>
