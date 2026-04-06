{{-- Trust Banner --}}
<section class="relative pt-16 lg:pt-16 bg-[#F9F7F2] overflow-x-hidden lg:overflow-visible">

    <div class="relative w-full overflow-x-hidden lg:overflow-visible">

        {{-- deep tone strip --}}
        <div
            class="relative w-full min-h-[360px] lg:min-h-[420px]
                   bg-gradient-to-tr from-[#9C7414] via-[#E7C76A] to-[#D4AF37]">

            {{-- 金色光晕 --}}
            <div
                class="absolute left-0 top-1/2 -translate-y-1/2 w-[420px] h-[420px]
                        bg-[#D4AF37]/15 blur-[140px]">
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">

                {{-- mobile character --}}
                {{-- <div class="lg:hidden absolute inset-x-0 -top-10 z-20 pointer-events-none flex justify-center overflow-hidden">
                    <img src="{{ asset('images/trust-character.png') }}" alt="Trust Character"
                        class="w-auto h-[190px] max-w-[85vw] object-contain
                               drop-shadow-[0_20px_35px_rgba(0,0,0,0.22)]">
                </div> --}}

                {{-- cards area --}}
                <div
                    class="relative z-10 h-full flex items-center px-4 py-24 sm:px-6 lg:py-12 lg:pr-8 lg:pl-[470px] xl:pl-[560px]">
                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-5">

                        {{-- Item 1 --}}
                        <div
                            class="group rounded-[1.75rem] bg-white border border-neutral-200 p-6 shadow-[0_12px_32px_rgba(0,0,0,0.10)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(0,0,0,0.18)]">
                            <div
                                class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#D4AF37] text-white shadow-md">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                </svg>
                            </div>
                            <h4 class="text-base font-bold text-neutral-900">Fast Dispatch</h4>
                            <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                                Shipped within <span class="font-semibold text-neutral-700">1–3 working days</span>.
                            </p>
                        </div>

                        {{-- Item 2 --}}
                        <div
                            class="group rounded-[1.75rem] bg-white border border-neutral-200 p-6 shadow-[0_12px_32px_rgba(0,0,0,0.10)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(0,0,0,0.18)]">
                            <div
                                class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#D4AF37] text-white shadow-md">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                </svg>
                            </div>
                            <h4 class="text-base font-bold text-neutral-900">Secure Payment</h4>
                            <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                                100% safe &amp; encrypted checkout.
                            </p>
                        </div>

                        {{-- Item 3 --}}
                        <div
                            class="group rounded-[1.75rem] bg-white border border-neutral-200 p-6 shadow-[0_12px_32px_rgba(0,0,0,0.10)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(0,0,0,0.18)]">
                            <div
                                class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#D4AF37] text-white shadow-md">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            <h4 class="text-base font-bold text-neutral-900">Easy Returns</h4>
                            <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                                Hassle-free return experience.
                            </p>
                        </div>

                        {{-- Item 4 --}}
                        <div
                            class="group rounded-[1.75rem] bg-white border border-neutral-200 p-6 shadow-[0_12px_32px_rgba(0,0,0,0.10)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(0,0,0,0.18)]">
                            <div
                                class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#D4AF37] text-white shadow-md">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            </div>
                            <h4 class="text-base font-bold text-neutral-900">Malaysia Owned</h4>
                            <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                                Supporting local community.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- desktop character --}}
        <div class="hidden lg:block absolute left-[350px] bottom-[25px] z-20 pointer-events-none">
            <img src="{{ asset('images/trust-character.png') }}" alt="Trust Character"
                class="w-auto h-[430px] xl:h-[540px] object-contain
                       -translate-x-6 translate-y-8
                       drop-shadow-[0_30px_50px_rgba(0,0,0,0.28)]">
        </div>

    </div>
</section>