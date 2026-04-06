<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#D4AF37">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/images/icon-192.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="NEXTORA.MY">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NEXTORA.MY') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .notice-marquee {
            flex-shrink: 0;
            min-width: max-content;
            animation: notice-marquee 28s linear infinite;
        }

        @keyframes notice-marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col bg-[#FAF9F6]">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        @php
            $hasMobileTab = !request()->routeIs('login', 'register');
        @endphp

        <!-- Page Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>

    {{-- Global Footer --}}
    <footer
        class="bg-[#111111] text-white pt-16 border-t border-[#1f1f1f] {{ $hasMobileTab ? 'pb-32 lg:pb-8' : 'pb-8' }}">
        <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Top Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">

                <!-- Brand -->
                <div class="lg:col-span-2">
                    {{-- Brand --}}
                    <div style="font-family: 'Cinzel', serif;"
                        class="text-3xl font-black uppercase tracking-tighter text-transparent bg-clip-text bg-gradient-to-tr from-[#9C7414] via-[#E7C76A] to-[#D4AF37]">
                        NEXTORA
                    </div>

                    {{-- Tagline --}}
                    <div class="mt-1 text-[11px] tracking-[0.25em] text-neutral-400 uppercase">
                        Your Vision, Our Creation
                    </div>

                    <p class="mt-4 text-sm text-white/70 leading-7 max-w-md">
                        A premium ecommerce experience crafted with elegance, simplicity,
                        and a refined gold, white, and black identity. Discover curated
                        products that elevate your everyday lifestyle.
                    </p>

                    <!-- Payment Methods -->
                    <div class="mt-6">
                        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-3">

                            <!-- Item -->
                            <div
                                class="bg-white border border-gray-200 rounded-lg flex items-center justify-center shadow-sm">
                                <img src="/images/payments/fpx.png" alt="FPX" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/visa.png" alt="Visa" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/mastercard.png" alt="Mastercard" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/tng.png" alt="Touch n Go" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/grabpay.png" alt="GrabPay" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/boost.png" alt="Boost" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/shopeepay.png" alt="ShopeePay" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/alipay.png" alt="Alipay" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/wechatpay.png" alt="WeChat Pay" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/mae.png" alt="MAE" class="h-6 object-contain">
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center shadow-sm">
                                <img src="/images/payments/mcash.png" alt="MCash" class="h-6 object-contain">
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Explore -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-[0.2em] text-[#D4AF37]">
                        Explore
                    </h4>

                    <ul class="mt-5 space-y-4 text-sm text-white/70">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                        <li><a href="{{ route('shop.index') }}" class="hover:text-white">Shop</a></li>
                        <li><a href="{{ route('vouchers.index') }}" class="hover:text-white">Vouchers</a></li>
                        <li><a href="{{ route('agents.index') }}" class="hover:text-white">Verify Agents</a></li>
                        <li><a href="{{ route('reward-point') }}" class="hover:text-white">Reward Point</a></li>
                        <li><a href="{{ route('web-development') }}" class="hover:text-white">Web Development</a>
                        </li>
                        <li><a href="{{ route('payment-gateway') }}" class="hover:text-white">Payment Gateway</a>
                        </li>

                    </ul>
                </div>


                <!-- Support -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-[0.2em] text-[#D4AF37]">
                        Support
                    </h4>

                    <ul class="mt-5 space-y-4 text-sm text-white/70">
                        <li><a href="{{ route('terms') }}" class="hover:text-white">Terms & Conditions</a></li>
                        <li><a href="{{ route('privacy') }}" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="{{ route('shipping') }}" class="hover:text-white">Shipping & Delivery</a>
                        </li>
                        <li><a href="{{ route('returns') }}" class="hover:text-white">Returns & Refunds</a></li>
                        <li><a href="{{ route('guideline') }}" class="hover:text-white">Guideline</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-white">Faq</a></li>
                    </ul>
                </div>

                <!-- Account -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-[0.2em] text-[#D4AF37]">
                        Account
                    </h4>

                    <ul class="mt-5 space-y-4 text-sm text-white/70">
                        @auth
                            <li><a href="{{ route('account.index') }}" class="hover:text-white">Dashboard</a>
                            </li>
                            <li><a href="{{ route('account.orders.index') }}" class="hover:text-white">My Orders</a>
                            </li>
                            <li><a href="{{ route('account.favorites.index') }}"class="hover:text-white">My
                                    Wishlist</a>
                            </li>
                            <li><a href="{{ route('account.address.index') }}"class="hover:text-white">Shipping
                                    Addresses</a>
                            </li>
                            <li><a href="{{ route('account.reviews.index') }}"class="hover:text-white">Reviews</a>
                            </li>
                            <li><a href="{{ route('account.profile.edit') }}"class="hover:text-white">Profile
                                    Settings</a>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="hover:text-white">Login</a></li>
                            <li><a href="{{ route('register') }}" class="hover:text-white">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="mt-14 border-t border-white/10 pt-6">

                <div class="flex flex-col md:flex-row items-center justify-between gap-4">

                    <!-- Copyright -->
                    <p class="text-sm text-white/50">
                        © {{ date('Y') }} NEXTORA. All rights reserved.
                    </p>

                    <!-- Social -->
                    <div class="flex items-center gap-4 text-white/60 text-sm">
                        <a href="https://wa.me/60182222507" class="hover:text-white">WhatsApp</a>
                        <a href="https://www.facebook.com/nextoraone" class="hover:text-white">Facebook</a>
                        <a href="https://www.tiktok.com/@nextoraone?_r=1&_t=ZS-92KOk1nUlBh"
                            class="hover:text-white">TikTok</a>
                    </div>

                </div>
            </div>

        </div>
    </footer>

    {{-- Back to Top Button --}}
    <button id="backToTopBtn"
        class="hidden fixed right-4 bottom-24 z-50
           w-12 h-12 rounded-full
           bg-[#D4AF37] text-white
           flex items-center justify-center
           shadow-lg shadow-[#D4AF37]/40
           hover:bg-[#c49a2f] transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <a href="https://wa.me/60182222507" target="_blank"
        class="hidden lg:flex
          fixed right-4 bottom-4 z-50
          w-12 h-12 rounded-full
          bg-[#25D366] text-white
          items-center justify-center
          shadow-lg shadow-[#25D366]/40
          hover:bg-[#1DA851] transition-all duration-300 animate-bounce">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path
                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
        </svg>

    </a>

    <script>
        function refreshCartCount() {
            console.log('Refreshing cart count…');

            const badges = document.querySelectorAll('[data-cart-count]');
            if (!badges.length) return;

            fetch("{{ route('cart.count') }}", {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (typeof data.count !== 'undefined') {
                        badges.forEach(badge => {
                            badge.textContent = data.count;

                            // 可选：0 就隐藏（你要就开，不要就删）
                            // badge.classList.toggle('hidden', Number(data.count) <= 0);
                        });
                    }
                })
                .catch(() => {});
        }

        document.addEventListener('DOMContentLoaded', refreshCartCount);

        window.addEventListener('pageshow', function(event) {
            const navEntries = performance.getEntriesByType('navigation');
            const navType = navEntries[0] ? navEntries[0].type : null;

            if (event.persisted || navType === 'back_forward') {
                refreshCartCount();
            }
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btn = document.getElementById("backToTopBtn");

            // 显示 / 隐藏按钮
            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    btn.classList.remove("hidden");
                } else {
                    btn.classList.add("hidden");
                }
            });

            // 回到顶部（平滑滚动）
            btn.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>

    @if (session('success'))
        <script>
            (function() {
                const isMobile = window.matchMedia('(max-width: 640px)').matches;
                const message = @json(session('success'));

                if (!isMobile) {
                    // 💻 Desktop：原本 SweetAlert toast
                    Swal.fire({
                        icon: 'success',
                        title: message,
                        toast: true,
                        position: 'bottom-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                    });
                } else {
                    // 📱 Mobile：Bottom Snackbar
                    const bar = document.createElement('div');
                    bar.innerHTML = `
                    <div class="fixed left-1/2 bottom-24 -translate-x-1/2 z-[9999]
                                bg-black text-white
                                px-5 py-3 rounded-full
                                text-sm font-semibold
                                shadow-xl
                                flex items-center gap-2
                                animate-[fadeUp_.25s_ease-out]">
                        <span class="inline-block w-2 h-2 rounded-full bg-emerald-400"></span>
                        ${message}
                    </div>
                `;

                    document.body.appendChild(bar);

                    setTimeout(() => {
                        bar.remove();
                    }, 2200);
                }
            })();
        </script>

        <style>
            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translate(-50%, 12px);
                }

                to {
                    opacity: 1;
                    transform: translate(-50%, 0);
                }
            }
        </style>
    @endif



    @if (session('cart_added'))
        <div id="cartAddedOverlay" class="fixed inset-0 z-[9999] flex items-center justify-center">

            {{-- 背景遮罩 --}}
            <div class="absolute inset-0 bg-black/40"></div>

            {{-- 中间提示卡 --}}
            <div
                class="relative bg-white rounded-3xl shadow-2xl px-8 py-6 w-[90%] max-w-sm text-center
                   animate-[fadeInUp_.25s_ease-out]">

                <div
                    class="mx-auto mb-4 w-14 h-14 rounded-full
                        bg-[#D4AF37]/15 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#8f6a10]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-1">
                    Added to cart
                </h3>

                <p class="text-sm text-gray-500 mb-6">
                    Item has been added successfully
                </p>

                <div class="flex gap-3">
                    <a href="{{ route('cart.index') }}"
                        class="flex-1 py-3 rounded-full bg-[#D4AF37] text-white font-bold">
                        View Cart
                    </a>

                    <button onclick="closeCartAdded()"
                        class="flex-1 py-3 rounded-full border border-gray-200 text-gray-600 font-bold">
                        Continue
                    </button>
                </div>
            </div>
        </div>

        <script>
            function closeCartAdded() {
                document.getElementById('cartAddedOverlay')?.remove();
            }

            // 自动关闭（可调）
            setTimeout(closeCartAdded, 3000);
        </script>
    @endif

    @if (session('review_success'))
        @php
            $rev = session('review_success');
            $revTitle = $rev['title'] ?? 'Review submitted';
            $revText = $rev['text'] ?? 'Thanks for your feedback!';
            $revPts = (int) ($rev['points'] ?? 0);
        @endphp

        <div id="reviewSuccessOverlay" class="fixed inset-0 z-[9999] flex items-center justify-center">
            {{-- 背景遮罩 --}}
            <div class="absolute inset-0 bg-black/40" onclick="closeReviewSuccess()"></div>

            {{-- 中间提示卡 --}}
            <div
                class="relative bg-white rounded-3xl shadow-2xl px-8 py-6 w-[90%] max-w-sm text-center
                   animate-[fadeInUp_.25s_ease-out]">

                <div
                    class="mx-auto mb-4 w-14 h-14 rounded-full
                       bg-[#D4AF37]/15 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#8f6a10]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-1">
                    {{ $revTitle }}
                </h3>

                <p class="text-sm text-gray-500 mb-3">
                    {{ $revText }}
                </p>

                {{-- Points pill --}}
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#D4AF37]/10 border border-[#D4AF37]/20 mb-6">

                    <svg class="w-4 h-4 text-[#8f6a10]" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <span class="text-sm font-black text-[#8f6a10]">
                        +{{ $revPts }} pts
                    </span>
                </div>

                <div class="flex gap-3">
                    {{-- 你可以换成你自己的 route --}}
                    <a href="{{ route('account.reviews.index') }}"
                        class="flex-1 py-3 rounded-full bg-[#D4AF37] text-white font-bold">
                        View Reviews
                    </a>

                    <button type="button" onclick="closeReviewSuccess()"
                        class="flex-1 py-3 rounded-full border border-gray-200 text-gray-600 font-bold">
                        Continue
                    </button>
                </div>

                {{-- 右上角关闭 --}}
                <button type="button" onclick="closeReviewSuccess()"
                    class="absolute top-3 right-3 w-10 h-10 rounded-full hover:bg-gray-50 flex items-center justify-center text-gray-400 hover:text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <script>
            function closeReviewSuccess() {
                document.getElementById('reviewSuccessOverlay')?.remove();
            }

            // 自动关闭（可调）
            setTimeout(closeReviewSuccess, 3000);
        </script>

        <style>
            @keyframes fadeInUp_ {
                from {
                    opacity: 0;
                    transform: translateY(12px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    @endif


    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

    @if ($popupBanner)
        <div id="popupBannerWrap" class="fixed inset-0 z-[9999] hidden items-center justify-center px-4">
            <div class="absolute inset-0 bg-black/60 pointer-events-none"></div>

            <div id="popupBannerCard"
                class="relative w-full max-w-[520px] rounded-2xl overflow-hidden shadow-2xl border border-white/20
                opacity-0 translate-y-3 scale-[0.98] transition-all duration-300">
                <button id="popupBannerClose"
                    class="absolute top-3 right-3 z-10 w-9 h-9 rounded-full bg-white grid place-items-center shadow">
                    ✕
                </button>

                <a href="{{ $popupBanner->link ?? '#' }}" class="block">
                    <img src="{{ asset('storage/' . $popupBanner->image) }}" class="w-full h-auto block"
                        alt="Popup Banner">
                </a>
            </div>
        </div>

        <script>
            (function() {
                const bannerId = "{{ $popupBanner->id }}";
                const days = {{ (int) $popupBanner->cooldown_days }};
                const key = "popup_banner_next_" + bannerId;

                const wrap = document.getElementById("popupBannerWrap");
                const card = document.getElementById("popupBannerCard");
                const btn = document.getElementById("popupBannerClose");
                if (!wrap || !card || !btn) return;

                const now = Date.now();
                const next = parseInt(localStorage.getItem(key) || "0", 10);

                function openPopup() {
                    wrap.classList.remove("hidden");
                    wrap.classList.add("flex");
                    requestAnimationFrame(() => {
                        card.classList.remove("opacity-0", "translate-y-3", "scale-[0.98]");
                        card.classList.add("opacity-100", "translate-y-0", "scale-100");
                    });
                }

                function closePopup() {
                    card.classList.remove("opacity-100", "translate-y-0", "scale-100");
                    card.classList.add("opacity-0", "translate-y-3", "scale-[0.98]");

                    const cooldown = now + (days * 24 * 60 * 60 * 1000);
                    localStorage.setItem(key, String(cooldown));

                    setTimeout(() => {
                        wrap.remove();
                    }, 200);
                }

                if (!next || now >= next) openPopup();

                btn.addEventListener("click", closePopup);
                wrap.addEventListener("click", (e) => {
                    if (e.target === wrap) closePopup();
                });
                document.addEventListener("keydown", (e) => {
                    if (e.key === "Escape") closePopup();
                });
            })();
        </script>
    @endif


    @stack('scripts')

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js')
                    .then(function(registration) {
                        console.log('Service Worker registered:', registration.scope);
                    })
                    .catch(function(error) {
                        console.error('Service Worker registration failed:', error);
                    });
            });
        }
    </script>
</body>

</html>
