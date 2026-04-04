<x-app-layout>
    <div class="bg-white text-slate-900">
        <!-- Hero -->
        <section class="relative overflow-hidden bg-slate-950 text-white selection:bg-blue-500/30">
            <div class="absolute inset-0 overflow-hidden">
                <div
                    class="absolute -top-[10%] -left-[10%] h-[500px] w-[500px] rounded-full bg-blue-600/20 blur-[120px]">
                </div>
                <div
                    class="absolute bottom-[10%] right-[5%] h-[400px] w-[400px] rounded-full bg-cyan-500/10 blur-[100px]">
                </div>
                <div
                    class="absolute inset-0 bg-[url('https://pixelbakery.com/img/grid.svg')] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))] opacity-10">
                </div>
            </div>

            <div class="relative mx-auto max-w-7xl5 px-6 py-24 lg:px-8 lg:py-32">
                <div class="grid items-center gap-16 lg:grid-cols-2">

                    <div class="z-10">
                        <div
                            class="inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-400/5 px-4 py-1.5 text-sm font-medium text-blue-300 backdrop-blur-md">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                            </span>
                            Web Development Excellence
                        </div>

                        <h1 class="mt-8 text-5xl font-extrabold tracking-tight text-white sm:text-6xl lg:text-7xl">
                            Digital experiences <br />
                            <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">that
                                scale.</span>
                        </h1>

                        <p class="mt-8 max-w-xl text-lg leading-relaxed text-slate-400">
                            We engineer high-performance eCommerce platforms and custom web systems. Fast, mobile-first,
                            and meticulously crafted to convert your visitors into loyal customers.
                        </p>

                        <div class="mt-10 flex flex-wrap gap-5">
                            <a href="#contact"
                                class="group relative inline-flex items-center justify-center rounded-xl bg-blue-600 px-8 py-4 text-sm font-bold text-white transition-all duration-200 hover:bg-blue-500 hover:shadow-[0_0_20px_rgba(37,99,235,0.4)]">
                                Get Free Consultation
                                <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                            <a href="#services"
                                class="inline-flex items-center rounded-xl border border-slate-700 bg-slate-900/50 px-8 py-4 text-sm font-bold text-white transition hover:bg-slate-800 hover:border-slate-600">
                                Explore Services
                            </a>
                        </div>

                        <div class="mt-12 grid grid-cols-3 gap-8 border-t border-slate-800 pt-10">
                            <div>
                                <p class="text-2xl font-bold text-white">100%</p>
                                <p class="text-xs uppercase tracking-widest text-slate-500 font-semibold mt-1">
                                    Responsive</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-white">SEO+</p>
                                <p class="text-xs uppercase tracking-widest text-slate-500 font-semibold mt-1">Optimized
                                </p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-white">Fast</p>
                                <p class="text-xs uppercase tracking-widest text-slate-500 font-semibold mt-1">Core
                                    Vitals</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="absolute -inset-1 rounded-[2rem] bg-gradient-to-r from-blue-500 to-cyan-500 opacity-20 blur-2xl transition duration-1000 group-hover:opacity-40">
                        </div>

                        <div
                            class="relative rounded-[2rem] border border-white/10 bg-slate-900/50 p-3 shadow-2xl backdrop-blur-2xl">
                            <div class="overflow-hidden rounded-2xl bg-slate-950">
                                <div class="flex items-center justify-between bg-slate-900/80 px-4 py-3">
                                    <div class="flex gap-2">
                                        <div class="h-3 w-3 rounded-full bg-red-500/20 border border-red-500/50"></div>
                                        <div class="h-3 w-3 rounded-full bg-yellow-500/20 border border-yellow-500/50">
                                        </div>
                                        <div class="h-3 w-3 rounded-full bg-green-500/20 border border-green-500/50">
                                        </div>
                                    </div>
                                    <div class="h-4 w-32 rounded-full bg-slate-800"></div>
                                    <div class="w-10"></div>
                                </div>

                                <div class="p-6 space-y-4">
                                    <div
                                        class="group/card rounded-xl border border-slate-800 bg-slate-900/50 p-5 transition-all hover:border-blue-500/50 hover:bg-slate-800/80">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9.75 17L9 21h6l-.75-4M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-xs font-bold uppercase tracking-widest text-blue-400">
                                                    Frontend</p>
                                                <p class="text-white font-medium">Next.js & Tailwind Architecture</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="group/card rounded-xl border border-slate-800 bg-slate-900/50 p-5 transition-all hover:border-cyan-500/50 hover:bg-slate-800/80">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-cyan-500/10 text-cyan-400">
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-xs font-bold uppercase tracking-widest text-cyan-400">
                                                    Backend</p>
                                                <p class="text-white font-medium">Scalable API & Cloud Systems</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute -bottom-6 -right-6 hidden animate-bounce rounded-2xl border border-blue-400/20 bg-blue-600/20 px-6 py-4 text-sm font-semibold text-white backdrop-blur-xl md:block">
                            🚀 Ready to Launch?
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="relative mx-auto max-w-7xl5 px-6 py-20 lg:px-8">
            <div class="mx-auto max-w-34l text-center">
                <span
                    class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-bold uppercase tracking-widest text-blue-600 ring-1 ring-inset ring-blue-600/20">
                    What We Offer
                </span>
                <h2 class="mt-6 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                    Website services for your business
                </h2>
                <p class="mt-6 text-lg leading-8 text-slate-600">
                    We help you build websites that look professional, work smoothly, and attract more customers.
                </p>
            </div>

            <div class="mt-16 grid gap-8 md:grid-cols-2 xl:grid-cols-4">

                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-500/30 hover:shadow-2xl hover:shadow-blue-500/10">
                    <div
                        class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-600 transition-colors group-hover:bg-blue-600 group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Company Website</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600">
                        A professional website to show your business, services, and build trust with customers.
                    </p>
                    <div class="mt-8 flex items-center text-sm font-semibold text-blue-600">
                        Learn more <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                    </div>
                </div>

                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-cyan-500/30 hover:shadow-2xl hover:shadow-cyan-500/10">
                    <div
                        class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600 transition-colors group-hover:bg-cyan-600 group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Landing Page</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600">
                        Simple pages to promote your product or collect customer enquiries.
                    </p>
                    <div class="mt-8 flex items-center text-sm font-semibold text-cyan-600">
                        Learn more <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                    </div>
                </div>

                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-emerald-500/30 hover:shadow-2xl hover:shadow-emerald-500/10">
                    <div
                        class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 transition-colors group-hover:bg-emerald-600 group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Online Store</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600">
                        Sell your products online with payment system, order management, and easy checkout.
                    </p>
                    <div class="mt-8 flex items-center text-sm font-semibold text-emerald-600">
                        Learn more <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                    </div>
                </div>

                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-violet-500/30 hover:shadow-2xl hover:shadow-violet-500/10">
                    <div
                        class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-violet-50 text-violet-600 transition-colors group-hover:bg-violet-600 group-hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Custom Web System</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600">
                        Build custom systems like booking, dashboard, or internal tools for your business.
                    </p>
                    <div class="mt-8 flex items-center text-sm font-semibold text-violet-600">
                        Learn more <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- Our Technology -->
        <section id="technology" class="relative overflow-hidden bg-slate-950 py-16 text-white">
            <div class="relative mx-auto max-w-7xl5 px-6 lg:px-8">

                <div class="text-center">
                    {{-- <span
                        class="inline-flex items-center rounded-full border border-blue-500/20 bg-blue-500/10 px-3 py-1 text-xs font-bold uppercase tracking-widest text-blue-300">
                        Our Technology
                    </span> --}}
                    <h2 class="mt-4 text-3xl font-extrabold sm:text-4xl">
                        Built with modern technologies
                    </h2>
                </div>

                <!-- Horizontal Scroll -->
                <div class="mt-10">
                    <div class="flex flex-wrap items-center justify-center gap-24">

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/laravel/FF2D20"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                Laravel
                            </span>
                        </div>

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/html5/E34F26"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                HTML
                            </span>
                        </div>

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/css/1572B6"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                CSS
                            </span>
                        </div>

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/javascript/F7DF1E"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                JavaScript
                            </span>
                        </div>

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/bootstrap/7952B3"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                Bootstrap
                            </span>
                        </div>

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                Tailwind
                            </span>
                        </div>

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/php/777BB4"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                PHP
                            </span>
                        </div>

                        <div class="group flex flex-col items-center text-center">
                            <img src="https://cdn.simpleicons.org/mysql/4479A1"
                                class="h-20 w-20 transition duration-300 group-hover:scale-110">
                            <span
                                class="mt-3 text-sm font-semibold text-slate-300 transition duration-300 group-hover:text-white">
                                MySQL
                            </span>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="bg-slate-50 py-16 lg:py-24">
            <div class="mx-auto grid max-w-7xl5 gap-16 px-6 lg:grid-cols-2 lg:px-8 items-start">

                <div>
                    <div
                        class="inline-flex items-center rounded-full bg-blue-600/10 px-3 py-1 text-xs font-bold uppercase tracking-widest text-blue-700">
                        Why Choose Us
                    </div>

                    <h2 class="mt-6 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                        We build websites that help your business grow
                    </h2>

                    <p class="mt-6 text-lg leading-relaxed text-slate-600">
                        A good website is not just for looks. It should help you get more customers, improve your
                        operations,
                        and support your business growth.
                    </p>

                    <div class="mt-10 space-y-8">

                        <div class="group flex gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white text-blue-600 shadow-sm ring-1 ring-slate-200 transition-all group-hover:bg-blue-600 group-hover:text-white group-hover:shadow-blue-200">
                                <span class="text-lg font-bold">01</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">Mobile-friendly design</h3>
                                <p class="mt-2 leading-relaxed text-slate-600">
                                    Your website will look and work perfectly on phone, tablet, and desktop.
                                </p>
                            </div>
                        </div>

                        <div class="group flex gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white text-blue-600 shadow-sm ring-1 ring-slate-200 transition-all group-hover:bg-blue-600 group-hover:text-white group-hover:shadow-blue-200">
                                <span class="text-lg font-bold">02</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">Clean and scalable system</h3>
                                <p class="mt-2 leading-relaxed text-slate-600">
                                    Built properly so your website can grow and be upgraded easily in the future.
                                </p>
                            </div>
                        </div>

                        <div class="group flex gap-5">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white text-blue-600 shadow-sm ring-1 ring-slate-200 transition-all group-hover:bg-blue-600 group-hover:text-white group-hover:shadow-blue-200">
                                <span class="text-lg font-bold">03</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">SEO-ready structure</h3>
                                <p class="mt-2 leading-relaxed text-slate-600">
                                    Built with a proper structure to help your website rank better on Google.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:mt-4">

                    <div
                        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500/20 hover:shadow-xl hover:shadow-blue-500/5">
                        <div class="mb-4 text-blue-600">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Fast Loading</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Your website loads fast to give users a better experience and reduce drop-off.
                        </p>
                    </div>

                    <div
                        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500/20 hover:shadow-xl hover:shadow-blue-500/5">
                        <div class="mb-4 text-blue-600">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-7.618 3.04C3.845 10.635 4.88 15.56 8.526 18.847l3.474 3.153 3.474-3.153c3.647-3.287 4.681-8.212 3.515-12.863z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Secure</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Built with proper security practices to protect your website and customer data.
                        </p>
                    </div>

                    <div
                        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500/20 hover:shadow-xl hover:shadow-blue-500/5">
                        <div class="mb-4 text-blue-600">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Easy to Manage</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Simple backend so you can update content without technical skills.
                        </p>
                    </div>

                    <div
                        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:-translate-y-2 hover:border-blue-500/20 hover:shadow-xl hover:shadow-blue-500/5">
                        <div class="mb-4 text-blue-600">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Results-focused</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Designed to help you get more enquiries, leads, and business results.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Process -->
        <section id="process" class="relative mx-auto max-w-7xl5 px-6 py-24 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span
                    class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-bold uppercase tracking-widest text-blue-600 ring-1 ring-inset ring-blue-600/20">
                    How It Works
                </span>
                <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                    Simple steps from idea to launch
                </h2>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 xl:grid-cols-4">

                <!-- 01 -->
                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-600/20 hover:bg-slate-50/50">
                    <div
                        class="absolute right-6 top-6 text-5xl font-black text-slate-100 transition-colors group-hover:text-blue-100/50 select-none">
                        01
                    </div>

                    <div class="relative">
                        <span
                            class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <h3 class="mt-8 text-xl font-bold text-slate-900">Understand Your Needs</h3>
                        <p class="mt-4 text-sm leading-6 text-slate-600">
                            We discuss your business, goals, and what you need for your website.
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-600/20 hover:bg-slate-50/50">
                    <div
                        class="absolute right-6 top-6 text-5xl font-black text-slate-100 transition-colors group-hover:text-blue-100/50 select-none">
                        02
                    </div>

                    <div class="relative">
                        <span
                            class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </span>
                        <h3 class="mt-8 text-xl font-bold text-slate-900">Design Your Website</h3>
                        <p class="mt-4 text-sm leading-6 text-slate-600">
                            We plan the layout and design so your website looks clean and easy to use.
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-600/20 hover:bg-slate-50/50">
                    <div
                        class="absolute right-6 top-6 text-5xl font-black text-slate-100 transition-colors group-hover:text-blue-100/50 select-none">
                        03
                    </div>

                    <div class="relative">
                        <span
                            class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </span>
                        <h3 class="mt-8 text-xl font-bold text-slate-900">Build the Website</h3>
                        <p class="mt-4 text-sm leading-6 text-slate-600">
                            We develop your website to make sure it is fast, secure, and working properly.
                        </p>
                    </div>
                </div>

                <!-- 04 -->
                <div
                    class="group relative flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-600/20 hover:bg-slate-50/50">
                    <div
                        class="absolute right-6 top-6 text-5xl font-black text-slate-100 transition-colors group-hover:text-blue-100/50 select-none">
                        04
                    </div>

                    <div class="relative">
                        <span
                            class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <h3 class="mt-8 text-xl font-bold text-slate-900">Launch & Support</h3>
                        <p class="mt-4 text-sm leading-6 text-slate-600">
                            We launch your website and provide support if you need updates or improvements.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing" class="relative bg-slate-950 py-24 text-white overflow-hidden">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-blue-600/10 blur-[120px] pointer-events-none">
            </div>

            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <span
                        class="inline-flex items-center rounded-full border border-blue-500/30 bg-blue-500/10 px-3 py-1 text-xs font-bold uppercase tracking-widest text-blue-400">
                        Pricing
                    </span>
                    <h2 class="mt-6 text-4xl font-extrabold tracking-tight sm:text-5xl">
                        Choose a package that fits your business
                    </h2>
                    <p class="mt-6 text-lg text-slate-400">
                        Simple pricing with no hidden cost. Start small or scale as your business grows.
                    </p>
                </div>

                <div class="mt-16 grid gap-8 lg:grid-cols-3 lg:items-center">

                    <!-- Starter -->
                    <div
                        class="group rounded-3xl border border-white/10 bg-slate-900/50 p-8 backdrop-blur-sm transition-all hover:border-white/20">
                        <h3 class="text-lg font-bold">Starter</h3>
                        <div class="mt-4 flex items-baseline gap-1">
                            <span class="text-4xl font-bold">RM999</span>
                            <span class="text-sm text-slate-500">/project</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-400">Good for small businesses just getting started.</p>

                        <ul class="mt-8 space-y-4 text-sm text-slate-300">
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Up to 5 pages
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Mobile-friendly design
                            </li>
                            <li class="flex items-center gap-3 text-slate-500 line-through">
                                Advanced animations
                            </li>
                        </ul>

                        <a href="#contact"
                            class="mt-8 block w-full rounded-xl border border-white/10 bg-white/5 py-3 text-center text-sm font-bold text-white transition hover:bg-white hover:text-slate-950">
                            Get Started
                        </a>
                    </div>

                    <!-- Business -->
                    <div
                        class="relative rounded-3xl bg-blue-600 p-8 shadow-2xl shadow-blue-500/20 ring-4 ring-blue-500/50 transform lg:scale-110 z-10">
                        <div
                            class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-gradient-to-r from-cyan-400 to-blue-400 px-4 py-1 text-[10px] font-black uppercase tracking-widest text-blue-950 shadow-xl">
                            Most Popular
                        </div>

                        <h3 class="text-lg font-bold">Business</h3>
                        <div class="mt-4 flex items-baseline gap-1">
                            <span class="text-5xl font-bold">RM2499</span>
                        </div>
                        <p class="mt-2 text-sm text-blue-100 font-medium">Best for growing businesses.</p>

                        <ul class="mt-8 space-y-4 text-sm text-blue-50">
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-cyan-300" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Up to 10 pages
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-cyan-300" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Better design & user experience
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-cyan-300" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                WhatsApp / enquiry integration
                            </li>
                        </ul>

                        <a href="#contact"
                            class="mt-8 block w-full rounded-xl bg-white py-4 text-center text-sm font-black text-blue-600 shadow-lg shadow-blue-900/40 transition hover:bg-blue-50">
                            Choose Business
                        </a>
                    </div>

                    <!-- Custom -->
                    <div
                        class="group rounded-3xl border border-white/10 bg-slate-900/50 p-8 backdrop-blur-sm transition-all hover:border-white/20">
                        <h3 class="text-lg font-bold">Custom</h3>
                        <div class="mt-4 flex items-baseline gap-1">
                            <span class="text-4xl font-bold">Quote</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-400">For advanced or special requirements.</p>

                        <ul class="mt-8 space-y-4 text-sm text-slate-300">
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Custom system or web app
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                API / third-party integration
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Full eCommerce features
                            </li>
                        </ul>

                        <a href="#contact"
                            class="mt-8 block w-full rounded-xl border border-white/10 bg-white/5 py-3 text-center text-sm font-bold text-white transition hover:bg-white hover:text-slate-950">
                            Request Quote
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq" class="relative mx-auto max-w-7xl px-6 py-24 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span
                    class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-bold uppercase tracking-widest text-blue-600 ring-1 ring-inset ring-blue-600/20">
                    FAQ
                </span>
                <h2 class="mt-6 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                    Common questions
                </h2>
            </div>

            <div class="mt-16 grid gap-6 md:grid-cols-2 lg:gap-8">

                <!-- Q1 -->
                <div
                    class="group flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-500/5">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-600 text-white shadow-md shadow-blue-600/20">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">
                                How long to build a website?
                            </h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-600">
                                Usually about <strong>1 to 3 weeks</strong> for a normal website. Bigger or more complex
                                projects will take longer.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Q2 -->
                <div
                    class="group flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-500/5">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-600 text-white shadow-md shadow-blue-600/20">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.430.326-.670.442-.745.361-1.450.999-1.450 1.827v.750M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.250h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">
                                Can you redesign my existing website?
                            </h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-600">
                                Yes. We can upgrade your current website to make it faster, more modern, and easier to
                                use.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Q3 -->
                <div
                    class="group flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-500/5">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-600 text-white shadow-md shadow-blue-600/20">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.430.326-.670.442-.745.361-1.450.999-1.450 1.827v.750M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.250h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">
                                Will my website work on mobile?
                            </h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-600">
                                Yes. Your website will work smoothly on phone, tablet, and desktop.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Q4 -->
                <div
                    class="group flex flex-col rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-500/5">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-600 text-white shadow-md shadow-blue-600/20">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.430.326-.670.442-.745.361-1.450.999-1.450 1.827v.750M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.250h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">
                                Do you provide support after launch?
                            </h3>
                            <p class="mt-4 text-sm leading-relaxed text-slate-600">
                                Yes. We can help with updates, fixes, and maintenance after your website goes live.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA / Contact -->
        <section id="contact" class="relative overflow-hidden bg-blue-600 py-12 text-white">
            <div class="absolute -top-24 -left-24 h-64 w-64 rounded-full bg-blue-500/30 blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 h-64 w-64 rounded-full bg-cyan-400/20 blur-3xl"></div>

            <div class="relative mx-auto max-w-5xl px-6 text-center lg:px-8">

                <h2 class="mt-8 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    Ready to launch your <span class="text-cyan-200">next website?</span>
                </h2>

                <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-blue-100/90">
                    Stop waiting and start growing. Let’s discuss your vision and build a high-performance digital
                    experience that actually moves the needle for your business.
                </p>

                <div class="mt-12 flex flex-wrap justify-center items-center gap-6">
                    <a href="mailto:nextoraone@gmail.com"
                        class="group relative inline-flex items-center gap-3 overflow-hidden rounded-2xl bg-white px-8 py-4 text-sm font-bold text-blue-600 transition-all hover:scale-105 hover:shadow-xl hover:shadow-blue-900/20">
                        <svg class="h-5 w-5 transition-transform group-hover:-rotate-12" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Email Our Team
                    </a>

                    <a href="https://wa.me/60182222507"
                        class="group inline-flex items-center gap-3 rounded-2xl border-2 border-white/30 bg-transparent px-8 py-4 text-sm font-bold text-white transition-all hover:border-white hover:bg-white/10">
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.63 1.438h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        WhatsApp Us
                    </a>
                </div>

                <p class="mt-10 text-xs font-medium text-blue-200/60">
                    Average response time: &lt; 2 hours during business hours.
                </p>
            </div>
        </section>
    </div>
</x-app-layout>
