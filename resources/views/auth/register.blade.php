<x-guest-layout>
    <div class="min-h-screen w-full grid grid-cols-1 lg:grid-cols-12 font-sans antialiased">

        {{-- LEFT PANEL --}}
        <div class="hidden lg:flex lg:col-span-5 relative overflow-hidden">
            {{-- ULTRA-PREMIUM METALLIC GRADIENT --}}
            <div
                class="absolute inset-0 bg-[conic-gradient(from_225deg_at_50%_50%,#8f6a10_0%,#D4AF37_25%,#E6C363_50%,#D4AF37_75%,#8f6a10_100%)]">
            </div>

            {{-- ANIMATED LIGHT LEAKS --}}
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-white/30 rounded-full blur-[100px] animate-pulse"></div>
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(circle_at_center,transparent_0%,rgba(0,0,0,0.2)_100%)]">
            </div>

            {{-- SUBTLE GRID PATTERN (Modern SaaS Aesthetic) --}}
            <div class="absolute inset-0 opacity-[0.15]"
                style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>

            {{-- CONTENT CONTAINER --}}
            <div class="relative z-10 flex flex-col justify-between w-full h-full p-16 text-white">

                {{-- TOP: LOGO SECTION --}}
                <div>
                    <div class="flex items-center gap-4 group cursor-default">
                        <div class="relative">
                            {{-- Logo Glow --}}
                            <div
                                class="absolute inset-0 bg-white blur-xl opacity-20 group-hover:opacity-40 transition-opacity">
                            </div>
                            <img src="{{ asset('images/nextora-logo.png') }}"
                                class="relative h-20 w-20 rounded-2xl bg-white p-1.5 shadow-2xl transition-all duration-500 group-hover:scale-110 group-hover:rotate-3"
                                onerror="this.style.display='none'; document.getElementById('logo-fallback').style.display='flex';">
                            <div id="logo-fallback"
                                class="hidden relative h-12 w-12 rounded-2xl bg-white text-[#D4AF37] items-center justify-center font-black shadow-xl">
                                N
                            </div>
                        </div>
                        <span class="text-lg font-black tracking-[0.5em] uppercase text-white/90">
                            nextora<span class="text-white/40 group-hover:text-white/100 transition-colors">.my</span>
                        </span>
                    </div>

                    {{-- MAIN TEXT SECTION --}}
                    <div class="mt-24 relative">
                        <h1 class="text-6xl font-black leading-[1.1] tracking-tight max-w-sm">
                            Master your <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-b from-white to-white/60">Commerce.</span>
                        </h1>

                        <div class="mt-8 flex items-center gap-4">
                            <div class="w-16 h-1 bg-white rounded-full"></div>
                            <div class="w-2 h-1 bg-white/40 rounded-full"></div>
                            <div class="w-1 h-1 bg-white/20 rounded-full"></div>
                        </div>

                        <p class="mt-8 text-white/80 text-lg max-w-md leading-relaxed font-medium">
                            Experience the gold standard of e-commerce management with our precision-engineered
                            dashboard.
                        </p>
                    </div>
                </div>

                {{-- BOTTOM: FLOATING DECORATIVE CARD (Glassmorphism) --}}
                <div class="relative mt-auto pt-10">
                    <div class="absolute -top-20 left-10 w-64 h-64 bg-[#E6C363] rounded-full blur-[80px] opacity-20">
                    </div>

                    <div
                        class="relative overflow-hidden backdrop-blur-xl bg-white/10 border border-white/20 rounded-[2.5rem] p-8 shadow-2xl transform hover:-translate-y-2 transition-transform duration-700">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="h-10 w-10 rounded-full bg-white/20 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold uppercase tracking-widest opacity-60">Real-time Analytics
                                </div>
                                <div class="text-lg font-bold">+24.8% Revenue</div>
                            </div>
                        </div>

                        <div class="flex items-end gap-2 h-12">
                            <div class="flex-1 bg-white/20 rounded-t-sm h-[40%] animate-pulse"></div>
                            <div class="flex-1 bg-white/40 rounded-t-sm h-[60%]"></div>
                            <div class="flex-1 bg-white/20 rounded-t-sm h-[30%] animate-pulse"
                                style="animation-delay: 0.2s"></div>
                            <div class="flex-1 bg-white/60 rounded-t-sm h-[80%]"></div>
                            <div class="flex-1 bg-white/30 rounded-t-sm h-[50%] animate-pulse"
                                style="animation-delay: 0.4s"></div>
                            <div class="flex-1 bg-white/10 rounded-t-sm h-[90%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- RIGHT PANEL --}}
        <div class="lg:col-span-7 flex items-center justify-center bg-[#FCFBF9] px-8 py-12">
            <div class="w-full max-w-md">

                {{-- MOBILE LOGO --}}
                <div class="lg:hidden flex flex-col items-center mb-5">
                    <div class="h-20 w-20 flex items-center justify-center mb-4">
                        <img src="images/nextora-logo.png" alt="Logo" class="h-20 w-20 object-contain">
                    </div>
                    {{-- <span class="font-black tracking-[0.2em] text-gray-900">NEXTORA</span> --}}
                </div>

                {{-- HEADER --}}
                <div class="mb-10 text-center lg:text-left">
                    <h2 class="text-4xl font-black text-gray-900 tracking-tight">Create Account</h2>
                    <p class="text-gray-500 mt-3 font-medium">Join us and start your journey today.</p>
                </div>

                {{-- FORM --}}
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    {{-- Full Name --}}
                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">
                            Full Name
                        </label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                            autofocus placeholder="Abdul Fattah bin Mohd Amin"
                            class="w-full h-14 px-6 rounded-2xl bg-white border-2 border-gray-100 
                                   focus:border-[#D4AF37] focus:ring-0 outline-none transition-all duration-300
                                   placeholder:text-gray-300 shadow-sm">
                        <p class="mt-1 ml-1 text-[12px] text-red-400">
                            Please enter your <span class="font-semibold">full legal name</span>, not a username.
                        </p>
                        @error('name')
                            <p class="text-xs text-red-500 mt-2 ml-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email + Referral --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">
                                Email Address
                            </label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                placeholder="name@company.com"
                                class="w-full h-14 px-6 rounded-2xl bg-white border-2 border-gray-100 
                                       focus:border-[#D4AF37] focus:ring-0 outline-none transition-all duration-300
                                       placeholder:text-gray-300 shadow-sm">
                            @error('email')
                                <p class="text-xs text-red-500 mt-2 ml-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">
                                Referral Code
                            </label>
                            <input id="ref" type="text" name="ref" value="{{ old('ref', request('ref')) }}"
                                placeholder="Referral code" autocomplete="off"
                                class="w-full h-14 px-6 rounded-2xl bg-white border-2 border-gray-100 
                                       focus:border-[#D4AF37] focus:ring-0 outline-none transition-all duration-300
                                       placeholder:text-gray-300 shadow-sm">
                            @error('ref')
                                <p class="text-xs text-red-500 mt-2 ml-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label
                                class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Password</label>
                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                placeholder="••••••••"
                                class="w-full h-14 px-6 rounded-2xl bg-white border-2 border-gray-100 
                                       focus:border-[#D4AF37] focus:ring-0 outline-none transition-all duration-300
                                       placeholder:text-gray-300 shadow-sm">
                            @error('password')
                                <p class="text-xs text-red-500 mt-2 ml-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">
                                Confirm Password
                            </label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                placeholder="••••••••"
                                class="w-full h-14 px-6 rounded-2xl bg-white border-2 border-gray-100 
                                       focus:border-[#D4AF37] focus:ring-0 outline-none transition-all duration-300
                                       placeholder:text-gray-300 shadow-sm">
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full h-14 rounded-2xl text-white font-extrabold tracking-widest uppercase text-sm
                               bg-gradient-to-r from-[#D4AF37] via-[#D4AF37] to-[#b8962e]
                               shadow-[0_10px_30px_-5px_rgba(212,175,55,0.5)]
                               hover:shadow-[0_15px_35px_-5px_rgba(212,175,55,0.6)]
                               hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-300">
                        Create Account
                    </button>

                    <div class="grid grid-cols-1">
                        <a href="{{ route('home') }}"
                            class="flex items-center justify-center gap-3 h-14 rounded-2xl border-2 border-gray-100 bg-white hover:bg-gray-50 hover:border-gray-200 transition-all font-bold text-gray-700 shadow-sm">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                            </svg>

                            Back to Shop
                        </a>
                    </div>
                </form>

                {{-- FOOTER --}}
                <div class="mt-8 text-center space-y-4">
                    <p class="text-gray-500 font-medium">
                        Already have an account?
                        <a href="{{ route('login') }}"
                            class="text-[#D4AF37] font-black hover:underline underline-offset-4 ml-1">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</x-guest-layout>
