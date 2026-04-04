<x-app-layout>
    <div class="bg-[#F8F7FC] text-slate-900">

        <!-- Hero -->
        <section id="payments" class="relative overflow-hidden bg-white selection:bg-purple-100">
            <div class="absolute inset-0 pointer-events-none">
                <div
                    class="absolute -top-24 -left-24 h-[600px] w-[600px] rounded-full bg-gradient-to-br from-purple-200/40 to-transparent blur-[140px]">
                </div>
                <div
                    class="absolute top-1/4 -right-24 h-[500px] w-[500px] rounded-full bg-gradient-to-bl from-pink-200/30 to-transparent blur-[140px]">
                </div>
                <div
                    class="absolute inset-0 bg-[url('https://pixelbakery.com/img/grid.svg')] bg-[center_top_-1px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-[0.15]">
                </div>
            </div>

            <div class="relative mx-auto max-w-7xl5 px-6 py-24 lg:px-8 lg:py-24">
                <div class="grid items-center gap-20 lg:grid-cols-2">

                    <div class="relative z-10">
                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-purple-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-purple-600 ring-1 ring-inset ring-purple-200/50">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-600"></span>
                            </span>
                            Payment Infrastructure
                        </span>

                        <h1 class="mt-8 text-5xl font-black tracking-tight text-slate-900 sm:text-6xl lg:text-7xl">
                            Accept payments <br />
                            <span
                                class="bg-gradient-to-r from-purple-600 via-fuchsia-500 to-pink-500 bg-clip-text text-transparent">
                                the easy way
                            </span>
                        </h1>

                        <p class="mt-8 max-w-xl text-lg leading-relaxed text-slate-600">
                            We help your business set up the right payment gateway with a smooth checkout flow and a
                            reliable
                            system that supports daily operations and future growth.
                        </p>

                        <div class="mt-10 flex flex-wrap gap-5">
                            <a href="#gateways"
                                class="group inline-flex items-center gap-2 rounded-2xl bg-slate-900 px-8 py-4 text-sm font-bold text-white transition-all hover:bg-purple-600 hover:shadow-xl hover:shadow-purple-200">
                                Explore Gateways
                                <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>

                            <a href="#contact"
                                class="inline-flex items-center rounded-2xl border border-slate-200 bg-white px-8 py-4 text-sm font-bold text-slate-900 transition hover:border-purple-200 hover:bg-purple-50/50">
                                Talk to Us
                            </a>
                        </div>

                        <div class="mt-16 grid grid-cols-2 gap-8 border-t border-slate-100 pt-10 sm:grid-cols-4">
                            <div class="group">
                                <p
                                    class="text-3xl font-black text-slate-900 transition-colors group-hover:text-purple-600">
                                    4</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-400">Gateways</p>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-slate-900">Fast</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-400">Checkout</p>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-slate-900">Easy</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-400">Setup</p>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-slate-900">Secure</p>
                                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-slate-400">Payments</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="absolute -inset-4 rounded-[3rem] bg-gradient-to-r from-purple-500 to-pink-500 opacity-0 blur-2xl transition duration-500 group-hover:opacity-10">
                        </div>

                        <div
                            class="relative rounded-[2.5rem] border border-slate-200 bg-white/40 p-4 shadow-2xl backdrop-blur-2xl transition-transform duration-500 group-hover:-rotate-1 group-hover:scale-[1.02]">
                            <div class="overflow-hidden rounded-[2rem] border border-slate-100 bg-white shadow-sm">

                                <div
                                    class="flex items-center justify-between border-b border-slate-50 bg-slate-50/30 px-8 py-6">
                                    <div>
                                        <h3 class="text-sm font-bold text-slate-900">Payment Setup</h3>
                                        <p class="text-[10px] font-medium text-slate-400 uppercase tracking-tighter">
                                            Ready for Business</p>
                                    </div>
                                    <span
                                        class="flex items-center gap-1.5 rounded-full bg-emerald-100 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-emerald-700">
                                        <span class="h-1 w-1 rounded-full bg-emerald-600 animate-pulse"></span>
                                        Active
                                    </span>
                                </div>

                                <div class="p-8 space-y-5">
                                    <div
                                        class="flex items-start gap-4 rounded-2xl border border-slate-50 bg-[#F8F9FF] p-5 transition-colors hover:border-purple-100">
                                        <div
                                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white shadow-lg shadow-purple-200">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900">Gateway Integration</p>
                                            <p class="mt-1 text-xs leading-relaxed text-slate-500">Connect the right
                                                payment
                                                provider for your business.</p>
                                        </div>
                                    </div>

                                    <div
                                        class="flex items-start gap-4 rounded-2xl border border-slate-50 bg-[#FFF8FC] p-5 transition-colors hover:border-pink-100">
                                        <div
                                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-pink-500 text-white shadow-lg shadow-pink-100">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900">Smooth Checkout</p>
                                            <p class="mt-1 text-xs leading-relaxed text-slate-500">Simple payment flow
                                                for a
                                                better customer experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute -bottom-6 -right-6 hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-xl transition-transform duration-500 group-hover:translate-y-[-10px] md:block">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500 text-white">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <p class="text-sm font-bold text-slate-900">Reliable Setup</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Intro -->
        <section id="what-we-do" class="relative bg-white py-24 lg:py-24 overflow-hidden">
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent">
            </div>

            <div class="mx-auto max-w-7xl5 px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <span
                        class="inline-flex items-center rounded-full bg-purple-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-purple-600 ring-1 ring-inset ring-purple-200/50">
                        What We Do
                    </span>
                    <h2 class="mt-8 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                        Payment infrastructure for <br class="hidden lg:block" />
                        <span class="text-purple-600">modern businesses</span>
                    </h2>
                    <p class="mt-6 text-lg leading-relaxed text-slate-600">
                        We help businesses choose the right payment gateway, connect it properly, and create a smooth
                        payment flow for customers.
                    </p>
                </div>

                <div class="mt-20 grid gap-12 sm:grid-cols-2 lg:grid-cols-3">

                    <div class="group relative">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-600 text-white shadow-lg shadow-purple-200 transition-transform group-hover:-rotate-6">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-bold text-slate-900">Gateway Selection</h3>
                        <p class="mt-3 text-slate-600 leading-relaxed">
                            We help you choose the payment gateway that best fits your business and customer needs.
                        </p>
                    </div>

                    <div class="group relative">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-fuchsia-500 text-white shadow-lg shadow-fuchsia-200 transition-transform group-hover:-rotate-6">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-bold text-slate-900">Gateway Integration</h3>
                        <p class="mt-3 text-slate-600 leading-relaxed">
                            We connect the payment gateway to your website or system so payments can work smoothly.
                        </p>
                    </div>

                    <div class="group relative">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500 text-white shadow-lg shadow-pink-200 transition-transform group-hover:-rotate-6">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.744c0 5.548 4.076 10.21 9 11.392 4.924-1.182 9-5.844 9-11.392a11.99 11.99 0 00-.598-3.744 11.959 11.959 0 01-8.402-4.282z" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-bold text-slate-900">Secure Payment Setup</h3>
                        <p class="mt-3 text-slate-600 leading-relaxed">
                            We make sure your payment setup is safe, reliable, and gives customers more confidence to
                            pay online.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Gateways -->
        <section id="gateways" class="relative overflow-hidden bg-slate-50/50 py-12 lg:py-16">
            <div
                class="absolute top-0 left-1/2 h-px w-full -translate-x-1/2 bg-gradient-to-r from-transparent via-slate-200 to-transparent">
            </div>

            <div class="mx-auto max-w-7xl5 px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <span
                        class="inline-flex items-center rounded-full bg-pink-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-pink-600 ring-1 ring-inset ring-pink-200/50">
                        Payment Options
                    </span>
                    <h2 class="mt-8 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                        Choose the right gateway <br class="hidden sm:block" />
                        <span class="text-pink-600">for your business</span>
                    </h2>
                    <p class="mt-6 text-lg leading-relaxed text-slate-600">
                        We help you connect your website with trusted payment gateways, whether you are targeting local
                        or international customers.
                    </p>
                </div>

                <div class="mt-16 grid gap-6 md:grid-cols-2 xl:grid-cols-4">

                    <!-- Revenue Monster -->
                    <div
                        class="group relative flex flex-col justify-between rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-purple-200 hover:shadow-xl hover:shadow-purple-500/5">
                        <div>
                            <div class="flex items-center justify-between">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-600 text-lg font-black text-white shadow-lg shadow-purple-200 transition-transform group-hover:rotate-6">
                                    RM
                                </div>
                                <span
                                    class="rounded-full bg-purple-50 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-purple-600">
                                    Local Use
                                </span>
                            </div>
                            <h3 class="mt-8 text-xl font-bold text-slate-900">Revenue Monster</h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-500">
                                Suitable for Malaysian businesses. Supports FPX, e-wallet, and local payment methods.
                            </p>
                        </div>
                        <div
                            class="mt-8 flex items-center gap-2 text-xs font-bold text-purple-600 opacity-0 transition-opacity group-hover:opacity-100">
                            Ready to Use
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="3">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>

                    <!-- Stripe -->
                    <div
                        class="group relative flex flex-col justify-between rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-pink-200 hover:shadow-xl hover:shadow-pink-500/5">
                        <div>
                            <div class="flex items-center justify-between">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-500 text-lg font-black text-white shadow-lg shadow-pink-200 transition-transform group-hover:rotate-6">
                                    ST
                                </div>
                                <span
                                    class="rounded-full bg-pink-50 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-pink-600">
                                    Global
                                </span>
                            </div>
                            <h3 class="mt-8 text-xl font-bold text-slate-900">Stripe</h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-500">
                                Great for online business, SaaS, and international payments with flexible features.
                            </p>
                        </div>
                        <div
                            class="mt-8 flex items-center gap-2 text-xs font-bold text-pink-600 opacity-0 transition-opacity group-hover:opacity-100">
                            Ready to Use
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="3">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>

                    <!-- HitPay -->
                    <div
                        class="group relative flex flex-col justify-between rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-amber-200 hover:shadow-xl hover:shadow-amber-500/5">
                        <div>
                            <div class="flex items-center justify-between">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-500 text-lg font-black text-white shadow-lg shadow-amber-200 transition-transform group-hover:rotate-6">
                                    HP
                                </div>
                                <span
                                    class="rounded-full bg-amber-50 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-amber-600">
                                    Simple Setup
                                </span>
                            </div>
                            <h3 class="mt-8 text-xl font-bold text-slate-900">HitPay</h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-500">
                                Easy to start. Good for small businesses that want quick payment setup.
                            </p>
                        </div>
                        <div
                            class="mt-8 flex items-center gap-2 text-xs font-bold text-amber-600 opacity-0 transition-opacity group-hover:opacity-100">
                            Ready to Use
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="3">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>

                    <!-- CommercePay -->
                    <div
                        class="group relative flex flex-col justify-between rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-fuchsia-200 hover:shadow-xl hover:shadow-fuchsia-500/5">
                        <div>
                            <div class="flex items-center justify-between">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-fuchsia-600 text-lg font-black text-white shadow-lg shadow-fuchsia-200 transition-transform group-hover:rotate-6">
                                    CP
                                </div>
                                <span
                                    class="rounded-full bg-fuchsia-50 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-fuchsia-600">
                                    Alternative
                                </span>
                            </div>
                            <h3 class="mt-8 text-xl font-bold text-slate-900">CommercePay</h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-500">
                                Another reliable option to support your payment setup and handle more transactions.
                            </p>
                        </div>
                        <div
                            class="mt-8 flex items-center gap-2 text-xs font-bold text-fuchsia-600 opacity-0 transition-opacity group-hover:opacity-100">
                            Ready to Use
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="3">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Benefits -->
        <section id="benefits" class="relative overflow-hidden bg-white py-12 lg:py-16">
            <div class="absolute right-0 top-0 -translate-y-1/2 translate-x-1/2 opacity-20">
                <div class="h-[400px] w-[400px] rounded-full bg-amber-200 blur-[100px]"></div>
            </div>

            <div class="relative mx-auto max-w-7xl5 px-6 lg:px-8">
                <div class="grid items-center gap-16 lg:grid-cols-2">

                    <div>
                        <span
                            class="inline-flex items-center rounded-full bg-amber-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-amber-700 ring-1 ring-inset ring-amber-200/50">
                            Why It Matters
                        </span>
                        <h2 class="mt-8 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                            Better payments. <br />
                            <span class="text-amber-600">Better business.</span>
                        </h2>
                        <p class="mt-6 text-lg leading-relaxed text-slate-600">
                            A good payment setup does more than process transactions. It helps customers pay with
                            confidence
                            and makes your business easier to manage.
                        </p>

                        <div class="mt-12 space-y-10">
                            <div class="group flex gap-6">
                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-purple-600 text-white font-black shadow-lg shadow-purple-200 transition-transform group-hover:scale-110">
                                    01
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Smooth Checkout</h3>
                                    <p class="mt-2 leading-relaxed text-slate-600">
                                        Make it easier for customers to complete payment, especially on mobile devices.
                                    </p>
                                </div>
                            </div>

                            <div class="group flex gap-6">
                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-pink-600 text-white font-black shadow-lg shadow-pink-200 transition-transform group-hover:scale-110">
                                    02
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Easy Management</h3>
                                    <p class="mt-2 leading-relaxed text-slate-600">
                                        Keep your payment records more organized and easier to track.
                                    </p>
                                </div>
                            </div>

                            <div class="group flex gap-6">
                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-amber-500 to-amber-600 text-white font-black shadow-lg shadow-amber-200 transition-transform group-hover:scale-110">
                                    03
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Built to Grow</h3>
                                    <p class="mt-2 leading-relaxed text-slate-600">
                                        Start with what you need now and scale your payment setup as your business
                                        grows.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2 lg:pt-10">
                        <div
                            class="rounded-[2.5rem] bg-slate-50 p-8 transition-all hover:bg-white hover:shadow-xl hover:shadow-slate-200/50">
                            <div
                                class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-purple-100 text-purple-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path
                                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.744c0 5.548 4.076 10.21 9 11.392 4.924-1.182 9-5.844 9-11.392a11.99 11.99 0 00-.598-3.744 11.959 11.959 0 01-8.402-4.282z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Secure Setup</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                Help protect your payment flow and build more trust with customers.
                            </p>
                        </div>

                        <div
                            class="rounded-[2.5rem] bg-slate-50 p-8 transition-all hover:bg-white hover:shadow-xl hover:shadow-slate-200/50 sm:translate-y-8">
                            <div
                                class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-pink-100 text-pink-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path
                                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 12H13.5" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Flexible Setup</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                Use the payment flow that best matches your business model and customer journey.
                            </p>
                        </div>

                        <div
                            class="rounded-[2.5rem] bg-slate-50 p-8 transition-all hover:bg-white hover:shadow-xl hover:shadow-slate-200/50">
                            <div
                                class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-amber-100 text-amber-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path
                                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.998 5.998 0 00-12 0m12 0c0-1.657-1.343-3-3-3m-13.5 3c0-1.657 1.343-3 3-3m33 3a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h12a3 3 0 013 3v11z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Customer Friendly</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                Give customers a payment experience that feels simple, smooth, and reliable.
                            </p>
                        </div>

                        <div
                            class="rounded-[2.5rem] bg-slate-50 p-8 transition-all hover:bg-white hover:shadow-xl hover:shadow-slate-200/50 sm:translate-y-8">
                            <div
                                class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path d="M2.25 18L9 11.25l4.5 4.5L21.75 4.5M21.75 4.5V9m0-4.5H17.25" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900">Growth Support</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                Support more sales by offering payment options your customers are comfortable using.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Process -->
        <section id="process" class="relative overflow-hidden bg-white py-12 lg:py-16">
            <div class="absolute inset-0 pointer-events-none">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:32px_32px] opacity-20">
                </div>
            </div>

            <div class="relative mx-auto max-w-7xl5 px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <span
                        class="inline-flex items-center rounded-full bg-fuchsia-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-fuchsia-600 ring-1 ring-inset ring-fuchsia-200/50">
                        Process
                    </span>
                    <h2 class="mt-8 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                        Get started in <span class="text-fuchsia-600">4 simple steps</span>
                    </h2>
                </div>

                <div class="relative mt-20">
                    <div
                        class="absolute top-1/2 left-0 hidden h-0.5 w-full -translate-y-1/2 bg-gradient-to-r from-purple-100 via-fuchsia-100 to-amber-100 xl:block">
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-4">

                        <!-- Step 1 -->
                        <div class="group relative flex flex-col items-center text-center xl:items-start xl:text-left">
                            <div
                                class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-white shadow-xl ring-1 ring-slate-200 transition-all duration-300 group-hover:scale-110 group-hover:ring-purple-500/50">
                                <span
                                    class="bg-gradient-to-br from-purple-600 to-purple-400 bg-clip-text text-xl font-black text-transparent">01</span>
                            </div>
                            <div
                                class="mt-8 rounded-[2rem] border border-slate-100 bg-white/50 p-8 backdrop-blur-sm transition-all duration-300 group-hover:bg-white group-hover:shadow-2xl group-hover:shadow-purple-500/10">
                                <h3 class="text-lg font-bold text-slate-900">Understand</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                    We learn about your business and how you want to collect payments.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="group relative flex flex-col items-center text-center xl:items-start xl:text-left xl:mt-12">
                            <div
                                class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-white shadow-xl ring-1 ring-slate-200 transition-all duration-300 group-hover:scale-110 group-hover:ring-pink-500/50">
                                <span
                                    class="bg-gradient-to-br from-pink-600 to-pink-400 bg-clip-text text-xl font-black text-transparent">02</span>
                            </div>
                            <div
                                class="mt-8 rounded-[2rem] border border-slate-100 bg-white/50 p-8 backdrop-blur-sm transition-all duration-300 group-hover:bg-white group-hover:shadow-2xl group-hover:shadow-pink-500/10">
                                <h3 class="text-lg font-bold text-slate-900">Choose Gateway</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                    We help you pick the best payment gateway for your business.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="group relative flex flex-col items-center text-center xl:items-start xl:text-left">
                            <div
                                class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-white shadow-xl ring-1 ring-slate-200 transition-all duration-300 group-hover:scale-110 group-hover:ring-amber-500/50">
                                <span
                                    class="bg-gradient-to-br from-amber-600 to-amber-400 bg-clip-text text-xl font-black text-transparent">03</span>
                            </div>
                            <div
                                class="mt-8 rounded-[2rem] border border-slate-100 bg-white/50 p-8 backdrop-blur-sm transition-all duration-300 group-hover:bg-white group-hover:shadow-2xl group-hover:shadow-amber-500/10">
                                <h3 class="text-lg font-bold text-slate-900">Integrate</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                    We connect the payment gateway to your website and test everything.
                                </p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div
                            class="group relative flex flex-col items-center text-center xl:items-start xl:text-left xl:mt-12">
                            <div
                                class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-white shadow-xl ring-1 ring-slate-200 transition-all duration-300 group-hover:scale-110 group-hover:ring-fuchsia-500/50">
                                <span
                                    class="bg-gradient-to-br from-fuchsia-600 to-fuchsia-400 bg-clip-text text-xl font-black text-transparent">04</span>
                            </div>
                            <div
                                class="mt-8 rounded-[2rem] border border-slate-100 bg-white/50 p-8 backdrop-blur-sm transition-all duration-300 group-hover:bg-white group-hover:shadow-2xl group-hover:shadow-fuchsia-500/10">
                                <h3 class="text-lg font-bold text-slate-900">Go Live</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                    Start accepting payments smoothly and run your business with confidence.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq" class="relative overflow-hidden bg-slate-50/30 py-12 lg:py-16">
            <div class="mx-auto max-w-7xl5 px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <span
                        class="inline-flex items-center rounded-full bg-purple-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-purple-600 ring-1 ring-inset ring-purple-200/50">
                        FAQ
                    </span>
                    <h2 class="mt-8 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                        Common questions
                    </h2>
                    <p class="mt-4 text-slate-500">Everything you need to know about our payment setup.</p>
                </div>

                <div class="mt-20 grid gap-8 md:grid-cols-2">

                    <div
                        class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-8 transition-all hover:border-purple-200 hover:shadow-xl hover:shadow-purple-500/5">
                        <div
                            class="absolute left-0 top-0 h-full w-1 bg-purple-600 opacity-0 transition-opacity group-hover:opacity-100">
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-purple-50 text-purple-600 transition-colors group-hover:bg-purple-600 group-hover:text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Which gateway should I choose?</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600">
                                    It depends on your business needs. We can help you choose the most suitable option
                                    based on your market, customers, and payment flow.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-8 transition-all hover:border-pink-200 hover:shadow-xl hover:shadow-pink-500/5">
                        <div
                            class="absolute left-0 top-0 h-full w-1 bg-pink-500 opacity-0 transition-opacity group-hover:opacity-100">
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-pink-50 text-pink-600 transition-colors group-hover:bg-pink-500 group-hover:text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Can this work with my website?</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600">
                                    Yes. We can integrate the payment gateway into your existing website or custom
                                    system.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-8 transition-all hover:border-amber-200 hover:shadow-xl hover:shadow-amber-500/5">
                        <div
                            class="absolute left-0 top-0 h-full w-1 bg-amber-500 opacity-0 transition-opacity group-hover:opacity-100">
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-amber-50 text-amber-600 transition-colors group-hover:bg-amber-500 group-hover:text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path
                                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Can I start with one gateway first?</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600">
                                    Yes. You can start with one payment gateway first and add more later when your
                                    business grows.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-8 transition-all hover:border-fuchsia-200 hover:shadow-xl hover:shadow-fuchsia-500/5">
                        <div
                            class="absolute left-0 top-0 h-full w-1 bg-fuchsia-500 opacity-0 transition-opacity group-hover:opacity-100">
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-fuchsia-50 text-fuchsia-600 transition-colors group-hover:bg-fuchsia-500 group-hover:text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path
                                        d="M11.423 20.25l7.988-7.988a3 3 0 000-4.242l-.707-.707a3 3 0 00-4.242 0L6.5 15.311W1.5 22.5h7.5l2.423-2.25z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Do you help with setup?</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600">
                                    Yes. We help from setup to integration so your payment flow can work smoothly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA -->
        <section id="contact" class="relative py-12 lg:py-16 overflow-hidden">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-6xl opacity-30 pointer-events-none">
                <div class="absolute top-0 right-0 w-96 h-96 bg-purple-400 rounded-full blur-[120px] animate-pulse">
                </div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-pink-400 rounded-full blur-[120px] animate-pulse"
                    style="animation-delay: 2s;"></div>
            </div>

            <div class="relative mx-auto max-w-7xl5 px-6 lg:px-8">
                <div
                    class="relative overflow-hidden rounded-[3rem] bg-slate-900 px-8 py-16 text-center shadow-2xl lg:px-16 lg:py-20">

                    <div class="absolute inset-0 opacity-40">
                        <div
                            class="absolute -top-24 -left-24 h-64 w-64 rounded-full bg-gradient-to-br from-purple-600 to-fuchsia-600 blur-3xl">
                        </div>
                        <div
                            class="absolute -bottom-24 -right-24 h-64 w-64 rounded-full bg-gradient-to-br from-pink-600 to-amber-500 blur-3xl">
                        </div>
                    </div>

                    <div class="relative z-10">
                        <span
                            class="inline-flex items-center rounded-full bg-white/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-fuchsia-300 ring-1 ring-inset ring-white/20">
                            Get Started
                        </span>

                        <h2 class="mt-8 text-xl font-extrabold tracking-tight text-white sm:text-6xl">
                            Ready to modernize <br class="hidden sm:block" />
                            <span
                                class="bg-gradient-to-r from-purple-400 via-fuchsia-300 to-pink-400 bg-clip-text text-transparent">your
                                payments?</span>
                        </h2>

                        <p class="mx-auto mt-8 max-w-2xl text-lg leading-relaxed text-slate-300">
                            Stop losing revenue to high fees and friction. Let's architect a professional payment bridge
                            that works as hard as you do.
                        </p>

                        <div class="mt-12 flex flex-wrap items-center justify-center gap-6">
                            <a href="mailto:nextoraone@gmail.com"
                                class="group relative inline-flex items-center gap-2 rounded-2xl bg-white px-8 py-4 text-sm font-black text-slate-900 shadow-xl transition-all hover:scale-105 hover:bg-slate-50 active:scale-95">
                                <svg class="h-5 w-5 text-fuchsia-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0l-9 6.75-9-6.75" />
                                </svg>
                                Start My Project
                            </a>

                            <a href="https://wa.me/60182222507"
                                class="group inline-flex items-center gap-2 rounded-2xl border border-white/20 bg-white/5 px-8 py-4 text-sm font-bold text-white backdrop-blur-md transition-all hover:bg-white/10 hover:border-white/40">
                                <svg class="h-5 w-5 fill-current text-emerald-400" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
