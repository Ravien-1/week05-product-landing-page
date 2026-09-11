@props([
    'quote'    => 'Customer review to be added. Genuine customer feedback will be displayed here once provided by the business owner.',
    'name'     => 'Customer Name (Placeholder)',
    'role'     => 'Verified Customer — To Be Updated',
    'initials' => '?',
])

<article {{ $attributes->merge(['class' => 'bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col gap-5 hover:shadow-md transition-shadow duration-300']) }}
         aria-label="Customer testimonial placeholder">

    {{-- Stars --}}
    <div class="flex gap-1" aria-label="5 out of 5 stars (sample rating)">
        @for($i = 0; $i < 5; $i++)
        <svg class="w-4 h-4 text-[#B58A4A]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
        </svg>
        @endfor
    </div>

    {{-- Placeholder notice --}}
    <div class="bg-amber-50 border border-amber-200 rounded-xl px-4 py-2">
        <p class="text-xs text-amber-700 font-medium">
            ⚠ Sample content — genuine customer review to be provided by the business owner before publishing.
        </p>
    </div>

    {{-- Quote --}}
    <blockquote class="text-[#65676D] text-sm leading-relaxed italic flex-1">
        "{{ $quote }}"
    </blockquote>

    {{-- Author --}}
    <div class="flex items-center gap-3 pt-2 border-t border-gray-100">
        <div class="w-10 h-10 rounded-full bg-[#F3F4F5] border-2 border-gray-200 flex items-center justify-center text-sm font-bold text-[#65676D] shrink-0"
             aria-hidden="true">
            {{ $initials }}
        </div>
        <div>
            <p class="text-sm font-bold text-[#111318] leading-tight">{{ $name }}</p>
            <p class="text-xs text-[#65676D]">{{ $role }}</p>
        </div>
    </div>
</article>
