<x-app-layout>
    <section class="bg-[#FAF9F6] min-h-screen pb-20">

        {{-- Header Section --}}
        <div class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 text-center">
                <h2 class="text-xs font-bold uppercase tracking-[0.3em] text-[#8f6a10] mb-3">Logistics</h2>
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-tight mb-4">
                    Shipping & Delivery
                </h1>
                <p class="text-sm text-gray-500 max-w-lg mx-auto leading-relaxed">
                    Everything you need to know about how we get your favorite items from our shop to your doorstep.
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                {{-- Left: Sidebar Help --}}
                <div class="space-y-6 lg:sticky lg:top-36 h-fit">

                    {{-- Content --}}
                    <div class="bg-white rounded-3xl p-6 text-gray-900 shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-gray-500">Content</p>
                            <span
                                class="inline-flex items-center rounded-full border border-[#D4AF37]/25 bg-[#D4AF37]/10 px-2.5 py-1
                                         text-[10px] font-extrabold tracking-widest text-[#8f6a10] uppercase">
                                Policy
                            </span>
                        </div>

                        @php
                            $policyLinks = [
                                ['id' => 'p1', 'label' => '1) Business Operator Information'],
                                ['id' => 'p2', 'label' => '2) Types of Delivery'],
                                ['id' => 'p3', 'label' => '3) Digital Delivery, Activation and Legal Completion'],
                                ['id' => 'p4', 'label' => '4) Physical Shipping (If Applicable)'],
                                ['id' => 'p5', 'label' => '5) Delays, Exceptional Circumstances and Force Majeure'],
                                [
                                    'id' => 'p6',
                                    'label' => '6) Delivery of Services, Custom Work and Project-Based Orders',
                                ],
                                ['id' => 'p7', 'label' => '7) Proof of Fulfillment and Electronic Records'],
                                ['id' => 'p8', 'label' => '8) Limitation of Liability'],
                                ['id' => 'p9', 'label' => '9) Refunds, Returns and Related Policies'],
                                ['id' => 'p10', 'label' => '10)Contact Information'],
                            ];
                        @endphp

                        <div class="max-h-[360px] overflow-auto pr-1 space-y-2 text-sm">
                            @foreach ($policyLinks as $l)
                                <a href="#{{ $l['id'] }}"
                                    class="group flex items-center justify-between rounded-xl border border-gray-100 bg-gray-50 px-4 py-2.5
                                          text-gray-700 hover:bg-white hover:border-gray-200 transition">
                                    <span class="font-semibold truncate">{{ $l['label'] }}</span>
                                    <span class="text-[#8f6a10] opacity-0 group-hover:opacity-100 transition">→</span>
                                </a>
                            @endforeach
                        </div>

                        <p class="text-xs text-gray-500 mt-3 leading-relaxed">
                            Tip: Use Quick Jump for major sections, then use Content to jump within the Policy.
                        </p>
                    </div>
                </div>

                {{-- Right: Detailed Info --}}
                <div class="lg:col-span-2 space-y-12">

                    {{-- Shipping Rates Table --}}
                    {{-- <section id="shipping-rates" class="scroll-mt-24">
                        <div class="bg-white rounded-3xl p-8 text-gray-900 shadow-xl border border-black/5" id="track-order">
                        <h3 class="text-lg font-bold mb-4">Track Order</h3>

                        <p class="text-xs text-gray-500 mb-6 leading-relaxed">
                            Already have a tracking number? Enter it below to see the status.
                        </p>

                        <form action="#" class="space-y-3">
                            <input type="text" placeholder="e.g. MY123456789"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl
                                       px-4 py-3 text-sm text-gray-900 placeholder-gray-400
                                       focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:border-[#D4AF37]">

                            <button
                                class="w-full bg-[#D4AF37] hover:bg-[#b8962d]
                                       text-gray-900 font-bold py-3 rounded-xl text-sm transition-colors">
                                Track Now
                            </button>
                        </form>
                    </div>
                    </section> --}}

                    {{-- Important Notes --}}
                    <section id="things-to-note" class="space-y-6 scroll-mt-24">
                        <h2 class="text-xl font-bold text-gray-900">Shipping & Delivery Policy — Nextora.my</h2>

                        <div class="prose prose-sm text-gray-600 max-w-none space-y-4">

                            <p>
                                This Shipping & Delivery Policy (“Policy”) sets out the terms governing the processing,
                                fulfillment, dispatch, activation, provisioning, and delivery of products and services
                                purchased through Nextora.my (the “Platform”). This Policy forms part of the Platform’s
                                Terms & Conditions. By placing an order through the Platform, you acknowledge that you
                                have read, understood, and agreed to this Policy, subject always to any rights or
                                remedies that cannot be excluded under applicable Malaysian law.
                            </p>

                            <p>
                                <strong>Last updated:</strong> 2 April 2026
                            </p>

                            <p>
                                <strong>Coverage:</strong> Digital delivery, physical shipping, and service fulfillment
                            </p>

                            <div class="rounded-2xl border border-[#D4AF37]/25 bg-[#D4AF37]/10 p-5">
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    <strong>Important Notice:</strong> Most products and services sold on Nextora.my are
                                    digital or electronically fulfilled. For such orders, delivery shall be deemed
                                    completed once the product, access right, subscription, registration, code, account
                                    feature, or service has been successfully issued, activated, provisioned,
                                    registered, transmitted, or made accessible to the customer through the designated
                                    delivery channel.
                                </p>
                            </div>

                        </div>
                    </section>

                    {{-- Policy Section --}}
                    <section id="content" class="space-y-6 scroll-mt-24">

                        <div class="flex items-start justify-between gap-6">
                            <div>
                                <h2 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                                    <span class="w-8 h-1 bg-[#D4AF37] rounded-full"></span>
                                    Shipping & Delivery Policy
                                </h2>
                                <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                                    Please read this Policy together with our Terms & Conditions and Refund & Return
                                    Policy.
                                </p>
                            </div>

                            <span
                                class="shrink-0 inline-flex items-center rounded-full border border-[#D4AF37]/25 bg-[#D4AF37]/10
                                       px-3 py-1 text-[11px] font-extrabold tracking-widest text-[#8f6a10] uppercase">
                                Policy
                            </span>
                        </div>

                        {{-- 1 --}}
                        <div id="p1"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                1) Business Operator Information
                            </h3>

                            <div class="prose prose-sm max-w-none text-gray-600 mt-4 space-y-4">

                                <p>
                                    The Platform is operated by:
                                </p>

                                <table
                                    class="w-full text-sm text-gray-600 border border-gray-100 rounded-xl overflow-hidden">
                                    <tbody class="divide-y divide-gray-100">
                                        <tr>
                                            <td class="py-3 px-4 font-semibold text-gray-900 w-1/3">Business Name</td>
                                            <td class="py-3 px-4">NEXTORA ENTERPRISE</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-4 font-semibold text-gray-900">Registration No.</td>
                                            <td class="py-3 px-4">202503284924 (NS0314937-A)</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-4 font-semibold text-gray-900">Business Address</td>
                                            <td class="py-3 px-4">
                                                Wisma Tian Siang, No. 6 BWH, Jalan Dato Ahmad Yunus, 32000 Sitiawan,
                                                Perak, Malaysia
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-4 font-semibold text-gray-900">Email</td>
                                            <td class="py-3 px-4">
                                                <a href="mailto:nextoraone@gmail.com"
                                                    class="text-[#8f6a10] font-medium hover:underline">
                                                    nextoraone@gmail.com
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-4 font-semibold text-gray-900">Website</td>
                                            <td class="py-3 px-4">
                                                <a href="https://nextora.my" target="_blank"
                                                    class="text-[#8f6a10] font-medium hover:underline">
                                                    https://nextora.my
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p>
                                    Certain products or services may be supplied, provisioned, registered, delivered, or
                                    otherwise fulfilled by third-party providers, including but not limited to
                                    registrars, hosting operators, technology vendors, payment processors, software
                                    providers, couriers, logistics operators, or independent sellers. Where applicable,
                                    additional provider-specific or product-specific rules may apply.
                                </p>

                            </div>
                        </div>

                        {{-- 2 --}}
                        <div id="p2"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                2) Types of Delivery
                            </h3>

                            <div class="prose prose-sm max-w-none text-gray-600 mt-4 space-y-4">

                                <h4 class="text-sm font-bold text-gray-900">2.1 Digital Delivery</h4>

                                <p>
                                    Digital delivery is the primary mode of fulfillment on the Platform and includes,
                                    without limitation:
                                </p>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>Domain registration, renewal, transfer, DNS setup, and related domain services
                                    </li>
                                    <li>Hosting, server provisioning, business email, cloud resources, and account
                                        access</li>
                                    <li>Software subscriptions, memberships, licenses, digital tools, and account-based
                                        services</li>
                                    <li>Digital codes, vouchers, downloadable content, or electronically issued
                                        entitlements</li>
                                    <li>Managed services, setup services, maintenance services, consulting, and
                                        electronically delivered work output</li>
                                </ul>

                                <h4 class="text-sm font-bold text-gray-900 mt-6">2.2 Physical Shipping</h4>

                                <p>
                                    Physical shipping applies only to orders involving tangible goods. Physical shipping
                                    timelines are estimates only unless otherwise expressly stated.
                                </p>

                            </div>
                        </div>

                        {{-- 3 --}}
                        <div id="p3"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                3) Digital Delivery, Activation and Legal Completion
                            </h3>

                            <div class="prose prose-sm max-w-none text-gray-600 mt-4 space-y-4">

                                {{-- 3.1 --}}
                                <h4 class="text-sm font-bold text-gray-900">3.1 Delivery Channels</h4>

                                <p>
                                    Digital products or services may be delivered or fulfilled through one or more of
                                    the following channels:
                                </p>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>Email sent to the email address provided at checkout</li>
                                    <li>Customer account dashboard, platform panel, or secured user portal</li>
                                    <li>Administrative status update, onboarding notice, or activation notification</li>
                                    <li>Third-party provider confirmation, registry confirmation, or technical
                                        provisioning logs</li>
                                    <li>Electronic transmission of credentials, access links, license keys, or service
                                        notices</li>
                                </ul>

                                {{-- 3.2 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">3.2 Delivery Completion</h4>

                                <p>
                                    Unless otherwise expressly stated in writing, digital delivery shall be deemed
                                    complete when the purchased item or service has been successfully:
                                </p>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>registered, renewed, transferred, or submitted to the relevant provider or
                                        authority;</li>
                                    <li>activated, provisioned, configured, enabled, or deployed;</li>
                                    <li>sent or transmitted to the customer’s designated communication channel;</li>
                                    <li>made available in the customer’s account, dashboard, or service environment; or
                                    </li>
                                    <li>performed in accordance with the relevant order scope, quotation, or accepted
                                        work arrangement.</li>
                                </ul>

                                <p>
                                    For avoidance of doubt: digital delivery may be legally complete even if the
                                    customer has not yet opened the email, logged into the dashboard, used the service,
                                    redeemed the code, or otherwise utilized the delivered item, provided the item or
                                    service has been properly issued, transmitted, activated, or made available.
                                </p>

                                {{-- 3.3 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">3.3 Estimated Processing Times</h4>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>Instant or automated items: usually processed shortly after successful payment
                                        confirmation, subject to system, fraud, and provider checks.</li>
                                    <li>Domain-related services: may require additional time for registry approval,
                                        ownership verification, DNS propagation, transfer authorization, or document
                                        review.</li>
                                    <li>Hosting, email, and cloud services: may be provisioned immediately or after
                                        internal setup, compliance review, or technical verification.</li>
                                    <li>Custom services or project-based services: are fulfilled according to agreed
                                        scope, milestones, approvals, and operational readiness.</li>
                                </ul>

                                {{-- 3.4 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">3.4 Customer Obligations</h4>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>You must provide true, accurate, current, and complete information at checkout
                                        and throughout the fulfillment process.</li>
                                    <li>You are responsible for ensuring the correctness of your email address, domain
                                        details, business details, billing information, shipping address, and any
                                        technical or project information required for fulfillment.</li>
                                    <li>You must provide all requested documents, credentials, approvals, and
                                        confirmations within a reasonable time.</li>
                                    <li>We shall not be liable for delays, failures, suspension, rejection, or
                                        additional costs caused by inaccurate, incomplete, false, or delayed customer
                                        information.</li>
                                </ul>

                                {{-- 3.5 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">3.5 Failed or Missing Digital Delivery
                                </h4>

                                <p>
                                    If you believe your digital order has not been delivered, you should first:
                                </p>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>check your spam, junk, promotions, filtered inboxes, and account dashboard;</li>
                                    <li>verify the contact details submitted during checkout;</li>
                                    <li>confirm whether provider-side approval, domain verification, or system
                                        processing is still pending; and</li>
                                    <li>contact support with your order number and payment reference.</li>
                                </ul>

                                <p>
                                    For compliance, fraud prevention, account security, service integrity, or dispute
                                    verification purposes, we may require further identification, proof of payment, or
                                    supporting documents before reissuing access, resending credentials, or reprocessing
                                    delivery.
                                </p>

                            </div>
                        </div>

                        {{-- 4 --}}
                        <div id="p4"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                4) Physical Shipping (If Applicable)
                            </h3>

                            <div class="prose prose-sm max-w-none text-gray-600 mt-4 space-y-4">

                                {{-- 4.1 --}}
                                <h4 class="text-sm font-bold text-gray-900">4.1 Order Processing and Dispatch</h4>

                                <p>
                                    Physical orders are subject to order verification, stock confirmation, packing,
                                    labeling, and courier handover. Unless otherwise stated on the relevant product
                                    page, the following are general estimates only:
                                </p>

                                <div class="overflow-hidden border border-gray-100 rounded-xl mt-3">
                                    <table class="w-full text-left text-sm bg-white">
                                        <thead class="bg-gray-50 border-b border-gray-100">
                                            <tr>
                                                <th class="px-4 py-3 font-bold text-gray-900">Stage</th>
                                                <th class="px-4 py-3 font-bold text-gray-900">Estimated Timeframe</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-50">
                                            <tr>
                                                <td class="px-4 py-3 text-gray-700">Order processing</td>
                                                <td class="px-4 py-3 text-gray-600">1 to 3 working days</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-3 text-gray-700">Domestic delivery within Malaysia
                                                </td>
                                                <td class="px-4 py-3 text-gray-600">Approximately 2 to 7 working days
                                                    after courier pickup</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-3 text-gray-700">International delivery (if offered)
                                                </td>
                                                <td class="px-4 py-3 text-gray-600">Varies depending on destination,
                                                    customs clearance, and logistics provider</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                {{-- 4.2 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">4.2 Shipping Charges</h4>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>Applicable shipping, handling, or logistics charges, if any, will be disclosed
                                        at checkout or on the product page.</li>
                                    <li>Any free shipping campaign, threshold, or promotion shall be subject to stated
                                        conditions and may be changed, limited, or withdrawn where permitted.</li>
                                </ul>

                                {{-- 4.3 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">4.3 Risk and Delivery Status</h4>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>Physical delivery shall generally be regarded as completed when the parcel has
                                        been delivered to the address provided by the customer, as evidenced by courier
                                        records, delivery scans, delivery confirmation, or tracking history.</li>
                                    <li>Where the courier records delivery as completed, such record shall constitute
                                        prima facie evidence of delivery unless proven otherwise.</li>
                                </ul>

                                {{-- 4.4 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">4.4 Address Accuracy and Failed
                                    Delivery</h4>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>You are solely responsible for providing a complete and accurate delivery
                                        address and reachable contact number.</li>
                                    <li>We are not responsible for failed delivery, return-to-sender events, or delay
                                        caused by incorrect, incomplete, inaccessible, or undeliverable addresses
                                        supplied by the customer.</li>
                                    <li>If re-delivery, redirection, or re-shipment is required due to customer error or
                                        non-collection, additional charges may apply.</li>
                                </ul>

                                {{-- 4.5 --}}
                                <h4 class="text-sm font-bold text-gray-900 mt-6">4.5 Split Shipments</h4>

                                <p>
                                    We reserve the right to split shipments or fulfill items separately where stock
                                    location, supplier arrangement, operational efficiency, courier requirements, or
                                    safety considerations make separate dispatch appropriate.
                                </p>

                            </div>
                        </div>

                        {{-- 5 --}}
                        <div id="p5"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                5) Delays, Exceptional Circumstances and Force Majeure
                            </h3>

                            <div class="prose prose-sm max-w-none text-gray-600 mt-4 space-y-4">

                                <p>
                                    Any stated processing, activation, dispatch, provisioning, or delivery timeframe is
                                    an estimate only unless a fixed timeline has been expressly agreed in writing. We
                                    shall not be liable for delay, interruption, suspension, or non-performance caused
                                    by events beyond our reasonable control, including but not limited to:
                                </p>

                                <ul class="list-disc pl-5 space-y-2">
                                    <li>public holidays, peak periods, system congestion, provider backlog, registry
                                        delays, courier delays, customs delays, or network outages;</li>
                                    <li>weather events, natural disasters, accidents, labor disruption, acts of
                                        government, regulatory action, or public emergencies;</li>
                                    <li>technical failures, third-party system failure, hosting incidents, software
                                        dependency failure, fraud review, or security review; or</li>
                                    <li>customer delay in providing instructions, approvals, documents, access, content,
                                        or payment verification.</li>
                                </ul>

                                <p>
                                    Where reasonably practicable, we will take commercially reasonable steps to update
                                    customers on material delays affecting fulfillment.
                                </p>

                            </div>
                        </div>

                        {{-- 6 --}}
                        <div id="p6"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                6) Delivery of Services, Custom Work and Project-Based Orders
                            </h3>

                            <div class="mt-4 text-sm text-gray-600 space-y-3">

                                <p>
                                    For web development, system development, maintenance, cloud setup, consulting,
                                    managed services, onboarding services, and other service-based orders, delivery
                                    shall be governed by the accepted quotation, proposal, statement of work, service
                                    package, project timeline, or other written commercial arrangement.
                                </p>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>Milestone dates are estimates unless expressly described as fixed and binding.
                                    </p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>Delivery may depend on client feedback, content submission, approvals,
                                        credentials, integrations, technical feasibility, and third-party systems.</p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>Work may be regarded as delivered when the relevant milestone, output, report,
                                        configuration, access, deployment, or handover item has been provided or made
                                        available for review.</p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>Any delay caused by the customer may result in revised timelines, additional
                                        fees, or project rescheduling where applicable.</p>
                                </div>

                            </div>
                        </div>

                        {{-- 7 --}}
                        <div id="p7"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                7) Proof of Fulfillment and Electronic Records
                            </h3>

                            <div class="mt-4 text-sm text-gray-600 space-y-3">

                                <p>
                                    To the fullest extent permitted by law, the following may be relied upon as evidence
                                    of dispatch, delivery, fulfillment, activation, provision, or completion:
                                </p>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>system logs, transaction logs, dashboard status, account activation records,
                                        server logs, provisioning logs, registry records, and support records;</p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>emails sent to the contact details supplied by the customer;</p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>courier tracking records, delivery scans, and third-party logistics
                                        confirmations; and</p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>third-party supplier, platform, registrar, payment gateway, or service provider
                                        confirmations.</p>
                                </div>

                                <p>
                                    Electronic records and communications are recognized in Malaysia under the legal
                                    framework governing electronic commerce and electronic messages, subject to
                                    applicable law.
                                </p>

                            </div>
                        </div>

                        {{-- 8 --}}
                        <div id="p8"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                8) Limitation of Liability
                            </h3>

                            <div class="mt-4 text-sm text-gray-600 space-y-3">

                                <p>
                                    To the fullest extent permitted by applicable law, we shall not be liable for any
                                    indirect, incidental, special, consequential, exemplary, or economic loss arising
                                    out of or in connection with shipping, dispatch, delay, failed delivery, late
                                    activation, courier issues, third-party provider failure, customer inaction, or
                                    misuse of delivered products or services.
                                </p>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>Nothing in this Policy excludes, restricts, or limits any right, guarantee,
                                        remedy, or liability that cannot lawfully be excluded under Malaysian law.</p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>Where liability cannot be excluded but can be limited, our liability shall, to
                                        the extent permitted by law, be limited to re-supply, re-performance,
                                        re-activation, replacement, or the amount paid for the affected order, as we
                                        determine appropriate in the circumstances and subject to applicable law.</p>
                                </div>

                            </div>
                        </div>

                        {{-- 9 --}}
                        <div id="p9"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                9) Refunds, Returns and Related Policies
                            </h3>

                            <div class="mt-4 text-sm text-gray-600 space-y-3">

                                <p>
                                    Refunds, cancellations, returns, rejected deliveries, and non-refundable items are
                                    governed by our separate policies and applicable law. Please also review:
                                </p>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>
                                        <a href="{{ route('returns') }}"
                                            class="text-[#8f6a10] font-bold hover:underline">
                                            Refund & Return Policy
                                        </a>
                                    </p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>
                                        <a href="{{ route('terms') }}"
                                            class="text-[#8f6a10] font-bold hover:underline">
                                            Terms & Conditions
                                        </a>
                                    </p>
                                </div>

                                <div class="flex items-start gap-3">
                                    <span class="mt-1 w-1.5 h-1.5 rounded-full bg-[#D4AF37]"></span>
                                    <p>
                                        <a href="{{ route('privacy') }}"
                                            class="text-[#8f6a10] font-bold hover:underline">
                                            Privacy Policy
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>

                        {{-- 10 --}}
                        <div id="p10"
                            class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 scroll-mt-24">

                            <h3 class="text-base font-extrabold text-gray-900 tracking-tight">
                                10) Contact Information
                            </h3>

                            <div class="mt-4 text-sm text-gray-600 space-y-4">

                                <p>
                                    If you have any questions regarding order fulfillment, activation, delivery status,
                                    or shipping matters, please contact:
                                </p>

                                <div class="overflow-hidden border border-gray-100 rounded-2xl">
                                    <table class="w-full text-left text-sm bg-white">
                                        <tbody class="divide-y divide-gray-50">

                                            <tr>
                                                <td class="px-4 py-3 font-semibold text-gray-700 w-1/3">Business Name
                                                </td>
                                                <td class="px-4 py-3 text-gray-600">NEXTORA ENTERPRISE</td>
                                            </tr>

                                            <tr>
                                                <td class="px-4 py-3 font-semibold text-gray-700">Registration No.</td>
                                                <td class="px-4 py-3 text-gray-600">202503284924 (NS0314937-A)</td>
                                            </tr>

                                            <tr>
                                                <td class="px-4 py-3 font-semibold text-gray-700">Business Address</td>
                                                <td class="px-4 py-3 text-gray-600">
                                                    Wisma Tian Siang, No. 6 BWH, Jalan Dato Ahmad Yunus, 32000 Sitiawan,
                                                    Perak, Malaysia
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-4 py-3 font-semibold text-gray-700">Email</td>
                                                <td class="px-4 py-3 text-gray-600">
                                                    <a href="mailto:nextoraone@gmail.com"
                                                        class="text-[#8f6a10] font-bold hover:underline">
                                                        nextoraone@gmail.com
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-4 py-3 font-semibold text-gray-700">Website</td>
                                                <td class="px-4 py-3 text-gray-600">
                                                    <a href="https://nextora.my"
                                                        class="text-[#8f6a10] font-bold hover:underline">
                                                        https://nextora.my
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </section>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
