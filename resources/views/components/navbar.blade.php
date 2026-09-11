{{-- Responsive navbar with mobile menu --}}
<header class="fixed top-0 inset-x-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100 shadow-sm">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Main navigation">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- Logo --}}
            <a href="#home" class="flex items-center gap-2 shrink-0 focus-visible:outline-2 focus-visible:outline-[#B9FF2C] rounded-lg">
                <div class="flex items-center gap-1">
                    <span class="text-2xl font-black uppercase tracking-tight text-[#111318]"
                          style="font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.05em;">
                        Luzon
                    </span>
                    <span class="w-2 h-2 rounded-full bg-[#B9FF2C] inline-block mb-1"></span>
                    <span class="text-2xl font-black uppercase tracking-tight text-[#B58A4A]"
                          style="font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.05em;">
                        Furniture
                    </span>
                </div>
            </a>

            {{-- Desktop nav links --}}
            <ul class="hidden lg:flex items-center gap-8" role="list">
                @foreach([
                    ['href' => '#home',         'label' => 'Home'],
                    ['href' => '#collections',  'label' => 'Collections'],
                    ['href' => '#benefits',     'label' => 'Benefits'],
                    ['href' => '#packages',     'label' => 'Packages'],
                    ['href' => '#reviews',      'label' => 'Reviews'],
                    ['href' => '#contact',      'label' => 'Contact'],
                ] as $link)
                <li>
                    <a href="{{ $link['href'] }}"
                       class="text-sm font-medium text-[#65676D] hover:text-[#111318] transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-[#B9FF2C] rounded py-1">
                        {{ $link['label'] }}
                    </a>
                </li>
                @endforeach
            </ul>

            {{-- Desktop CTA --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="#contact"
                   class="text-sm font-semibold text-[#111318] hover:text-[#B58A4A] transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-[#B9FF2C] rounded px-2 py-1">
                    Sign In
                </a>
                <a href="#collections"
                   class="inline-flex items-center gap-2 bg-[#B9FF2C] text-[#111318] text-sm font-bold px-5 py-2.5 rounded-full hover:bg-[#a8ee1a] transition-all duration-200 shadow-sm hover:shadow focus-visible:outline-2 focus-visible:outline-[#B9FF2C]">
                    Browse Furniture
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            {{-- Mobile menu button --}}
            <button id="mobile-menu-btn"
                    type="button"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                    aria-label="Open navigation menu"
                    class="lg:hidden flex items-center justify-center w-10 h-10 rounded-xl text-[#111318] hover:bg-gray-100 transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-[#B9FF2C]">
                <svg id="menu-icon-open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu"
             class="lg:hidden hidden border-t border-gray-100"
             role="navigation"
             aria-label="Mobile navigation">
            <ul class="py-4 space-y-1" role="list">
                @foreach([
                    ['href' => '#home',         'label' => 'Home'],
                    ['href' => '#collections',  'label' => 'Collections'],
                    ['href' => '#benefits',     'label' => 'Benefits'],
                    ['href' => '#packages',     'label' => 'Packages'],
                    ['href' => '#reviews',      'label' => 'Reviews'],
                    ['href' => '#contact',      'label' => 'Contact'],
                ] as $link)
                <li>
                    <a href="{{ $link['href'] }}"
                       class="mobile-nav-link block px-3 py-2.5 text-base font-medium text-[#111318] hover:bg-[#F3F4F5] rounded-xl transition-colors duration-150">
                        {{ $link['label'] }}
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="pb-4 pt-2 border-t border-gray-100 flex flex-col gap-3 px-3">
                <a href="#contact"
                   class="text-center text-sm font-semibold text-[#111318] border border-gray-200 rounded-full px-5 py-2.5 hover:bg-gray-50 transition-colors duration-150">
                    Sign In
                </a>
                <a href="#collections"
                   class="text-center bg-[#B9FF2C] text-[#111318] text-sm font-bold px-5 py-2.5 rounded-full hover:bg-[#a8ee1a] transition-colors duration-150">
                    Browse Furniture
                </a>
            </div>
        </div>
    </nav>
</header>

{{-- Spacer to offset fixed header --}}
<div class="h-16 lg:h-18" aria-hidden="true"></div>
