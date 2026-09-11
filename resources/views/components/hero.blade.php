{{-- Hero Section --}}
<section id="home" class="bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Left: copy --}}
            <div class="order-2 lg:order-1">
                {{-- Eyebrow --}}
                <div class="inline-flex items-center gap-2 bg-[#F3F4F5] border border-gray-200 rounded-full px-4 py-1.5 mb-6">
                    <span class="w-2 h-2 rounded-full bg-[#B9FF2C]" aria-hidden="true"></span>
                    <span class="text-xs font-bold tracking-widest uppercase text-[#65676D]">
                        Modern Imported &amp; Local Furniture
                    </span>
                </div>

                {{-- Headline --}}
                <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black uppercase leading-none tracking-tight text-[#111318] mb-6"
                    style="font-family: 'Bebas Neue', sans-serif;">
                    Furniture That Makes Your House
                    <span class="relative inline-block">
                        <span class="relative z-10">Feel Like</span>
                        <span class="absolute bottom-1 left-0 w-full h-3 bg-[#B9FF2C] -z-0 rounded" aria-hidden="true"></span>
                    </span>
                    <span class="text-[#B58A4A]">Home</span>
                </h1>

                {{-- Description --}}
                <p class="text-[#65676D] text-lg leading-relaxed mb-8 max-w-lg">
                    Discover comfortable and stylish furniture for your living room, dining room, bedroom, and storage needs.
                    Visit our shop in Sta. Cruz, Laguna or message us for inquiries and orders.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 mb-10">
                    <a href="#collections"
                       class="inline-flex items-center justify-center gap-2 bg-[#B9FF2C] text-[#111318] font-bold px-8 py-4 rounded-full hover:bg-[#a8ee1a] transition-all duration-200 shadow-md hover:shadow-lg focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B9FF2C] text-base">
                        Explore Furniture
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="https://m.me/luzonFurnitureStore"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 bg-[#111318] text-white font-bold px-8 py-4 rounded-full hover:bg-[#1e2230] transition-all duration-200 shadow-md hover:shadow-lg focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B9FF2C] text-base">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.145 2 11.243c0 2.908 1.438 5.504 3.688 7.21V22l3.37-1.853c.9.25 1.855.384 2.942.384 5.523 0 10-4.145 10-9.288C22 6.145 17.523 2 12 2zm1.023 12.508l-2.55-2.716-4.978 2.716 5.476-5.81 2.613 2.716 4.916-2.716-5.477 5.81z"/>
                        </svg>
                        Message Us
                    </a>
                </div>

                {{-- Trust badges --}}
                <div class="flex flex-wrap gap-6 text-sm text-[#65676D]">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#B9FF2C]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Local &amp; Imported</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#B9FF2C]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Delivery Available</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#B9FF2C]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Card Payments Accepted</span>
                    </div>
                </div>
            </div>

            {{-- Right: hero image --}}
            <div class="order-1 lg:order-2 relative">
                {{-- Decorative background blob --}}
                <div class="absolute inset-0 bg-gradient-to-br from-[#F3F4F5] to-[#e8e9ea] rounded-3xl -rotate-3 scale-105" aria-hidden="true"></div>

                {{-- Main hero image --}}
                <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3]">
                    <img src="{{ asset('images/luzon-furniture/sectional-sofa.jpg') }}"
                         alt="Curved sectional sofa — comfortable and stylish seating for your living room, PHP 42,000"
                         class="w-full h-full object-cover object-center"
                         loading="eager"
                         width="800"
                         height="600">
                    {{-- Price tag overlay --}}
                    <div class="absolute top-4 right-4 bg-[#B9FF2C] text-[#111318] font-bold text-sm px-4 py-2 rounded-full shadow-lg">
                        From PHP 1,410
                    </div>
                </div>

                {{-- Floating stat cards --}}
                <div class="absolute -bottom-5 -left-4 bg-white rounded-2xl shadow-xl px-5 py-3 flex items-center gap-3 hidden sm:flex">
                    <div class="w-10 h-10 bg-[#B9FF2C] rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-[#111318]" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-[#65676D] leading-none">Delivery</p>
                        <p class="text-sm font-bold text-[#111318] leading-tight">Sta. Cruz, Laguna</p>
                    </div>
                </div>

                <div class="absolute -top-4 -right-4 bg-[#111318] text-white rounded-2xl shadow-xl px-5 py-3 hidden sm:block">
                    <p class="text-xs text-gray-400 leading-none">Quality</p>
                    <p class="text-sm font-bold leading-tight">Comfort. Style.</p>
                </div>
            </div>
        </div>
    </div>
</section>
