<x-app-layout>
    <div class="bg-[#F9F7F2]">

        <div class="relative overflow-hidden">
            <div class="relative z-10">

                {{-- =========================
                HERO / BANNER SECTION
            ========================== --}}
                <section class="w-full relative z-0" data-banner-slider>
                    <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8 pt-6 lg:pt-8 pb-8 lg:pb-10">

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-6 items-stretch">

                            {{-- Main Banner --}}
                            <div class="lg:col-span-8">
                                <div
                                    class="relative overflow-hidden rounded-[2rem] bg-neutral-100 border border-neutral-200 shadow-sm">

                                    @if (isset($banners) && $banners->count())
                                        <div
                                            class="relative w-full aspect-[16/10] sm:aspect-[16/8] lg:h-[520px] lg:aspect-auto">
                                            <div class="absolute inset-0 flex h-full transition-transform duration-700 ease-out"
                                                data-banner-track>
                                                @foreach ($banners as $banner)
                                                    @php
                                                        $url = $banner->link_url ?: route('shop.index');
                                                    @endphp

                                                    <a href="{{ $url }}"
                                                        class="relative w-full h-full shrink-0 block group">
                                                        <img src="{{ asset('storage/' . $banner->image_path) }}"
                                                            alt="Banner"
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
                                                            class="w-2.5 h-2.5 rounded-full bg-white/50 hover:bg-white transition"
                                                            data-banner-dot="{{ $index }}"></button>
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
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 lg:gap-6 h-full">

                                    <a href="{{ route('shop.index') }}"
                                        class="group relative overflow-hidden rounded-[2rem] border border-neutral-200 bg-neutral-50 min-h-[180px] lg:min-h-[248px] p-6 flex flex-col justify-between transition hover:shadow-md">
                                        <div>
                                            <span
                                                class="text-[11px] font-semibold uppercase tracking-[0.18em] text-neutral-500">
                                                Trending Now
                                            </span>
                                            <h3 class="mt-3 text-xl font-bold tracking-tight text-neutral-900">
                                                Best Sellers
                                            </h3>
                                            <p class="mt-2 text-sm text-neutral-500 max-w-xs">
                                                Explore products customers keep coming back for.
                                            </p>
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-semibold text-neutral-900">Explore</span>
                                            <span
                                                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-neutral-900 text-white transition group-hover:translate-x-1">
                                                →
                                            </span>
                                        </div>
                                    </a>

                                    <a href="{{ route('vouchers.index') }}"
                                        class="group relative overflow-hidden rounded-[2rem]
           border border-[#D4AF37]/20
           bg-gradient-to-br from-[#0F0F0F] to-[#1A1A1A]
           min-h-[180px] lg:min-h-[248px]
           p-6 flex flex-col justify-between
           transition-all duration-300
           hover:shadow-xl hover:shadow-black/20 hover:-translate-y-1
           hover:border-[#D4AF37]/40">

                                        {{-- subtle glow --}}
                                        <div
                                            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500
                bg-gradient-to-tr from-[#D4AF37]/10 via-transparent to-transparent">
                                        </div>

                                        <div class="relative z-10">
                                            <span
                                                class="text-[11px] font-semibold uppercase tracking-[0.18em]
                   text-[#D4AF37]/80">
                                                Save More
                                            </span>

                                            <h3 class="mt-3 text-xl font-bold tracking-tight text-white">
                                                Voucher Deals
                                            </h3>

                                            <p class="mt-2 text-sm text-white/70 max-w-xs">
                                                Unlock exclusive savings and seasonal offers in one place.
                                            </p>
                                        </div>

                                        <div class="relative z-10 flex items-center justify-between">
                                            <span
                                                class="text-sm font-semibold text-white group-hover:text-[#D4AF37] transition">
                                                View Vouchers
                                            </span>

                                            <span
                                                class="inline-flex h-10 w-10 items-center justify-center rounded-full
                   bg-white text-neutral-900
                   transition-all duration-300
                   group-hover:bg-[#D4AF37] group-hover:text-black
                   group-hover:translate-x-1">
                                                →
                                            </span>
                                        </div>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                {{-- =========================
                CATEGORY SECTION
            ========================== --}}
                <section id="categories" class="relative scroll-mt-40 pt-1 pb-6 lg:pb-8">
                    <div class="mx-auto max-w-7xl5 px-4 sm:px-6 lg:px-8">

                        @if (isset($categories) && $categories->count())

                            <div class="mb-5 flex items-end justify-between gap-4">
                                <div>
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.22em] text-[#B8922E]">
                                        Shop by Category
                                    </p>
                                    <h2 class="mt-2 text-2xl sm:text-3xl font-bold tracking-tight text-neutral-900">
                                        Browse what fits your lifestyle
                                    </h2>
                                </div>

                                <a href="{{ route('shop.index') }}"
                                    class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-[#8f6a10] hover:text-[#6f5206] transition">
                                    View all
                                    <span>→</span>
                                </a>
                            </div>

                            <div class="overflow-x-auto scrollbar-hide" data-scroll-x>
                                <div class="flex gap-4 min-w-max pb-2">

                                    @foreach ($categories as $category)
                                        <a href="{{ route('shop.index', ['category' => $category->slug]) }}"
                                            class="group block w-[160px] sm:w-[180px] lg:w-[190px] shrink-0">

                                            <div
                                                class="rounded-[2rem]
                                       border border-[#D4AF37]/15
                                       bg-white
                                       overflow-hidden
                                       shadow-[0_6px_18px_rgba(0,0,0,0.04)]
                                       transition-all duration-300
                                       hover:-translate-y-1
                                       hover:shadow-[0_14px_32px_rgba(0,0,0,0.08)]
                                       hover:border-[#D4AF37]/40">

                                                <div class="aspect-[4/4] bg-[#FBFAF7] overflow-hidden">
                                                    @if ($category->icon)
                                                        <img src="{{ asset('storage/' . $category->icon) }}"
                                                            alt="{{ $category->name }}"
                                                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                                    @else
                                                        <div class="w-full h-full flex items-center justify-center">
                                                            <span
                                                                class="text-[11px] text-neutral-300 font-semibold uppercase tracking-[0.18em]">
                                                                No Image
                                                            </span>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="p-4">
                                                    <div class="flex items-center justify-between gap-3">
                                                        <span
                                                            class="text-sm font-semibold tracking-tight text-neutral-900 line-clamp-1
                                                   group-hover:text-[#8f6a10] transition-colors">
                                                            {{ $category->name }}
                                                        </span>

                                                        <span
                                                            class="inline-flex h-8 w-8 items-center justify-center rounded-full
                                                   bg-[#F6F1E4] text-[#8f6a10]
                                                   transition-all duration-300
                                                   group-hover:bg-[#D4AF37] group-hover:text-black">
                                                            →
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>

                        @endif
                    </div>
                </section>

            </div>
        </div>

        {{-- Partials --}}
        @include('shop.partials.new-arrivals')
        @include('shop.partials.popular-product')
        @include('shop.partials.reviews')
        @include('shop.partials.voucher-promo')
        @include('shop.partials.trust-value')
        @include('shop.partials.payment-methods')
        @include('shop.partials.bottom-cta')
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
                        dot.classList.add('bg-white');
                        dot.classList.remove('bg-white/40');
                    } else {
                        dot.classList.remove('bg-white');
                        dot.classList.add('bg-white/40');
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
                dot.addEventListener('click', () => {
                    goTo(idx);
                    restartAuto();
                });
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
