<x-app-layout>
    <div class="bg-[#f8f5ef] text-[#1a1a1a]">


        <!-- Hero Banner -->
        <section class="w-full relative z-0 bg-gradient-to-r from-[#fffaf0] via-[#f8f1df] to-[#f1e1b8]"
            data-banner-slider>
            <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8 pt-6 lg:pt-16 pb-8 lg:pb-16">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-6 items-stretch">

                    {{-- Main Banner --}}
                    <div class="lg:col-span-8">
                        <div
                            class="relative overflow-hidden rounded-[2rem] bg-neutral-100 border border-neutral-200 shadow-sm">

                            @if (isset($banners) && $banners->count())
                                <div class="relative w-full aspect-[16/10] sm:aspect-[16/8] lg:h-[520px] lg:aspect-auto">
                                    <div class="absolute inset-0 flex h-full transition-transform duration-700 ease-out"
                                        data-banner-track>
                                        @foreach ($banners as $banner)
                                            @php
                                                $url = $banner->link_url ?: route('shop.index');
                                            @endphp

                                            <a href="{{ $url }}"
                                                class="relative w-full h-full shrink-0 block group">
                                                <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Banner"
                                                    class="w-full h-full object-cover object-center block transition duration-700 group-hover:scale-[1.02]">

                                                {{-- overlay --}}
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-r from-black/40 via-black/10 to-transparent">
                                                </div>


                                            </a>
                                        @endforeach
                                    </div>

                                    @if ($banners->count() > 1)
                                        {{-- arrows --}}
                                        <button type="button"
                                            class="hidden sm:flex absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/90 hover:bg-white text-neutral-900 items-center justify-center shadow-sm transition"
                                            data-banner-prev>
                                            ‹
                                        </button>

                                        <button type="button"
                                            class="hidden sm:flex absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/90 hover:bg-white text-neutral-900 items-center justify-center shadow-sm transition"
                                            data-banner-next>
                                            ›
                                        </button>

                                        {{-- dots --}}
                                        <div class="absolute bottom-5 left-0 right-0 flex justify-center gap-2"
                                            data-banner-dots>
                                            @foreach ($banners as $index => $banner)
                                                <button type="button"
                                                    class="w-8 h-1.5 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300"
                                                    data-banner-dot="{{ $index }}"
                                                    aria-label="Go to slide {{ $index + 1 }}"></button>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div
                                    class="w-full aspect-[16/10] sm:aspect-[16/8] lg:h-[520px] lg:aspect-auto bg-neutral-100 flex items-center justify-center">
                                    <p class="text-neutral-400 text-sm">Shop Banner coming soon</p>
                                </div>
                            @endif

                        </div>
                    </div>

                    {{-- Side Promo Cards --}}
                    <div class="lg:col-span-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-5 lg:gap-6 h-full">

                            <a href="{{ route('web-development') }}"
                                class="group relative overflow-hidden rounded-[2.5rem] border border-neutral-200/60 bg-white min-h-[180px] lg:min-h-[248px] p-8 flex flex-col justify-between transition-all duration-500 hover:shadow-[0_20px_50px_rgba(0,0,0,0.05)] hover:-translate-y-1">

                                {{-- Decorative background element --}}
                                <div
                                    class="absolute -right-8 -top-8 h-32 w-32 rounded-full bg-neutral-50 transition-transform duration-700 group-hover:scale-[2.5]">
                                </div>

                                <div class="relative z-10">
                                    <span
                                        class="inline-block text-[10px] font-bold uppercase tracking-[0.2em] text-amber-600/80 bg-amber-50 px-3 py-1 rounded-full">
                                        Our Expertise
                                    </span>

                                    <h3
                                        class="mt-4 text-2xl font-bold tracking-tight text-neutral-900 group-hover:text-amber-600 transition-colors duration-300">
                                        Web Development
                                    </h3>

                                    <p class="mt-2 text-sm leading-relaxed text-neutral-500 max-w-[240px]">
                                        Build modern, high-performing websites tailored to your unique business goals.
                                    </p>
                                </div>

                                <div class="relative z-10 flex items-center justify-between">
                                    <span
                                        class="text-xs font-bold uppercase tracking-widest text-neutral-900 group-hover:mr-2 transition-all">Explore
                                        Service</span>
                                    <div
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-neutral-900 text-white shadow-lg transition-all duration-300 group-hover:bg-amber-600 group-hover:rotate-[-45deg]">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ route('vouchers.index') }}"
                                class="group relative overflow-hidden rounded-[2.5rem] border border-white/10 bg-[#0A0A0A] min-h-[180px] lg:min-h-[248px] p-8 flex flex-col justify-between transition-all duration-500 hover:shadow-[0_20px_50px_rgba(156,116,20,0.15)] hover:-translate-y-1">

                                {{-- Gradient Glow Overlay --}}
                                <div
                                    class="absolute inset-0 opacity-20 group-hover:opacity-40 transition-opacity duration-500 bg-[radial-gradient(circle_at_top_right,#D4AF37_0%,transparent_60%)]">
                                </div>

                                {{-- Grid Pattern --}}
                                <div class="absolute inset-0 opacity-[0.03] [mask-image:linear-gradient(white,transparent)]"
                                    style="background-image: radial-gradient(#fff 0.5px, transparent 0.5px); background-size: 24px 24px;">
                                </div>

                                <div class="relative z-10">
                                    <span
                                        class="inline-block text-[10px] font-bold uppercase tracking-[0.2em] text-[#D4AF37] border border-[#D4AF37]/30 px-3 py-1 rounded-full">
                                        Limited Access
                                    </span>

                                    <h3
                                        class="mt-4 text-2xl font-bold tracking-tight text-white group-hover:text-[#E7C76A] transition-colors duration-300">
                                        Exclusive Vouchers
                                    </h3>

                                    <p class="mt-2 text-sm leading-relaxed text-neutral-400 max-w-[240px]">
                                        Unlock seasonal offers and premium savings curated for our members.
                                    </p>
                                </div>

                                <div class="relative z-10 flex items-center justify-between">
                                    <span
                                        class="text-xs font-bold uppercase tracking-widest text-white group-hover:text-[#D4AF37] transition-all">View
                                        Deals</span>
                                    <div
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#D4AF37] text-white shadow-[0_0_20px_rgba(212,175,55,0.3)] transition-all duration-300 group-hover:scale-110 group-hover:bg-[#E7C76A]">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Trust Bar -->
        <section class="bg-white border-b border-neutral-100">
            <div class="max-w-7xl5 mx-auto px-6 py-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-0">

                    <div
                        class="group flex items-center lg:justify-center gap-4 lg:border-r lg:border-neutral-100 last:border-0 transition-all duration-300">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-2xl bg-neutral-50 flex items-center justify-center group-hover:bg-amber-50 transition-colors">
                            <svg class="w-6 h-6 text-neutral-800 group-hover:text-amber-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold uppercase tracking-widest text-neutral-900">Authentic
                                Quality</h4>
                            <p class="text-sm text-neutral-500 mt-0.5">Handpicked premium selection</p>
                        </div>
                    </div>

                    <div
                        class="group flex items-center lg:justify-center gap-4 lg:border-r lg:border-neutral-100 last:border-0 transition-all duration-300">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-2xl bg-neutral-50 flex items-center justify-center group-hover:bg-amber-50 transition-colors">
                            <svg class="w-6 h-6 text-neutral-800 group-hover:text-amber-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold uppercase tracking-widest text-neutral-900">Fast Delivery
                            </h4>
                            <p class="text-sm text-neutral-500 mt-0.5">Nationwide tracked shipping</p>
                        </div>
                    </div>

                    <div
                        class="group flex items-center lg:justify-center gap-4 lg:border-r lg:border-neutral-100 last:border-0 transition-all duration-300">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-2xl bg-neutral-50 flex items-center justify-center group-hover:bg-amber-50 transition-colors">
                            <svg class="w-6 h-6 text-neutral-800 group-hover:text-amber-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold uppercase tracking-widest text-neutral-900">Secure Payment
                            </h4>
                            <p class="text-sm text-neutral-500 mt-0.5">SSL encrypted transactions</p>
                        </div>
                    </div>

                    <div class="group flex items-center lg:justify-center gap-4 transition-all duration-300">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-2xl bg-neutral-50 flex items-center justify-center group-hover:bg-amber-50 transition-colors">
                            <svg class="w-6 h-6 text-neutral-800 group-hover:text-amber-600 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[13px] font-bold uppercase tracking-widest text-neutral-900">Easy Returns
                            </h4>
                            <p class="text-sm text-neutral-500 mt-0.5">30-day money back guarantee</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Category -->
        <section id="categories" class="py-16 lg:py-20">
            <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">

                @if (isset($categories) && $categories->count())

                    <div class="flex items-end justify-between gap-4 mb-8">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#b99139]">
                                Shop by Category
                            </p>
                            <h2 class="mt-2 text-3xl lg:text-4xl font-black text-[#111111]">
                                Find your signature style
                            </h2>
                        </div>
                    </div>

                    <div x-data="{ expanded: false, isMobile: window.innerWidth < 768 }" x-init="window.addEventListener('resize', () => isMobile = window.innerWidth < 768)">

                        <div class="grid grid-cols-2 lg:grid-cols-5 gap-5">
                            @foreach ($categories as $index => $category)
                                <div x-show="expanded || {{ $index }} < (isMobile ? 4 : 5)"
                                    x-transition.opacity.duration.300ms>
                                    <a href="{{ route('shop.index', ['category' => $category->slug]) }}"
                                        class="group block rounded-[1.75rem] overflow-hidden border border-[#eadfc8] bg-white shadow-sm hover:shadow-xl transition duration-300">

                                        <div class="aspect-square overflow-hidden bg-[#FBFAF7]">
                                            @if ($category->icon)
                                                <img src="{{ asset('storage/' . $category->icon) }}"
                                                    alt="{{ $category->name }}"
                                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center">
                                                    <span
                                                        class="text-[11px] text-neutral-300 font-semibold uppercase tracking-[0.18em]">
                                                        No Image
                                                    </span>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="p-5">
                                            <p class="text-lg font-bold text-[#111111] line-clamp-1">
                                                {{ $category->name }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        @if ($categories->count() > 10)
                            <div class="mt-10 flex justify-center">
                                <button @click="expanded = !expanded"
                                    class="inline-flex items-center gap-2 rounded-full border border-[#e2d4af] bg-[#fffdf8] px-6 py-3 text-sm font-semibold text-[#6f5b28] hover:bg-[#111111] hover:text-white hover:border-[#111111] transition-all duration-300">
                                    <span x-show="!expanded">View More</span>
                                    <span x-show="expanded">Show Less</span>
                                    <span x-show="!expanded">↓</span>
                                    <span x-show="expanded">↑</span>
                                </button>
                            </div>
                        @endif
                    </div>

                @endif

            </div>
        </section>

        <!-- Featured Products -->
        <section id="featured-products" class="py-16 lg:py-20 bg-white border-y border-[#eee2ca]">
            <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Header --}}
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-8">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#b99139]">
                            Featured Products
                        </p>
                        <h2 class="mt-2 text-3xl lg:text-4xl font-black text-[#111111]">
                            Best sellers this week
                        </h2>
                    </div>

                    {{-- (optional future filter) --}}
                    <div x-data="{ expanded: false }" class="flex flex-wrap gap-3 text-sm">

                        {{-- All --}}
                        <a href="{{ route('home') }}"
                            class="rounded-full px-5 py-2 font-semibold {{ !request('category') ? 'bg-[#111111] text-white' : 'border border-[#e2d4af] bg-[#fffdf8] text-[#6f5b28]' }}">
                            All
                        </a>

                        {{-- Categories --}}
                        @foreach ($categories as $index => $category)
                            <template x-if="expanded || {{ $index }} < 3">
                                <a href="{{ route('home', ['category' => $category->slug]) }}"
                                    class="rounded-full px-5 py-2 font-semibold
                                            {{ request('category') == $category->slug
                                                ? 'bg-[#111111] text-white'
                                                : 'border border-[#e2d4af] bg-[#fffdf8] text-[#6f5b28] hover:border-[#b99139]' }}">

                                    {{ $category->name }}
                                </a>
                            </template>
                        @endforeach

                        {{-- More / Less --}}
                        @if ($categories->count() > 6)
                            <button @click="expanded = !expanded"
                                class="rounded-full px-5 py-2 font-semibold border border-[#e2d4af] bg-[#fffdf8] text-[#6f5b28] hover:border-[#b99139]">

                                <span x-show="!expanded">+ More</span>
                                <span x-show="expanded">Less</span>
                            </button>
                        @endif

                    </div>
                </div>

                @if ($featured->count())

                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-5 lg:gap-6">

                        @foreach ($featured as $product)
                            <div
                                class="group relative overflow-hidden rounded-[1.75rem]
                               border border-[#ebdfc9] bg-[#fffdfa]
                               shadow-sm transition duration-300
                               hover:-translate-y-1 hover:shadow-[0_25px_45px_rgba(0,0,0,0.10)]">

                                {{-- Image --}}
                                <a href="{{ route('shop.show', $product->slug) }}"
                                    class="relative block aspect-square overflow-hidden">

                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}"
                                            alt="{{ $product->name }}"
                                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                    @else
                                        <div
                                            class="w-full h-full flex items-center justify-center bg-neutral-100 text-[10px] uppercase text-neutral-400">
                                            No Image
                                        </div>
                                    @endif

                                    {{-- Tag (optional logic) --}}
                                    <span
                                        class="absolute left-4 top-4 rounded-full bg-[#111111]
                                       px-3 py-1 text-xs font-semibold text-[#f5e7c1] shadow-lg">
                                        Featured
                                    </span>

                                    {{-- Wishlist --}}
                                    @auth
                                        @php
                                            $isFavorited = auth()
                                                ->user()
                                                ->favorites->contains('product_id', $product->id);
                                        @endphp

                                        <form
                                            action="{{ $isFavorited ? route('account.favorites.destroy', $product) : route('account.favorites.store', $product) }}"
                                            method="POST" class="absolute right-4 top-4">
                                            @csrf
                                            @if ($isFavorited)
                                                @method('DELETE')
                                            @endif

                                            <button type="submit"
                                                class="h-10 w-10 rounded-full bg-white/90 text-[#111111]
                                               shadow hover:bg-[#b99139] hover:text-white transition">
                                                ♡
                                            </button>
                                        </form>
                                    @endauth

                                </a>

                                {{-- Content --}}
                                <div class="p-5">
                                    <p class="text-xs uppercase tracking-[0.18em] text-[#aa8740] font-semibold">
                                        {{ $product->category->name ?? 'General' }}
                                    </p>

                                    <h3 class="mt-2 text-base font-bold text-[#111111] line-clamp-2">
                                        {{ $product->name }}
                                    </h3>

                                    {{-- Price --}}
                                    <div class="mt-3 flex items-center gap-2 text-sm">
                                        <span class="font-black text-[#111111]">
                                            @if ($product->has_variants && $product->variants->count())
                                                @php
                                                    $prices = $product->variants->pluck('price')->filter();
                                                    $min = $prices->min();
                                                    $max = $prices->max();
                                                @endphp

                                                @if ($min == $max)
                                                    RM {{ number_format($min, 2) }}
                                                @else
                                                    RM {{ number_format($min, 2) }}
                                                @endif
                                            @elseif ($product->is_open_amount)
                                                RM {{ number_format($product->min_amount ?? 1, 2) }}
                                            @else
                                                RM {{ number_format($product->price ?? 0, 2) }}
                                            @endif
                                        </span>
                                    </div>

                                    {{-- Footer --}}
                                    <div
                                        class="mt-5 flex flex-col items-start gap-3 sm:flex-row sm:items-center sm:justify-between">

                                        {{-- Fake rating --}}
                                        <div class="flex text-[#b99139] text-sm">★★★★★</div>

                                        <a href="{{ route('shop.show', $product->slug) }}"
                                            class="rounded-full bg-[#b99139] px-4 py-2 text-xs font-semibold text-white hover:bg-[#111111] transition">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>

                    <div class="mt-10 flex justify-center">
                        <a href="{{ route('shop.index', request('category') ? ['category' => request('category')] : []) }}"
                            class="inline-flex items-center gap-2 rounded-full
                                border border-[#e2d4af] bg-[#fffdf8]
                                px-6 py-3 text-sm font-semibold text-[#6f5b28]
                                hover:bg-[#111111] hover:text-white hover:border-[#111111]
                                transition-all duration-300">

                            View More
                            <span>→</span>
                        </a>
                    </div>
                @else
                    {{-- Empty --}}
                    <div class="text-center py-16 text-neutral-500">
                        No featured products yet.
                    </div>
                @endif

            </div>
        </section>

        <!-- Promo Grid -->
        <section class="py-16 lg:py-20">
            <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-6">
                <div
                    class="lg:col-span-2 rounded-[2rem] overflow-hidden border border-[#eadbb8] bg-gradient-to-r from-[#111111] to-[#2a2418] text-white p-8 lg:p-10 relative">
                    <div
                        class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(185,145,57,0.35),transparent_24%)]">
                    </div>
                    <div class="relative max-w-xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#f0d998]">Exclusive Campaign
                        </p>
                        <h3 class="mt-3 text-3xl lg:text-4xl font-black leading-tight">Mid Season Sale up to 40% off
                            selected luxury essentials.</h3>
                        <p class="mt-4 text-white/75 leading-7">Elevate your everyday with pieces designed to feel
                            premium, elegant, and timeless.</p>
                        <a href="{{ route('shop.index') }}"
                            class="mt-6 inline-flex rounded-full bg-[#b99139] px-6 py-3 text-sm font-semibold text-white hover:bg-white hover:text-[#111111] transition">Shop
                            Now</a>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-[#eadbb8] bg-white p-7 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#b99139]">
                        Rewards Program
                    </p>

                    <h3 class="mt-3 text-2xl font-black text-[#111111]">
                        Earn Points Every Purchase
                    </h3>

                    <p class="mt-3 text-[#666] leading-7">
                        Get rewarded when you shop. Earn points, refer friends, and unlock exclusive perks.
                    </p>

                    <ul class="mt-5 space-y-3 text-sm text-[#444]">
                        <li>• Earn points on every order</li>
                        <li>• Referral rewards when friends purchase</li>
                        <li>• Redeem points for discounts & vouchers</li>
                    </ul>

                    <a href="{{ route('register') }}"
                        class="mt-6 inline-flex rounded-full border border-[#111111] px-5 py-3 text-sm font-semibold text-[#111111] hover:bg-[#111111] hover:text-white transition">
                        Join & Start Earning
                    </a>
                </div>
            </div>
        </section>

        <!-- Brand Story / Why Shop With Us -->
        <section class="py-16 lg:py-24 bg-white border-y border-[#eee2ca] overflow-hidden">
            <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

                    {{-- Image Side --}}
                    <div class="relative">
                        <div class="absolute -top-6 -left-6 h-24 w-24 rounded-full bg-[#D4AF37]/10 blur-2xl"></div>
                        <div class="absolute -bottom-6 -right-6 h-24 w-24 rounded-full bg-black/5 blur-2xl"></div>

                        <div
                            class="relative overflow-hidden rounded-[2rem] border border-[#eadfc8] bg-[#faf7f0] shadow-sm">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80"
                                alt="Nextora Brand Story"
                                class="w-full h-[320px] sm:h-[420px] lg:h-[520px] object-cover">
                        </div>
                    </div>

                    {{-- Content Side --}}
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#b99139]">
                            About Nextora
                        </p>

                        <h2 class="mt-3 text-3xl lg:text-5xl font-black leading-tight text-[#111111]">
                            Smart choices for a
                            <span class="text-[#b99139]">better everyday lifestyle</span>.
                        </h2>

                        <p class="mt-5 text-base leading-8 text-neutral-600">
                            At Nextora, we focus on bringing together products, solutions, and experiences
                            that make daily living more convenient, efficient, and inspiring.
                            We believe modern shopping should be simple, reliable, and built around what people truly
                            need.
                        </p>

                        <div class="mt-10 grid sm:grid-cols-2 gap-4">
                            {{-- Feature 1 --}}
                            <div
                                class="group relative p-5 rounded-[2rem] border border-transparent bg-neutral-50/50 hover:bg-white hover:border-[#eadfc8] hover:shadow-[0_20px_40px_-15px_rgba(212,175,55,0.1)] transition-all duration-500">
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-xl bg-neutral-900 group-hover:bg-[#D4AF37] text-white flex items-center justify-center text-sm transition-all duration-300 shadow-lg shadow-black/5">
                                        ✦
                                    </div>
                                    <div>
                                        <h3
                                            class="font-bold text-[#111111] text-[15px] tracking-tight group-hover:text-[#D4AF37] transition-colors">
                                            Carefully Selected
                                        </h3>
                                        <p class="text-[13px] leading-relaxed text-neutral-500 mt-1.5">
                                            Products chosen for quality, practicality, and lasting value.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Feature 2 --}}
                            <div
                                class="group relative p-5 rounded-[2rem] border border-transparent bg-neutral-50/50 hover:bg-white hover:border-[#eadfc8] hover:shadow-[0_20px_40px_-15px_rgba(212,175,55,0.1)] transition-all duration-500">
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-xl bg-neutral-900 group-hover:bg-[#D4AF37] text-white flex items-center justify-center text-sm transition-all duration-300 shadow-lg shadow-black/5">
                                        ⚑
                                    </div>
                                    <div>
                                        <h3
                                            class="font-bold text-[#111111] text-[15px] tracking-tight group-hover:text-[#D4AF37] transition-colors">
                                            Reliable Experience
                                        </h3>
                                        <p class="text-[13px] leading-relaxed text-neutral-500 mt-1.5">
                                            A smooth journey with secure checkout and local support.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Feature 3 --}}
                            <div
                                class="group relative p-5 rounded-[2rem] border border-transparent bg-neutral-50/50 hover:bg-white hover:border-[#eadfc8] hover:shadow-[0_20px_40px_-15px_rgba(212,175,55,0.1)] transition-all duration-500">
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-xl bg-neutral-900 group-hover:bg-[#D4AF37] text-white flex items-center justify-center text-sm transition-all duration-300 shadow-lg shadow-black/5">
                                        ♡
                                    </div>
                                    <div>
                                        <h3
                                            class="font-bold text-[#111111] text-[15px] tracking-tight group-hover:text-[#D4AF37] transition-colors">
                                            Community Benefits
                                        </h3>
                                        <p class="text-[13px] leading-relaxed text-neutral-500 mt-1.5">
                                            Enjoy member rewards and exclusive early product access.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Feature 4 --}}
                            <div
                                class="group relative p-5 rounded-[2rem] border border-transparent bg-neutral-50/50 hover:bg-white hover:border-[#eadfc8] hover:shadow-[0_20px_40px_-15px_rgba(212,175,55,0.1)] transition-all duration-500">
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-xl bg-neutral-900 group-hover:bg-[#D4AF37] text-white flex items-center justify-center text-sm transition-all duration-300 shadow-lg shadow-black/5">
                                        ⟡
                                    </div>
                                    <div>
                                        <h3
                                            class="font-bold text-[#111111] text-[15px] tracking-tight group-hover:text-[#D4AF37] transition-colors">
                                            Future-Focused
                                        </h3>
                                        <p class="text-[13px] leading-relaxed text-neutral-500 mt-1.5">
                                            Built for modern lifestyles with a forward-thinking approach.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-16 lg:py-24 bg-[#f8f5ef]">
            <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#b99139]">
                        Client Feedback
                    </p>
                    <h2 class="mt-3 text-3xl lg:text-4xl font-black text-[#111111]">
                        What They Say
                    </h2>
                    <p class="mt-4 text-neutral-600 leading-7">
                        Real feedback from clients who value our responsive support, practical solutions,
                        and smooth digital experience.
                    </p>
                </div>

                <div class="mt-12 grid md:grid-cols-2 xl:grid-cols-3 gap-6">

                    <div
                        class="rounded-[1.75rem] border border-[#eadfc8] bg-white p-7 shadow-sm hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div class="flex text-[#b99139] text-sm">★★★★★</div>
                            <span
                                class="text-xs font-semibold uppercase tracking-[0.18em] text-neutral-400">Verified</span>
                        </div>

                        <p class="mt-5 text-neutral-600 leading-7">
                            “Working with Nextora made the whole process feel simple and well-organized.
                            Their team was responsive, clear, and genuinely focused on helping our business move
                            forward.”
                        </p>

                        <div class="mt-6 flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-[#111111] text-white flex items-center justify-center font-bold">
                                A
                            </div>
                            <div>
                                <h4 class="font-bold text-[#111111]">Aisyah Rahman</h4>
                                <p class="text-sm text-neutral-500">Kuala Lumpur</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-[1.75rem] border border-[#eadfc8] bg-white p-7 shadow-sm hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div class="flex text-[#b99139] text-sm">★★★★★</div>
                            <span
                                class="text-xs font-semibold uppercase tracking-[0.18em] text-neutral-400">Verified</span>
                        </div>

                        <p class="mt-5 text-neutral-600 leading-7">
                            “What stood out most was how practical and efficient everything was.
                            Nextora understood our needs quickly and delivered a solution that was both useful and easy
                            to adopt.”
                        </p>

                        <div class="mt-6 flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-[#111111] text-white flex items-center justify-center font-bold">
                                D
                            </div>
                            <div>
                                <h4 class="font-bold text-[#111111]">Daniel Wong</h4>
                                <p class="text-sm text-neutral-500">Penang</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-[1.75rem] border border-[#eadfc8] bg-white p-7 shadow-sm hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div class="flex text-[#b99139] text-sm">★★★★★</div>
                            <span
                                class="text-xs font-semibold uppercase tracking-[0.18em] text-neutral-400">Verified</span>
                        </div>

                        <p class="mt-5 text-neutral-600 leading-7">
                            “Nextora gave us confidence from the start.
                            The communication was smooth, the support was reliable, and the overall experience felt
                            modern, professional, and dependable.”
                        </p>

                        <div class="mt-6 flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-[#111111] text-white flex items-center justify-center font-bold">
                                S
                            </div>
                            <div>
                                <h4 class="font-bold text-[#111111]">Siti Nurul</h4>
                                <p class="text-sm text-neutral-500">Johor Bahru</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('[data-scroll-x]');
            if (!slider) return;

            let isDown = false;
            let startX = 0;
            let moved = false;

            // 鼠标按下
            slider.addEventListener('mousedown', function(e) {
                isDown = true;
                moved = false;
                slider.classList.add('cursor-grabbing');

                e.preventDefault();
                startX = e.clientX;
            });

            // 鼠标抬起 / 离开
            const stopDrag = () => {
                isDown = false;
                slider.classList.remove('cursor-grabbing');
            };

            slider.addEventListener('mouseup', stopDrag);
            slider.addEventListener('mouseleave', stopDrag);

            // 鼠标移动：增量拖动（每次用上一次的位置当参考，会比较顺）
            slider.addEventListener('mousemove', function(e) {
                if (!isDown) return;

                e.preventDefault();
                const x = e.clientX;
                const delta = x - startX;

                // 灵敏度：1.2 可以自己调（1.0 更稳，1.5 更敏感）
                slider.scrollLeft -= delta * 1.2;

                startX = x; // 更新起点，下一次从这里算
                if (Math.abs(delta) > 3) moved = true;
            });

            // 拖动时不要触发里面 a 的点击
            slider.addEventListener('click', function(e) {
                if (moved) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }, true);

            // 滚轮 -> 横向滚动，稍微顺一点
            // slider.addEventListener('wheel', function(e) {
            //     if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
            //         e.preventDefault();
            //         slider.scrollLeft += e.deltaY * 0.7;
            //     }
            // }, {
            //     passive: false
            // });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('[data-banner-slider]');
            if (!slider) return;

            const track = slider.querySelector('[data-banner-track]');
            const slides = Array.from(track.children);
            const prevBtn = slider.querySelector('[data-banner-prev]');
            const nextBtn = slider.querySelector('[data-banner-next]');
            const dotsWrap = slider.querySelector('[data-banner-dots]');
            const dots = dotsWrap ? Array.from(dotsWrap.querySelectorAll('[data-banner-dot]')) : [];

            let index = 0;
            let autoTimer = null;

            function goTo(i) {
                if (!slides.length) return;
                index = (i + slides.length) % slides.length;
                track.style.transform = `translateX(-${index * 100}%)`;

                // 更新底部点
                dots.forEach((dot, idx) => {
                    if (idx === index) {
                        dot.classList.add('bg-[#D4AF37]', 'w-12');
                        dot.classList.remove('bg-white/40', 'w-8');
                    } else {
                        dot.classList.remove('bg-[#D4AF37]', 'w-12');
                        dot.classList.add('bg-white/40', 'w-8');
                    }
                });
            }

            function next() {
                goTo(index + 1);
            }

            function prev() {
                goTo(index - 1);
            }

            // 初始
            goTo(0);

            // 按钮
            if (prevBtn) prevBtn.addEventListener('click', () => {
                prev();
                restartAuto();
            });

            if (nextBtn) nextBtn.addEventListener('click', () => {
                next();
                restartAuto();
            });

            // 点点点击
            dots.forEach((dot, idx) => {
                if (idx === index) {
                    dot.classList.add('bg-[#D4AF37]', 'w-12');
                    dot.classList.remove('bg-white/40', 'w-8');
                } else {
                    dot.classList.remove('bg-[#D4AF37]', 'w-12');
                    dot.classList.add('bg-white/40', 'w-8');
                }
            });

            // Auto slide
            function startAuto() {
                if (autoTimer) clearInterval(autoTimer);
                autoTimer = setInterval(() => {
                    next();
                }, 5000); // 5 秒一张
            }

            function restartAuto() {
                startAuto();
            }

            startAuto();

            // Touch swipe 支持（手机左右划）
            let startX = null;
            let isTouchMoving = false;

            slider.addEventListener('touchstart', (e) => {
                if (!e.touches[0]) return;
                startX = e.touches[0].clientX;
                isTouchMoving = true;
            });

            slider.addEventListener('touchmove', (e) => {
                if (!isTouchMoving || startX === null) return;
                const currentX = e.touches[0].clientX;
                const diff = currentX - startX;

                // 不做实时拖动，只是记录 swipe 方向
                // 如要实时拖动可以改这里
            });

            slider.addEventListener('touchend', (e) => {
                if (!isTouchMoving || startX === null) return;
                const endX = e.changedTouches[0].clientX;
                const diff = endX - startX;

                if (Math.abs(diff) > 50) {
                    if (diff < 0) {
                        next();
                    } else {
                        prev();
                    }
                    restartAuto();
                }

                startX = null;
                isTouchMoving = false;
            });
        });
    </script>



</x-app-layout>
