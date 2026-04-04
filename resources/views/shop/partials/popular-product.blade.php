{{-- Popular products --}}
<section id="popular-products" class="relative overflow-hidden bg-gradient-to-b from-white to-[#F3F3F0]">

    <div class="relative max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-12">

        {{-- Header --}}
        <div class="flex items-end justify-between gap-4 mb-6 lg:mb-8">
            <div>
                <p class="text-[11px] font-semibold uppercase tracking-[0.22em] text-neutral-400">
                    Customer Favorites
                </p>
                <h2 class="mt-2 text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-neutral-900">
                    Popular Products
                </h2>
            </div>

            <a href="{{ route('shop.index') }}"
                class="inline-flex items-center gap-2 text-sm sm:text-base font-semibold text-neutral-600 hover:text-neutral-900 transition-colors duration-300">
                View All
                <span>→</span>
            </a>
        </div>

        @if (isset($popular) && $popular->count())

            <div class="relative">

                {{-- Desktop / Tablet Controls --}}
                <button type="button"
                    class="hidden sm:flex absolute -left-5 lg:-left-14 top-1/2 -translate-y-1/2 z-20
                           w-11 h-11 rounded-full
                           bg-white border border-neutral-200 text-neutral-700
                           items-center justify-center
                           shadow-sm
                           transition-all duration-300
                           hover:bg-neutral-900 hover:text-white hover:border-neutral-900
                           active:scale-95"
                    data-po-desktop-prev aria-label="Previous">
                    ‹
                </button>

                <button type="button"
                    class="hidden sm:flex absolute -right-5 lg:-right-14 top-1/2 -translate-y-1/2 z-20
                           w-11 h-11 rounded-full
                           bg-white border border-neutral-200 text-neutral-700
                           items-center justify-center
                           shadow-sm
                           transition-all duration-300
                           hover:bg-neutral-900 hover:text-white hover:border-neutral-900
                           active:scale-95"
                    data-po-desktop-next aria-label="Next">
                    ›
                </button>

                {{-- Grid --}}
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 sm:gap-6" data-po-grid>
                    @foreach ($popular as $product)
                        <div data-po-item
                            class="group relative flex flex-col overflow-hidden rounded-[1.5rem]
                                   border border-neutral-200 bg-white
                                   shadow-sm transition-all duration-300
                                   hover:-translate-y-1 hover:shadow-lg">

                            {{-- Image --}}
                            <a href="{{ route('shop.show', $product->slug) }}"
                                class="relative aspect-square overflow-hidden bg-neutral-100">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                                @else
                                    <div
                                        class="w-full h-full flex items-center justify-center bg-neutral-100
                                               text-[10px] uppercase tracking-[0.2em] text-neutral-400">
                                        No Image
                                    </div>
                                @endif

                                <div
                                    class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300
                                           bg-gradient-to-t from-black/10 via-transparent to-transparent">
                                </div>

                                {{-- Popular badge --}}
                                <div class="absolute top-3 left-3 z-10">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full
                                               text-[10px] font-semibold uppercase tracking-[0.18em]
                                               bg-white/95 text-neutral-800 border border-neutral-200 shadow-sm backdrop-blur-sm">
                                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-neutral-900"></span>
                                        Popular
                                    </span>
                                </div>
                            </a>

                            {{-- Favorite --}}
                            @auth
                                @php
                                    $isFavorited = auth()->user()->favorites->contains('product_id', $product->id);
                                @endphp
                                <form
                                    action="{{ $isFavorited ? route('account.favorites.destroy', $product) : route('account.favorites.store', $product) }}"
                                    method="POST" class="absolute top-3 right-3 z-10">
                                    @csrf
                                    @if ($isFavorited)
                                        @method('DELETE')
                                    @endif

                                    <button type="submit"
                                        class="w-9 h-9 flex items-center justify-center rounded-full
                                               bg-white/95 backdrop-blur-sm text-neutral-700
                                               border border-neutral-200 shadow-sm
                                               hover:bg-neutral-900 hover:text-white hover:border-neutral-900
                                               transition-all active:scale-95">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            fill="{{ $isFavorited ? 'currentColor' : 'none' }}"
                                            stroke="currentColor" stroke-width="1.8"
                                            viewBox="0 0 24 24" class="h-5 w-5 {{ $isFavorited ? 'text-neutral-900' : '' }}">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </form>
                            @endauth

                            {{-- Content --}}
                            <div class="flex-1 flex flex-col p-4 sm:p-5">
                                <a href="{{ route('shop.show', $product->slug) }}" class="block flex-1">
                                    <p class="text-[10px] font-semibold uppercase tracking-[0.18em] text-neutral-400 mb-2">
                                        {{ $product->category->name ?? 'General' }}
                                    </p>

                                    <h3
                                        class="text-sm sm:text-[15px] font-semibold text-neutral-900 line-clamp-2 leading-snug transition-colors duration-300 group-hover:text-neutral-700">
                                        {{ $product->name }}
                                    </h3>
                                </a>

                                <div class="mt-4 flex flex-col gap-3">
                                    {{-- Price --}}
                                    <p class="text-base sm:text-lg font-bold text-neutral-900">
                                        @if ($product->has_variants && $product->variants->count())
                                            @php
                                                $prices = $product->variants->pluck('price')->filter();
                                                $min = $prices->min();
                                                $max = $prices->max();
                                            @endphp

                                            @if ($min == $max)
                                                RM {{ number_format($min, 2) }}
                                            @else
                                                <span class="text-[10px] font-medium uppercase text-neutral-400 mr-1">
                                                    From
                                                </span>
                                                RM {{ number_format($min, 2) }}
                                            @endif
                                        @elseif ($product->is_open_amount)
                                            <span class="text-[10px] font-medium uppercase text-neutral-400 mr-1">
                                                From
                                            </span>
                                            RM {{ number_format($product->min_amount ?? 0, 2) }}
                                        @else
                                            RM {{ number_format($product->price ?? 0, 2) }}
                                        @endif
                                    </p>

                                    {{-- Button --}}
                                    <a href="{{ route('shop.show', $product->slug) }}"
                                        class="w-full inline-flex items-center justify-center rounded-full
                                               border border-neutral-200 bg-white
                                               py-2.5 text-xs sm:text-sm font-semibold text-neutral-800
                                               hover:bg-neutral-900 hover:text-white hover:border-neutral-900
                                               transition-all duration-300">
                                        View Product
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Desktop/Tablet Counter --}}
            <div class="hidden sm:flex justify-center mt-8">
                <div class="text-sm font-semibold tracking-[0.25em] text-neutral-400">
                    <span data-po-desktop-current>1</span> / <span data-po-desktop-total>1</span>
                </div>
            </div>

            {{-- Mobile pager --}}
            <div class="mt-6 sm:hidden flex items-center justify-center gap-6 select-none" data-po-mobile-pager>
                <button type="button"
                    class="w-9 h-9 rounded-full
                           bg-white border border-neutral-200 text-neutral-700
                           flex items-center justify-center
                           shadow-sm
                           transition-all duration-200
                           hover:bg-neutral-900 hover:text-white
                           active:scale-95"
                    data-po-mobile-prev aria-label="Previous page">
                    <span class="text-lg font-bold">‹</span>
                </button>

                <div class="text-[11px] font-semibold tracking-[0.25em] text-neutral-400">
                    <span data-po-mobile-current>1</span> / <span data-po-mobile-total>1</span>
                </div>

                <button type="button"
                    class="w-9 h-9 rounded-full
                           bg-white border border-neutral-200 text-neutral-700
                           flex items-center justify-center
                           shadow-sm
                           transition-all duration-200
                           hover:bg-neutral-900 hover:text-white
                           active:scale-95"
                    data-po-mobile-next aria-label="Next page">
                    <span class="text-lg font-bold">›</span>
                </button>
            </div>

        @else
            {{-- Empty --}}
            <div
                class="flex flex-col items-center justify-center rounded-[2rem]
                       border border-dashed border-neutral-200 bg-neutral-50 py-16 px-4">
                <div class="w-16 h-16 rounded-full bg-white border border-neutral-200 flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-neutral-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <p class="text-neutral-500 font-medium text-center">
                    Popular picks will appear here once customers start exploring.
                </p>
                <a href="{{ route('shop.index') }}"
                    class="mt-4 text-sm font-semibold text-neutral-800 underline underline-offset-4">
                    Browse products
                </a>
            </div>
        @endif

    </div>

    {{-- Pagination script --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const grid = document.querySelector('[data-po-grid]');
            if (!grid) return;

            const items = Array.from(grid.querySelectorAll('[data-po-item]'));

            const dPrev = document.querySelector('[data-po-desktop-prev]');
            const dNext = document.querySelector('[data-po-desktop-next]');
            const dCur = document.querySelector('[data-po-desktop-current]');
            const dTot = document.querySelector('[data-po-desktop-total]');

            const mPager = document.querySelector('[data-po-mobile-pager]');
            const mPrev = document.querySelector('[data-po-mobile-prev]');
            const mNext = document.querySelector('[data-po-mobile-next]');
            const mCur = document.querySelector('[data-po-mobile-current]');
            const mTot = document.querySelector('[data-po-mobile-total]');

            const mqMobile = window.matchMedia('(max-width: 639px)');
            const mqLgUp = window.matchMedia('(min-width: 1024px)');

            let dPage = 1;
            let mPage = 1;

            function perPageDesktop() {
                return mqLgUp.matches ? 5 : 8;
            }

            function renderDesktop() {
                if (mqMobile.matches) return;

                const per = perPageDesktop();
                const total = Math.max(1, Math.ceil(items.length / per));
                dPage = Math.min(dPage, total);

                const start = (dPage - 1) * per;
                const end = start + per;

                items.forEach((it, idx) => it.classList.toggle('hidden', !(idx >= start && idx < end)));

                if (dCur && dTot) {
                    dCur.textContent = String(dPage);
                    dTot.textContent = String(total);
                }

                if (dPrev && dNext) {
                    dPrev.disabled = dPage <= 1;
                    dNext.disabled = dPage >= total;
                    dPrev.classList.toggle('opacity-30', dPrev.disabled);
                    dNext.classList.toggle('opacity-30', dNext.disabled);
                }
            }

            function renderMobile() {
                if (!mqMobile.matches) {
                    if (mPager) mPager.classList.add('hidden');
                    return;
                }

                if (mPager) mPager.classList.remove('hidden');

                const per = 2;
                const total = Math.max(1, Math.ceil(items.length / per));
                mPage = Math.min(mPage, total);

                const start = (mPage - 1) * per;
                const end = start + per;

                items.forEach((it, idx) => it.classList.toggle('hidden', !(idx >= start && idx < end)));

                if (mCur && mTot) {
                    mCur.textContent = String(mPage);
                    mTot.textContent = String(total);
                }

                if (mPrev && mNext) {
                    mPrev.disabled = mPage <= 1;
                    mNext.disabled = mPage >= total;
                    mPrev.classList.toggle('opacity-30', mPrev.disabled);
                    mNext.classList.toggle('opacity-30', mNext.disabled);
                }
            }

            function renderAll() {
                items.forEach(it => it.classList.remove('hidden'));

                if (mqMobile.matches) {
                    renderMobile();
                } else {
                    if (mPager) mPager.classList.add('hidden');
                    renderDesktop();
                }
            }

            if (dPrev) dPrev.addEventListener('click', () => {
                if (dPage > 1) {
                    dPage--;
                    renderAll();
                }
            });

            if (dNext) dNext.addEventListener('click', () => {
                const total = Math.max(1, Math.ceil(items.length / perPageDesktop()));
                if (dPage < total) {
                    dPage++;
                    renderAll();
                }
            });

            if (mPrev) mPrev.addEventListener('click', () => {
                if (mPage > 1) {
                    mPage--;
                    renderAll();
                }
            });

            if (mNext) mNext.addEventListener('click', () => {
                const per = 2;
                const total = Math.max(1, Math.ceil(items.length / per));
                if (mPage < total) {
                    mPage++;
                    renderAll();
                }
            });

            mqMobile.addEventListener?.('change', renderAll);
            mqLgUp.addEventListener?.('change', renderAll);
            window.addEventListener('resize', renderAll);

            renderAll();
        });
    </script>

</section>