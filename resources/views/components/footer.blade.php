{{-- Footer --}}
<footer id="contact" class="bg-[#111318] text-white" role="contentinfo">

    {{-- Main footer content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

            {{-- Brand column --}}
            <div class="lg:col-span-2">
                {{-- Text logo --}}
                <div class="flex items-center gap-1 mb-4">
                    <span class="text-3xl font-black uppercase tracking-tight text-white"
                          style="font-family: 'Bebas Neue', sans-serif;">Luzon</span>
                    <span class="w-2.5 h-2.5 rounded-full bg-[#B9FF2C] inline-block mb-1" aria-hidden="true"></span>
                    <span class="text-3xl font-black uppercase tracking-tight text-[#B58A4A]"
                          style="font-family: 'Bebas Neue', sans-serif;">Furniture</span>
                </div>

                <p class="text-gray-400 text-sm leading-relaxed max-w-sm mb-6">
                    Dealer of modern imported and local furniture. Quality, Comfort, Style — serving families in Sta. Cruz, Laguna and nearby areas.
                </p>

                {{-- Contact details --}}
                <ul class="space-y-3 text-sm" role="list">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-[#B9FF2C] mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                        <address class="not-italic text-gray-400 leading-relaxed">
                            71 A. Regidor Street, Sta. Cruz, Laguna 4009
                        </address>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#B9FF2C] shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        <a href="tel:+639568144175"
                           class="text-gray-400 hover:text-[#B9FF2C] transition-colors duration-150">
                            0956 814 4175
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#B9FF2C] shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <a href="https://www.facebook.com/luzonFurnitureStore"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="text-gray-400 hover:text-[#B9FF2C] transition-colors duration-150">
                            Luzon Furniture Store
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Quick links --}}
            <div>
                <h3 class="text-sm font-bold uppercase tracking-widest text-white mb-5">Quick Links</h3>
                <ul class="space-y-3" role="list">
                    @foreach([
                        ['href' => '#home',        'label' => 'Home'],
                        ['href' => '#collections', 'label' => 'Collections'],
                        ['href' => '#benefits',    'label' => 'Benefits'],
                        ['href' => '#packages',    'label' => 'Packages'],
                        ['href' => '#reviews',     'label' => 'Reviews'],
                        ['href' => '#contact',     'label' => 'Contact'],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}"
                           class="text-sm text-gray-400 hover:text-[#B9FF2C] transition-colors duration-150 focus-visible:outline-1 focus-visible:outline-[#B9FF2C] rounded">
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Hours & info --}}
            <div>
                <h3 class="text-sm font-bold uppercase tracking-widest text-white mb-5">Store Info</h3>
                <ul class="space-y-3 text-sm text-gray-400" role="list">
                    <li>
                        <span class="block text-white font-semibold text-xs uppercase tracking-wide mb-1">Owner</span>
                        Mark Anthony Tan
                    </li>
                    <li>
                        <span class="block text-white font-semibold text-xs uppercase tracking-wide mb-1">Payment</span>
                        Credit cards accepted
                    </li>
                    <li>
                        <span class="block text-white font-semibold text-xs uppercase tracking-wide mb-1">Delivery</span>
                        Available — message for details
                    </li>
                    <li>
                        <span class="block text-white font-semibold text-xs uppercase tracking-wide mb-1">Orders</span>
                        Via Facebook Messenger
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-gray-500">
                &copy; {{ date('Y') }} Luzon Furniture Store. All rights reserved. 71 A. Regidor St., Sta. Cruz, Laguna 4009.
            </p>
            <p class="text-xs text-gray-600">
                Built with Laravel &amp; Tailwind CSS
            </p>
        </div>
    </div>
</footer>
