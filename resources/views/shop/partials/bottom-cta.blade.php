{{-- Bottom CTA Section - Unified Background --}}
<section class="relative overflow-hidden bg-[#F9F7F2] py-16 lg:py-24">
    <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-[2.5rem] shadow-[0_20px_60px_rgba(0,0,0,0.08)]">

            {{-- ✅ 整块统一背景 --}}
            <div class="absolute inset-0 bg-gradient-to-br from-[#0f0f0f] via-[#1a1a1a] to-[#251f14]"></div>

            {{-- Glow --}}
            <div class="absolute -top-24 -left-24 h-96 w-96 rounded-full bg-[#D4AF37]/20 blur-[120px]"></div>
            <div class="absolute right-0 top-10 h-64 w-64 rounded-full bg-[#D4AF37]/10 blur-[100px]"></div>

            <div class="relative grid lg:grid-cols-[1.2fr_0.8fr] min-h-[420px]">

                {{-- Left Content --}}
                <div class="flex items-center px-8 py-14 sm:px-12 lg:px-20">
                    <div class="max-w-2xl">
                        <div class="mb-6 h-1 w-12 bg-gradient-to-r from-[#D4AF37] to-transparent"></div>

                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-[1.1] text-white">
                            Elevate your lifestyle with
                            <span class="text-transparent bg-clip-text bg-gradient-to-b from-[#F3E2B3] to-[#D4AF37]">
                                standout essentials
                            </span>
                        </h2>

                        <p class="mt-6 max-w-lg text-base lg:text-xl text-zinc-300 font-medium leading-relaxed">
                            Discover curated pieces and statement finds designed to bring charm, personality, and
                            effortless style to your routine.
                        </p>

                        <div class="mt-8">
                            <a href="{{ route('shop.index') }}"
                                class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-[#E7C76A] via-[#D4AF37] to-[#9C7414] px-8 py-4 text-sm sm:text-base font-extrabold uppercase tracking-[0.08em] text-white transition duration-300 hover:scale-105 hover:shadow-[0_12px_30px_rgba(212,175,55,0.35)] active:scale-95">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

                {{-- ✅ Right Image（浮动，不再有背景块） --}}
                <div class="relative hidden lg:block overflow-hidden">
    <img src="{{ asset('images/cta.gif') }}" alt="Mascot Bear"
        class="absolute right-0 bottom-0 h-[100%] w-auto object-contain
               drop-shadow-[0_20px_40px_rgba(0,0,0,0.28)]" />
</div>

            </div>

            {{-- Mobile Image（同样统一背景） --}}
            <div class="relative block lg:hidden h-[260px]">
                <img src="{{ asset('images/cta.gif') }}" alt="Mascot Bear"
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 h-[120%] w-auto object-contain
                           drop-shadow-[0_20px_40px_rgba(0,0,0,0.35)]" />
            </div>

        </div>
    </div>
</section>