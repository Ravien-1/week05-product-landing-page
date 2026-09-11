<x-layouts.app>

    {{-- ============================================================
         NAVBAR
    ============================================================ --}}
    <x-navbar />

    <main id="main-content">

        {{-- ============================================================
             HERO
        ============================================================ --}}
        <x-hero />

        {{-- ============================================================
             FEATURES / BENEFITS
        ============================================================ --}}
        <section id="benefits" class="bg-[#F3F4F5] py-20 lg:py-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <x-section-heading
                    eyebrow="Why Choose Us"
                    title="Six Reasons to Shop at Luzon Furniture"
                    subtitle="From quality pieces to helpful service, here is what makes shopping with us a great experience."
                    :center="true"
                />

                @php
                $features = [
                    [
                        'title'       => 'Modern Selection',
                        'description' => 'Explore furniture designed for comfortable and updated homes across every room.',
                        'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>',
                        'accent'      => true,
                    ],
                    [
                        'title'       => 'Local and Imported',
                        'description' => 'Choose from both locally sourced and imported furniture options to suit your style and budget.',
                        'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>',
                        'accent'      => false,
                    ],
                    [
                        'title'       => 'Room by Room Choices',
                        'description' => 'Find pieces for living rooms, dining rooms, bedrooms, and storage — all in one place.',
                        'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>',
                        'accent'      => false,
                    ],
                    [
                        'title'       => 'Delivery with Care',
                        'description' => 'Ask the store about delivery arrangements for your selected items to your home in Laguna.',
                        'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>',
                        'accent'      => false,
                    ],
                    [
                        'title'       => 'Card Payments',
                        'description' => 'Convenient credit card payment is accepted — making it easy to bring your furniture home.',
                        'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/>',
                        'accent'      => false,
                    ],
                    [
                        'title'       => 'Helpful Assistance',
                        'description' => 'Message or call the shop for product inquiries, availability, pricing, and orders anytime.',
                        'icon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>',
                        'accent'      => false,
                    ],
                ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($features as $feature)
                        <x-feature-card
                            :title="$feature['title']"
                            :description="$feature['description']"
                            :icon="$feature['icon']"
                            :accent="$feature['accent']"
                        />
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============================================================
             PRODUCT SHOWCASE
        ============================================================ --}}
        <section id="collections" class="bg-white py-20 lg:py-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-12">
                    <x-section-heading
                        eyebrow="Featured Products"
                        title="Our Current Collection"
                        subtitle="Confirmed pieces available at Luzon Furniture. Prices subject to availability."
                    />
                    <a href="#contact"
                       class="shrink-0 inline-flex items-center gap-2 text-sm font-bold text-[#111318] border-2 border-[#111318] px-6 py-3 rounded-full hover:bg-[#111318] hover:text-white transition-all duration-200 focus-visible:outline-2 focus-visible:outline-[#B9FF2C] self-start lg:self-auto mb-12 lg:mb-0">
                        View All &amp; Inquire
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>

                @php
                $products = [
                    [
                        'image'    => 'sectional-sofa.jpg',
                        'alt'      => 'Curved sectional sofa in warm beige, spacious and comfortable with soft cushions — perfect for living rooms',
                        'name'     => 'Curved Sectional Sofa',
                        'price'    => 'PHP 42,000',
                        'category' => 'Living Room',
                        'featured' => true,
                    ],
                    [
                        'image'    => 'orange-l-sofa.jpg',
                        'alt'      => 'Orange L-shaped sofa with matching cushions — a bold, modern choice for any living room',
                        'name'     => 'Orange L-Shaped Sofa',
                        'price'    => 'PHP 13,995',
                        'category' => 'Living Room',
                        'featured' => false,
                    ],
                    [
                        'image'    => 'executive-chair.jpg',
                        'alt'      => 'Black executive office chair with ergonomic high back, thick cushioned seat, and chrome base',
                        'name'     => 'Executive Office Chair',
                        'price'    => 'PHP 7,999',
                        'category' => 'Office',
                        'featured' => false,
                    ],
                    [
                        'image'    => 'director-chair.jpg',
                        'alt'      => 'Black director-style folding chair with canvas seat and back, sturdy metal frame',
                        'name'     => 'Director-Style Chair',
                        'price'    => 'PHP 3,900',
                        'category' => 'Chairs',
                        'featured' => false,
                    ],
                    [
                        'image'    => 'vanity-mirror.jpg',
                        'alt'      => 'Vanity mirror with Hollywood-style light bulb sockets around a black frame — ideal for bedrooms',
                        'name'     => 'Vanity Mirror with Lights',
                        'price'    => 'PHP 1,410',
                        'category' => 'Bedroom',
                        'featured' => false,
                    ],
                ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($products as $product)
                        <x-product-card
                            :image="$product['image']"
                            :alt="$product['alt']"
                            :name="$product['name']"
                            :price="$product['price']"
                            :category="$product['category']"
                            :featured="$product['featured']"
                            @class(['lg:col-span-1' => true, 'sm:col-span-2 lg:col-span-1' => $loop->first])
                        />
                    @endforeach
                </div>

                {{-- Availability notice --}}
                <p class="mt-8 text-center text-sm text-[#65676D]">
                    Prices are subject to availability and may change. Contact the store to confirm current stock and pricing.
                </p>
            </div>
        </section>

        {{-- ============================================================
             PACKAGES / PRICING
        ============================================================ --}}
        <section id="packages" class="bg-[#F3F4F5] py-20 lg:py-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <x-section-heading
                    eyebrow="Furniture Packages"
                    title="Choose Your Shopping Path"
                    subtitle="Not sure where to start? These sample paths help guide your furniture journey. Contact us for a personalized quotation."
                    :center="true"
                />

                @php
                $packages = [
                    [
                        'name'        => 'Essential',
                        'priceLabel'  => 'Request a Quote',
                        'description' => 'A practical starter selection for one room. Ideal for a first apartment or single space refresh.',
                        'features'    => [
                            'Selection for one room',
                            'Mix of local and imported pieces',
                            'Delivery inquiry included',
                            'Flexible payment via credit card',
                            'Messenger-based assistance',
                        ],
                        'buttonText'  => 'Ask About Essential',
                        'featured'    => false,
                    ],
                    [
                        'name'        => 'Home Comfort',
                        'priceLabel'  => 'Request a Quote',
                        'description' => 'A coordinated selection for two or more spaces. Great for new homeowners furnishing multiple rooms.',
                        'features'    => [
                            'Selection for two or more rooms',
                            'Coordinated styles and finishes',
                            'Priority delivery arrangement',
                            'Credit card payment accepted',
                            'Dedicated order assistance',
                            'Product availability confirmation',
                        ],
                        'buttonText'  => 'Ask About Home Comfort',
                        'featured'    => true,
                    ],
                    [
                        'name'        => 'Complete Home',
                        'priceLabel'  => 'Custom Quotation',
                        'description' => 'A broader furniture plan tailored to your full home needs. Consultation required.',
                        'features'    => [
                            'Full-home furniture planning',
                            'Customized piece selection',
                            'Room-by-room coordination',
                            'Flexible staging and delivery',
                            'Direct consultation with owner',
                            'Ongoing order support',
                        ],
                        'buttonText'  => 'Request Consultation',
                        'featured'    => false,
                    ],
                ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-center">
                    @foreach($packages as $package)
                        <x-pricing-card
                            :name="$package['name']"
                            :priceLabel="$package['priceLabel']"
                            :description="$package['description']"
                            :features="$package['features']"
                            :buttonText="$package['buttonText']"
                            :featured="$package['featured']"
                        />
                    @endforeach
                </div>

                <p class="mt-10 text-center text-sm text-[#65676D]">
                    These are sample shopping paths only. Final inclusions and pricing are provided upon direct consultation with the store.
                </p>
            </div>
        </section>

        {{-- ============================================================
             TESTIMONIALS
        ============================================================ --}}
        <section id="reviews" class="bg-white py-20 lg:py-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <x-section-heading
                    eyebrow="Customer Reviews"
                    title="What Our Customers Say"
                    subtitle="These cards are placeholders. Genuine customer testimonials will replace them once provided by the business owner."
                    :center="true"
                />

                @php
                $testimonials = [
                    [
                        'quote'    => 'Customer review to be added. This card will display a genuine experience once the business owner provides verified customer feedback.',
                        'name'     => 'Customer Name (Placeholder)',
                        'role'     => 'Verified Customer — To Be Updated',
                        'initials' => 'A',
                    ],
                    [
                        'quote'    => 'Customer review to be added. Real names, photos, and reviews will only be published with the customer\'s permission and the business owner\'s confirmation.',
                        'name'     => 'Customer Name (Placeholder)',
                        'role'     => 'Verified Customer — To Be Updated',
                        'initials' => 'B',
                    ],
                    [
                        'quote'    => 'Customer review to be added. Do not publish fabricated testimonials. Replace this content with genuine feedback supplied by actual customers.',
                        'name'     => 'Customer Name (Placeholder)',
                        'role'     => 'Verified Customer — To Be Updated',
                        'initials' => 'C',
                    ],
                ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($testimonials as $testimonial)
                        <x-testimonial-card
                            :quote="$testimonial['quote']"
                            :name="$testimonial['name']"
                            :role="$testimonial['role']"
                            :initials="$testimonial['initials']"
                        />
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============================================================
             CALL TO ACTION
        ============================================================ --}}
        <section class="bg-[#111318] py-20 lg:py-28 overflow-hidden relative">
            {{-- Decorative lime accent --}}
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#B9FF2C] rounded-full opacity-10 translate-x-1/2 -translate-y-1/2" aria-hidden="true"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-[#B58A4A] rounded-full opacity-10 -translate-x-1/2 translate-y-1/2" aria-hidden="true"></div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <span class="inline-block bg-[#B9FF2C] text-[#111318] text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-6">
                    Get Started Today
                </span>

                <h2 class="text-5xl sm:text-6xl lg:text-7xl font-black uppercase leading-none tracking-tight text-white mb-6"
                    style="font-family: 'Bebas Neue', sans-serif;">
                    Ready to Furnish Your
                    <span class="text-[#B9FF2C]">Dream Home?</span>
                </h2>

                <p class="text-gray-400 text-lg leading-relaxed mb-10 max-w-2xl mx-auto">
                    Explore our collection in person or reach out through Facebook Messenger. We are happy to help with inquiries, quotations, and delivery arrangements.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                    <a href="#collections"
                       class="inline-flex items-center gap-2 bg-[#B9FF2C] text-[#111318] font-bold px-8 py-4 rounded-full hover:bg-[#a8ee1a] transition-all duration-200 shadow-lg hover:shadow-xl focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B9FF2C] text-base">
                        Explore Collection
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                    <a href="https://m.me/luzonFurnitureStore"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 bg-transparent text-white font-bold px-8 py-4 rounded-full border-2 border-white/30 hover:border-white hover:bg-white/10 transition-all duration-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B9FF2C] text-base">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.145 2 11.243c0 2.908 1.438 5.504 3.688 7.21V22l3.37-1.853c.9.25 1.855.384 2.942.384 5.523 0 10-4.145 10-9.288C22 6.145 17.523 2 12 2zm1.023 12.508l-2.55-2.716-4.978 2.716 5.476-5.81 2.613 2.716 4.916-2.716-5.477 5.81z"/>
                        </svg>
                        Message on Facebook
                    </a>
                    <a href="tel:+639568144175"
                       class="inline-flex items-center gap-2 bg-transparent text-white font-bold px-8 py-4 rounded-full border-2 border-white/30 hover:border-white hover:bg-white/10 transition-all duration-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#B9FF2C] text-base">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        Call Us
                    </a>
                </div>

                {{-- Store info strip --}}
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 text-sm text-gray-400 border-t border-white/10 pt-8">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#B9FF2C] shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                        <span>71 A. Regidor St., Sta. Cruz, Laguna 4009</span>
                    </div>
                    <span class="hidden sm:block text-white/20" aria-hidden="true">|</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#B9FF2C] shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        <a href="tel:+639568144175" class="hover:text-[#B9FF2C] transition-colors">0956 814 4175</a>
                    </div>
                    <span class="hidden sm:block text-white/20" aria-hidden="true">|</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#B9FF2C] shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <a href="https://www.facebook.com/luzonFurnitureStore" target="_blank" rel="noopener noreferrer" class="hover:text-[#B9FF2C] transition-colors">Luzon Furniture Store</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- ============================================================
         FOOTER
    ============================================================ --}}
    <x-footer />

</x-layouts.app>
