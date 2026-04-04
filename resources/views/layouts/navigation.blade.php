<div class="sticky top-0 z-50">

    {{-- Notice Bar --}}
    <div class="relative overflow-hidden border-b border-[#D4AF37]/20 bg-neutral-900 text-white">
        <div
            class="pointer-events-none absolute inset-y-0 left-0 w-16 bg-gradient-to-r from-neutral-900 to-transparent z-10">
        </div>
        <div
            class="pointer-events-none absolute inset-y-0 right-0 w-16 bg-gradient-to-l from-neutral-900 to-transparent z-10">
        </div>

        <div class="flex whitespace-nowrap py-2">
            <div
                class="notice-marquee flex items-center gap-10 pr-10 text-[11px] font-semibold uppercase tracking-[0.22em] text-white/90">
                <span>Free Shipping Above RM150</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Premium Quality Custom Gifts</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Fast Response Support</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Exclusive Member Rewards</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Free Shipping Above RM150</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Premium Quality Custom Gifts</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Fast Response Support</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Exclusive Member Rewards</span>
            </div>

            <div aria-hidden="true"
                class="notice-marquee flex items-center gap-10 pr-10 text-[11px] font-semibold uppercase tracking-[0.22em] text-white/90">
                <span>Free Shipping Above RM150</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Premium Quality Custom Gifts</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Fast Response Support</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Exclusive Member Rewards</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Free Shipping Above RM150</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Premium Quality Custom Gifts</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Fast Response Support</span>
                <span class="text-[#D4AF37]">✦</span>
                <span>Exclusive Member Rewards</span>
            </div>
        </div>
    </div>

    <nav x-data="{ mobileMenu: false, searchOpen: false, programOpen: false, helpOpen: false, userOpen: false }" class="border-b border-neutral-200 bg-white/95 backdrop-blur-xl">

        <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">

            {{-- =========================
                DESKTOP
            ========================== --}}
            <div class="hidden lg:flex h-20 items-center justify-between gap-8">

                {{-- Left: Brand --}}
                <div class="flex items-center shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <div class="leading-tight">
                            {{-- <div style="font-family: 'Cinzel', serif;"
                                class="text-3xl font-bold uppercase text-transparent bg-clip-text bg-gradient-to-b from-[#E7C76A] via-[#D4AF37] to-[#9C7414]">
                                NEXTORA
                            </div> --}}
                            <div style="font-family: 'Cinzel', serif;"
                                class="text-3xl font-black uppercase tracking-tighter text-transparent bg-clip-text bg-gradient-to-tr from-[#9C7414] via-[#E7C76A] to-[#D4AF37]">
                                NEXTORA
                            </div>
                            <div class="text-[11px] tracking-[0.25em] text-neutral-400 uppercase">
                                Your Vision, Our Creation
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Center: Main Nav --}}
                <div class="flex-1 flex items-center justify-center">
                    <div class="flex items-center gap-2">

                        @php
                            $navBase =
                                'px-4 py-2 text-[13px] font-semibold tracking-[0.12em] uppercase rounded-full transition';
                            $navIdle = 'text-neutral-600 hover:text-neutral-900 hover:bg-neutral-100';
                            $navActive = 'text-neutral-900 bg-neutral-100';
                        @endphp

                        <a href="{{ route('home') }}"
                            class="{{ $navBase }} {{ request()->routeIs('home') ? $navActive : $navIdle }}">
                            Home
                        </a>

                        <a href="{{ route('shop.index') }}"
                            class="{{ $navBase }} {{ request()->routeIs('shop.*') ? $navActive : $navIdle }}">
                            Shop
                        </a>

                        <a href="{{ route('vouchers.index') }}"
                            class="{{ $navBase }} {{ request()->routeIs('vouchers.*') ? $navActive : $navIdle }}">
                            Vouchers
                        </a>

                        {{-- Programs --}}
                        <div class="relative" x-data="{ open: false }">
                            <button type="button" @click="open = !open" @click.outside="open = false"
                                class="{{ $navBase }} {{ $navIdle }} flex items-center gap-2">
                                Programs
                                <svg class="h-4 w-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>

                            <div x-cloak x-show="open" x-transition
                                class="absolute left-0 top-full mt-3 w-56 rounded-2xl border border-neutral-200 bg-white shadow-xl overflow-hidden">
                                <div class="p-2">
                                    <a href="{{ route('reward-point') }}"
                                        class="block px-4 py-3 rounded-xl text-sm font-medium text-neutral-700 hover:bg-neutral-100 hover:text-neutral-900">
                                        Reward Point
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Help --}}
                        <div class="relative" x-data="{ open: false }">
                            <button type="button" @click="open = !open" @click.outside="open = false"
                                class="{{ $navBase }} {{ $navIdle }} flex items-center gap-2">
                                Help
                                <svg class="h-4 w-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>

                            <div x-cloak x-show="open" x-transition
                                class="absolute left-0 top-full mt-3 w-56 rounded-2xl border border-neutral-200 bg-white shadow-xl overflow-hidden">
                                <div class="p-2">
                                    <a href="{{ route('guideline') }}"
                                        class="block px-4 py-3 rounded-xl text-sm font-medium text-neutral-700 hover:bg-neutral-100 hover:text-neutral-900">
                                        Guideline
                                    </a>

                                    <a href="{{ route('faq') }}"
                                        class="block px-4 py-3 rounded-xl text-sm font-medium text-neutral-700 hover:bg-neutral-100 hover:text-neutral-900">
                                        FAQ
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Right: Search / Cart / User --}}
                <div class="flex items-center gap-3 shrink-0">

                    <form method="GET" action="{{ route('shop.index') }}" class="hidden xl:block">
                        <div class="relative">
                            <input type="text" name="q" value="{{ request('q') }}"
                                placeholder="Search products"
                                class="w-64 rounded-full border border-neutral-200 bg-neutral-50 px-4 py-2.5 pr-11 text-sm text-neutral-800 placeholder:text-neutral-400 focus:border-neutral-300 focus:bg-white focus:ring-0 outline-none transition">

                            <button type="submit"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-neutral-400 hover:text-neutral-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                                </svg>
                            </button>
                        </div>
                    </form>

                    <a href="{{ route('cart.index') }}"
                        class="relative inline-flex h-11 w-11 items-center justify-center rounded-full border border-neutral-200 text-neutral-700 hover:bg-neutral-100 hover:text-neutral-900 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>

                        <span data-cart-count
                            class="absolute -top-1 -right-1 min-w-[20px] h-5 px-1 rounded-full bg-neutral-900 text-white text-[10px] font-bold flex items-center justify-center">
                            {{ auth()->user()?->cart?->items?->count() ?? 0 }}
                        </span>
                    </a>

                    @auth
                        <div class="relative" x-data="{ open: false }">
                            <button type="button" @click="open = !open" @click.outside="open = false"
                                class="flex items-center gap-3 rounded-full border border-neutral-200 bg-white pl-1 pr-4 py-1.5 hover:bg-neutral-50 transition">
                                <div
                                    class="h-9 w-9 rounded-full bg-neutral-900 text-white flex items-center justify-center text-xs font-bold uppercase">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <span class="max-w-[120px] truncate text-sm font-semibold text-neutral-800">
                                    {{ Auth::user()->name }}
                                </span>
                                <svg class="h-4 w-4 text-neutral-500 transition-transform" :class="{ 'rotate-180': open }"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>

                            <div x-cloak x-show="open" x-transition
                                class="absolute right-0 top-full mt-3 w-64 rounded-2xl border border-neutral-200 bg-white shadow-xl overflow-hidden">
                                <div class="p-2">
                                    <a href="{{ route('account.index') }}"
                                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-neutral-700 hover:bg-neutral-100">
                                        <span>Dashboard</span>
                                    </a>

                                    <a href="{{ route('account.orders.index') }}"
                                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-neutral-700 hover:bg-neutral-100">
                                        <span>My Orders</span>
                                    </a>

                                    <a href="{{ route('account.favorites.index') }}"
                                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-neutral-700 hover:bg-neutral-100">
                                        <span>My Wishlist</span>
                                    </a>

                                    <a href="{{ route('account.profile.edit') }}"
                                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-neutral-700 hover:bg-neutral-100">
                                        <span>Profile Settings</span>
                                    </a>

                                    <div class="my-2 border-t border-neutral-200"></div>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-red-500 hover:bg-red-50">
                                            <span>Log Out</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center justify-center rounded-full bg-neutral-900 px-5 py-2.5 text-sm font-bold text-white hover:bg-black transition">
                            Login
                        </a>
                    @endauth

                </div>
            </div>

            {{-- =========================
                MOBILE
            ========================== --}}
            <div class="flex lg:hidden h-20 items-center justify-between gap-3">

                <div class="flex items-center gap-2">
                    <div class="leading-tight">
                        <div style="font-family: 'Cinzel', serif;"
                            class="text-2xl font-bold uppercase text-transparent bg-clip-text bg-gradient-to-b from-[#E7C76A] via-[#D4AF37] to-[#9C7414]">
                            NEXTORA
                        </div>
                        <div class="text-[10px] tracking-[0.25em] text-neutral-400 uppercase">
                            Your Vision, Our Creation
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-2">

                    <button type="button" @click="searchOpen = true"
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-neutral-200 text-neutral-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                        </svg>
                    </button>

                    <a href="{{ route('cart.index') }}"
                        class="relative inline-flex h-10 w-10 items-center justify-center rounded-full border border-neutral-200 text-neutral-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>

                        <span data-cart-count
                            class="absolute -top-1 -right-1 min-w-[18px] h-[18px] px-1 rounded-full bg-neutral-900 text-white text-[9px] font-bold flex items-center justify-center">
                            {{ auth()->user()?->cart?->items?->count() ?? 0 }}
                        </span>
                    </a>
                </div>
            </div>
        </div>

        {{-- =========================
            MOBILE SEARCH OVERLAY
        ========================== --}}
        <div x-cloak x-show="searchOpen" x-transition class="lg:hidden fixed inset-0 z-[70] bg-white">
            <div class="p-4 border-b border-neutral-200">
                <div class="flex items-center gap-3">
                    <form method="GET" action="{{ route('shop.index') }}" class="flex-1">
                        <div class="relative">
                            <input type="text" name="q" value="{{ request('q') }}"
                                placeholder="Search products..."
                                class="w-full rounded-2xl border border-neutral-200 bg-neutral-50 px-4 py-3 pr-10 text-sm text-neutral-800 placeholder:text-neutral-400 outline-none">

                            <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-neutral-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                                </svg>
                            </button>
                        </div>
                    </form>

                    <button type="button" @click="searchOpen = false"
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-neutral-200 text-neutral-700">
                        ✕
                    </button>
                </div>
            </div>
        </div>

    </nav>
