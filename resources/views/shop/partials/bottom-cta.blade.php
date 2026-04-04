{{-- Bottom CTA Section - Clean Split Layout --}}
<section class="relative overflow-hidden bg-gradient-to-b from-white to-[#F3F3F0] py-16 lg:py-20">
    <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-[2.5rem] bg-white shadow-[0_20px_60px_rgba(0,0,0,0.08)]">

            <div class="grid lg:grid-cols-[1.35fr_0.65fr] min-h-[420px]">

                {{-- Left Content --}}
                <div class="relative bg-gradient-to-br from-[#0f0f0f] via-[#1a1a1a] to-[#251f14] overflow-hidden flex items-center px-8 py-14 sm:px-12 lg:px-20">
                    <div class="absolute -top-24 -left-24 h-96 w-96 rounded-full bg-[#D4AF37]/20 blur-[120px]"></div>

                    <div class="relative max-w-2xl">
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

                {{-- Right Image --}}
                <div class="relative hidden lg:flex bg-[#f3f3f0] items-end justify-end">
                    <div class="absolute right-10 top-10 h-56 w-56 rounded-full bg-white/70 blur-3xl"></div>

                    <img src="{{ asset('images/cta.gif') }}" alt="Mascot Bear"
                        class="relative h-full w-auto object-contain drop-shadow-[0_20px_35px_rgba(0,0,0,0.18)]" />
                </div>

            </div>

            {{-- Mobile Image --}}
            <div class="relative block lg:hidden bg-[#f3f3f0] h-[240px]">
                <img src="{{ asset('images/cta.gif') }}" alt="Mascot Bear"
                    class="absolute bottom-0 right-1/2 translate-x-1/2 h-[110%] w-auto object-contain drop-shadow-[0_16px_30px_rgba(0,0,0,0.18)]" />
            </div>

        </div>
    </div>
</section>