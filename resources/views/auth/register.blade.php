<x-guest-layout>
    <div class="min-h-screen w-full grid grid-cols-1 lg:grid-cols-12 font-sans antialiased">

        {{-- LEFT PANEL --}}
        <div class="hidden lg:flex lg:col-span-5 relative overflow-hidden bg-[#0A0A0A]">
            {{-- LAYER 1: DYNAMIC MESH BACKGROUND --}}
            <div class="absolute inset-0 transition-opacity duration-1000">
                <div
                    class="absolute inset-0 bg-[conic-gradient(from_225deg_at_50%_50%,#8f6a10_0%,#D4AF37_25%,#E6C363_50%,#D4AF37_75%,#8f6a10_100%)] opacity-90">
                </div>
                {{-- Secondary deep gold glow for depth --}}
                <div
                    class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#B8860B] rounded-full blur-[120px] opacity-60 mix-blend-multiply animate-pulse">
                </div>
            </div>

            {{-- LAYER 2: NOISE & TEXTURE --}}
            <div class="absolute inset-0 opacity-[0.03] mix-blend-overlay pointer-events-none"
                style="background-image: url('https://grainy-gradients.vercel.app/noise.svg');"></div>

            {{-- LAYER 3: MODERN DOT GRID --}}
            <div class="absolute inset-0 opacity-[0.1]"
                style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;">
            </div>

            {{-- CONTENT CONTAINER --}}
            <div class="relative z-10 flex flex-col justify-between w-full h-full p-20 text-white">

                {{-- TOP: LOGO SECTION --}}
                <div class="flex items-center gap-5 group cursor-default">
                    <div class="relative">
                        {{-- Refined Logo Glow --}}
                        <div
                            class="absolute -inset-4 bg-white/20 blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-700">
                        </div>

                        <div
                            class="relative h-16 w-16 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 p-2.5 shadow-2xl transition-all duration-500 group-hover:scale-105 group-hover:rotate-[-2deg]">
                            <img src="{{ asset('images/nextora-logo.png') }}"
                                class="h-full w-full object-contain filter drop-shadow-md"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div
                                class="hidden h-full w-full items-center justify-center font-black text-white text-2xl">
                                N</div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-black tracking-[0.4em] uppercase leading-none">Nextora</span>
                        <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/40 mt-1">E-Commerce
                            Intelligence</span>
                    </div>
                </div>

                {{-- MAIN TEXT SECTION --}}
                <div class="relative">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                        </span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white/90">System Status:
                            Active</span>
                    </div>

                    <h1 class="text-7xl font-black leading-[0.95] tracking-tighter">
                        Master your <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-b from-white via-white to-white/40">Commerce.</span>
                    </h1>

                    <p class="mt-8 text-white/70 text-lg max-w-sm leading-relaxed font-light">
                        Experience the <span class="text-white font-semibold">gold standard</span> of management with
                        our precision-engineered dashboard.
                    </p>

                    {{-- Aesthetic Divider --}}
                    <div class="mt-10 flex items-center gap-3">
                        <div class="h-[1px] w-20 bg-gradient-to-r from-white to-transparent"></div>
                        <div class="h-1 w-1 rounded-full bg-white/40"></div>
                    </div>
                </div>

                {{-- BOTTOM: DATA VISUALIZATION CARD --}}
                <div class="relative group/card">
                    {{-- Background Aura --}}
                    <div
                        class="absolute -inset-10 bg-[#E6C363] rounded-full blur-[100px] opacity-0 group-hover/card:opacity-20 transition-opacity duration-1000">
                    </div>

                    <div
                        class="relative overflow-hidden backdrop-blur-2xl bg-white/[0.08] border border-white/20 rounded-[2.5rem] p-8 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.3)] transition-all duration-700 hover:bg-white/[0.12] hover:-translate-y-3">
                        <div class="flex items-center justify-between mb-8">
                            <div class="flex items-center gap-4">
                                <div
                                    class="h-12 w-12 rounded-xl bg-white text-[#D4AF37] flex items-center justify-center shadow-lg transform transition-transform group-hover/card:rotate-12">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/40">
                                        Performance Score</div>
                                    <div class="text-xl font-black text-white">+24.8% <span
                                            class="text-xs font-medium text-white/60 ml-1">vs last month</span></div>
                                </div>
                            </div>
                        </div>

                        {{-- Modernized Sparkline --}}
                        <div class="flex items-end gap-1.5 h-16">
                            <div
                                class="flex-1 bg-white/10 rounded-full h-[30%] transition-all duration-1000 group-hover/card:h-[50%]">
                            </div>
                            <div
                                class="flex-1 bg-white/20 rounded-full h-[50%] transition-all duration-1000 group-hover/card:h-[80%]">
                            </div>
                            <div
                                class="flex-1 bg-white/40 rounded-full h-[70%] transition-all duration-1000 group-hover/card:h-[40%]">
                            </div>
                            <div
                                class="flex-1 bg-white/10 rounded-full h-[40%] transition-all duration-1000 group-hover/card:h-[90%]">
                            </div>
                            <div
                                class="flex-1 bg-white/60 rounded-full h-[90%] transition-all duration-1000 group-hover/card:h-[60%]">
                            </div>
                            <div
                                class="flex-1 bg-white/30 rounded-full h-[60%] transition-all duration-1000 group-hover/card:h-[100%]">
                            </div>
                            <div
                                class="flex-1 bg-white/20 rounded-full h-[40%] transition-all duration-1000 group-hover/card:h-[70%]">
                            </div>
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
                            <input id="password" type="password" name="password" required
                                autocomplete="new-password" placeholder="••••••••"
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