</div>

{{-- ✅ Mobile Search Sheet (App-like) --}}
{{-- <div id="mobileSearchSheet" class="md:hidden fixed inset-0 z-[80] hidden">
    <div class="absolute inset-0 bg-black/60" onclick="toggleMobileSearch(false)"></div>

    <div class="absolute inset-x-0 top-0 bg-black/95 backdrop-blur border-b border-white/10 p-4">
        <div class="flex items-center gap-3">

            <form method="GET" action="{{ route('shop.index') }}" class="flex-1">
                <div class="relative group">
                    <input id="mobileSearchInput" type="text" name="q" value="{{ request('q') }}"
                        placeholder="Search products..."
                        class="w-full bg-white/10 text-white placeholder-gray-400 border border-white/10
                               rounded-2xl px-4 py-3 text-sm
                               focus:ring-2 focus:ring-[#D4AF37]/30 focus:bg-black focus:border-[#D4AF37]/40 transition-all">

                    <button type="submit"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-300 group-hover:text-[#D4AF37] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                        </svg>
                    </button>
                </div>
            </form>

            <button type="button" class="w-10 h-10 rounded-full bg-white/10 text-white grid place-items-center"
                onclick="toggleMobileSearch(false)">
                ✕
            </button>

        </div>
    </div>
</div> --}}

{{-- ✅ Mobile Bottom Tab Bar --}}
<div class="lg:hidden fixed inset-x-0 bottom-4 z-[60] px-4">
    <div class="mx-auto max-w-md rounded-2xl border border-neutral-200 bg-white/95 backdrop-blur-xl shadow-lg">
        <div class="grid grid-cols-4 py-2">

            {{-- Home --}}
            <a href="{{ route('home') }}"
                class="flex flex-col items-center justify-center py-2 rounded-xl
                {{ request()->routeIs('home') ? 'text-neutral-900' : 'text-neutral-400' }}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="text-[10px] font-medium mt-1">Home</span>
            </a>

            {{-- Shop --}}
            <a href="{{ route('shop.index') }}"
                class="flex flex-col items-center justify-center py-2 rounded-xl
                {{ request()->routeIs('shop.*') ? 'text-neutral-900' : 'text-neutral-400' }}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <span class="text-[10px] font-medium mt-1">Shop</span>
            </a>

            {{-- More --}}
            <button type="button" onclick="toggleMobileSheet(true, 'more')"
                class="flex flex-col items-center justify-center py-2 rounded-xl text-neutral-400 hover:text-neutral-700 transition">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="text-[10px] font-medium mt-1">More</span>
            </button>

            {{-- Profile --}}
            <button type="button" onclick="toggleMobileSheet(true, 'profile')"
                class="flex flex-col items-center justify-center py-2 rounded-xl text-neutral-400 hover:text-neutral-700 transition">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0ZM4.5 20.25a7.5 7.5 0 0115 0" />
                </svg>
                <span class="text-[10px] font-medium mt-1">Profile</span>
            </button>

        </div>
    </div>
</div>

@php
    $noTabRoutes = [
        'login',
        'register',
        'password.request',
        'password.email',
        'password.reset',
        'password.update',
        'verification.notice',
        'verification.verify',
    ];
@endphp

@if (!request()->routeIs(...$noTabRoutes))
    {{-- ✅ Mobile Bottom Sheet (shared) --}}
    <div id="mobileSheet"
        class="lg:hidden fixed inset-0 z-[70] invisible opacity-0 transition-all duration-300 overflow-hidden"
        aria-modal="true" role="dialog">

        {{-- Backdrop --}}
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="toggleMobileSheet(false)"></div>

        {{-- Sheet Container --}}
        <div id="mobileSheetContent"
            class="absolute inset-x-0 bottom-0 bg-white border-t border-neutral-200 rounded-t-[2rem] p-5 pb-8
               transition-transform duration-300 translate-y-full shadow-[0_-10px_40px_rgba(0,0,0,0.12)] max-h-[85vh] overflow-y-auto">

            {{-- Handlebar --}}
            <div class="w-12 h-1.5 bg-neutral-300 rounded-full mx-auto mb-5" onclick="toggleMobileSheet(false)"></div>

            {{-- ====== MORE CONTENT ====== --}}
            <div id="sheetMore" class="space-y-8 pb-4">

                {{-- Title Row --}}
                <div class="flex items-center justify-between px-1">
                    <div>
                        <h2 class="text-neutral-900 text-lg font-black tracking-tight">Explore More</h2>
                        <p class="text-[11px] text-neutral-400 font-medium uppercase tracking-wider">Quick Actions &
                            Support</p>
                    </div>
                    <button type="button" onclick="toggleMobileSheet(false)"
                        class="h-8 w-8 flex items-center justify-center rounded-full bg-neutral-100 text-neutral-500 hover:bg-neutral-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                {{-- Core Grid --}}
                <div class="grid grid-cols-4 gap-y-8 gap-x-4">
                    @php
                        $menuItems = [
                            [
                                'route' => null,
                                'label' => 'Chat',
                                'url' => 'https://wa.me/60182222507',
                                'icon' =>
                                    'M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 0 0.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z',
                            ],
                            [
                                'route' => 'vouchers.index',
                                'label' => 'Vouchers',
                                'icon' =>
                                    'M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z',
                            ],
                            [
                                'route' => 'agents.index',
                                'label' => 'Agents',
                                'icon' =>
                                    'M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z',
                            ],
                            [
                                'route' => 'reward-point',
                                'label' => 'Rewards',
                                'icon' =>
                                    'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.921-.755 1.688-1.54 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.784.57-1.838-.197-1.539-1.118l1.518-4.674a1 1 0 00-.363-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z',
                            ],
                            [
                                'route' => 'games.spin',
                                'label' => 'Spin Game',
                                'icon' =>
                                    'M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z',
                            ],
                            [
                                'route' => 'guideline',
                                'label' => 'Guide',
                                'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                            ],
                            [
                                'route' => 'faq',
                                'label' => 'FAQ',
                                'icon' =>
                                    'M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                            ],
                        ];
                    @endphp

                    @foreach ($menuItems as $item)
                        <a href="{{ $item['route'] ? route($item['route']) : $item['url'] }}"
                            @if (empty($item['route'])) target="_blank" rel="noopener noreferrer" @endif
                            class="flex flex-col items-center group touch-manipulation">

                            {{-- Icon Container --}}
                            <div class="relative mb-3">
                                <div
                                    class="w-16 h-16 rounded-[1.5rem] bg-neutral-50 flex items-center justify-center text-neutral-600
                                border border-neutral-100 shadow-sm
                                group-active:scale-90 group-hover:bg-[#D4AF37] group-hover:text-white group-hover:border-[#D4AF37] 
                                transition-all duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                            d="{{ $item['icon'] }}" />
                                    </svg>
                                </div>
                                {{-- Decorative Dot (Only shows on hover) --}}
                                <div
                                    class="absolute -top-1 -right-1 h-3 w-3 rounded-full bg-[#D4AF37] border-2 border-white scale-0 group-hover:scale-100 transition-transform">
                                </div>
                            </div>

                            {{-- Label --}}
                            <span
                                class="text-[11px] font-bold text-neutral-600 group-hover:text-neutral-900 transition-colors text-center leading-tight">
                                {{ $item['label'] }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- ====== PROFILE CONTENT ====== --}}
            <div id="sheetProfile" class="space-y-6 hidden pb-6">

                {{-- User Identity Section --}}
                <div class="px-1">
                    @auth
                        <div
                            class="relative overflow-hidden flex items-center gap-4 w-full px-5 py-5 rounded-[2rem] bg-neutral-900 shadow-xl shadow-black/10 transition-all">
                            {{-- Decorative background glow --}}
                            <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#D4AF37]/20 blur-3xl"></div>

                            <div
                                class="relative shrink-0 w-14 h-14 rounded-2xl bg-gradient-to-br from-[#D4AF37] to-[#8f6a10] p-[2px]">
                                <div
                                    class="w-full h-full rounded-[calc(1rem-1px)] bg-neutral-900 flex items-center justify-center text-white font-black text-xl uppercase tracking-tighter">
                                    {{ strtoupper(substr(auth()->user()->name ?? auth()->user()->email, 0, 1)) }}
                                </div>
                            </div>

                            <div class="flex-1 min-w-0 z-10">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-base font-bold tracking-tight text-white truncate">
                                        {{ auth()->user()->name ?? 'User' }}
                                    </h3>
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-[#D4AF37] text-[8px] font-black uppercase text-neutral-900">Pro</span>
                                </div>
                                <p class="text-sm text-neutral-400 truncate font-medium">{{ auth()->user()->email }}</p>
                            </div>

                            <div class="relative flex h-2.5 w-2.5 shrink-0 z-10">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-40"></span>
                                <span
                                    class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500 border border-neutral-900"></span>
                            </div>
                        </div>
                    @else
                        <div
                            class="flex items-center gap-4 w-full px-5 py-5 rounded-[2rem] bg-neutral-50 border border-neutral-200">
                            <div
                                class="w-14 h-14 rounded-2xl bg-neutral-200 flex items-center justify-center text-neutral-400">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base font-bold tracking-tight text-neutral-900">Welcome, Guest</h3>
                                <p class="text-sm text-neutral-500 font-medium">Sign in to sync your wishlist</p>
                            </div>
                        </div>
                    @endauth
                </div>

                {{-- Navigation Menu --}}
                @auth
                    <div class="space-y-2">
                        @php
                            $links = [
                                [
                                    'route' => 'account.index',
                                    'label' => 'Dashboard',
                                    'icon' =>
                                        'M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z',
                                ],
                                [
                                    'route' => 'account.orders.index',
                                    'label' => 'My Orders',
                                    'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                                ],
                                [
                                    'route' => 'account.favorites.index',
                                    'label' => 'My Wishlist',
                                    'icon' =>
                                        'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                                ],
                                [
                                    'route' => 'account.referral.index',
                                    'label' => 'Referral Program',
                                    'icon' =>
                                        'M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7',
                                ],
                                [
                                    'route' => 'account.address.index',
                                    'label' => 'Shipping Addresses',
                                    'icon' =>
                                        'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z',
                                ],
                                [
                                    'route' => 'account.profile.edit',
                                    'label' => 'Profile Settings',
                                    'icon' =>
                                        'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                                ],
                            ];
                        @endphp

                        @foreach ($links as $link)
                            <a href="{{ route($link['route']) }}"
                                class="group flex items-center justify-between px-5 py-4 rounded-2xl bg-white border border-neutral-200 hover:border-[#D4AF37]/30 hover:bg-neutral-50 active:scale-[0.98] transition-all duration-200">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-neutral-50 text-neutral-500 group-hover:bg-[#D4AF37]/10 group-hover:text-[#D4AF37] transition-colors">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="{{ $link['icon'] }}" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-bold text-neutral-800 tracking-tight">{{ $link['label'] }}</span>
                                </div>
                                <svg class="w-4 h-4 text-neutral-300 group-hover:text-[#D4AF37] transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        @endforeach
                    </div>

                    <form method="POST" action="{{ route('logout') }}" class="pt-2">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-3 p-4 rounded-2xl text-red-500 font-bold text-sm bg-red-50 border border-red-100 active:scale-[0.97] transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5" />
                            </svg>
                            <span>Log Out of Account</span>
                        </button>
                    </form>
                @else
                    <div class="grid grid-cols-2 gap-4">
                        <a href="{{ route('login') }}"
                            class="flex items-center justify-center p-5 rounded-[1.5rem] bg-neutral-900 text-white font-black text-sm shadow-lg shadow-black/10 active:scale-[0.95] transition-all">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="flex items-center justify-center p-5 rounded-[1.5rem] border-2 border-neutral-100 bg-white text-neutral-900 font-black text-sm active:scale-[0.95] transition-all">
                            Register
                        </a>
                    </div>
                @endauth
            </div>

        </div>
    </div>
@endif



<script>
    function toggleMobileSearch(show) {
        const el = document.getElementById('mobileSearchSheet');
        if (!el) return;

        el.classList.toggle('hidden', !show);

        if (show) {
            // focus input
            setTimeout(() => {
                const input = document.getElementById('mobileSearchInput');
                if (input) input.focus();
            }, 60);
        }
    }
</script>

<script>
    function toggleMobileSheet(show, type = 'more') {
        const sheet = document.getElementById('mobileSheet');
        const content = document.getElementById('mobileSheetContent');
        const more = document.getElementById('sheetMore');
        const profile = document.getElementById('sheetProfile');

        if (!sheet || !content || !more || !profile) return;

        // switch content
        if (type === 'profile') {
            profile.classList.remove('hidden');
            more.classList.add('hidden');
        } else {
            more.classList.remove('hidden');
            profile.classList.add('hidden');
        }

        if (show) {
            sheet.classList.remove('invisible', 'opacity-0');
            sheet.classList.add('opacity-100');
            setTimeout(() => content.classList.remove('translate-y-full'), 10);
            document.body.style.overflow = 'hidden';
        } else {
            content.classList.add('translate-y-full');
            sheet.classList.remove('opacity-100');
            setTimeout(() => {
                sheet.classList.add('invisible', 'opacity-0');
                document.body.style.overflow = '';
            }, 300);
        }
    }
</script>
