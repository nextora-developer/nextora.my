{{-- Bottom CTA Section --}}
<section class="relative overflow-hidden bg-white py-16 lg:py-20">
    <div class="max-w-7xl5 mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Separated Card: Soft Pearl & Gold --}}
        <div class="relative overflow-hidden rounded-[3rem] border border-[#E7C76A]/40 bg-[#FAF9F6] shadow-[0_15px_60px_-15px_rgba(231,199,106,0.15)]">
            
            <div class="absolute -right-24 -top-24 h-96 w-96 rounded-full bg-gradient-to-br from-[#E7C76A] to-transparent opacity-30 blur-[100px]"></div>
            
            <div class="relative px-8 py-16 sm:px-12 lg:px-20 lg:py-16">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-12">

                    {{-- Text Content --}}
                    <div class="max-w-2xl text-left">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="h-2 w-2 rounded-full bg-[#D4AF37]"></span>
                            <p class="text-sm font-bold uppercase tracking-[0.4em] text-[#9C7414]">
                                The Nextora Collective
                            </p>
                        </div>

                        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-neutral-900 leading-[1.05]">
                            Elevate your 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#D4AF37] via-[#E7C76A] to-[#9C7414]">Daily Aesthetic</span>
                        </h2>

                        <p class="mt-8 text-base sm:text-lg text-neutral-600 max-w-lg leading-relaxed font-medium">
                            Discover curated essentials and luxury creations designed to elevate your everyday lifestyle.
                        </p>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex flex-row gap-4 w-full lg:w-auto">
                        
                        {{-- Primary: Solid Gold --}}
                        <a href="{{ route('shop.index') }}"
                            class="group relative inline-flex items-center justify-center rounded-full bg-gradient-to-r from-[#E7C76A] via-[#D4AF37] to-[#9C7414] px-10 py-5 text-xs font-black tracking-[0.2em] text-white transition-all duration-300 hover:scale-105 hover:shadow-[0_10px_30px_rgba(212,175,55,0.4)] active:scale-95">
                            SHOP NOW
                        </a>

                        {{-- Secondary: Minimalist Outline --}}
                        <a href="#categories"
                            class="inline-flex items-center justify-center rounded-full border border-neutral-200 bg-white px-10 py-5 text-xs font-black tracking-[0.2em] text-neutral-800 transition-all duration-300 hover:border-[#D4AF37] hover:text-[#9C7414]">
                            BROWSE CATEGORIES
                        </a>
                        
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>