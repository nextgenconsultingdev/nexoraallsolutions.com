@php
    $pricingPlans = [
        [
            'name' => 'Found',
            'summary' => 'Get found online. Look professional. Get the call.',
            'price' => '$497.00',
            'original_price' => null,
            'monthly_price' => '$19.00',
            'timeline' => 'Live in 5 business days',
            'cta_label' => 'Get started',
            'is_highlighted' => false,
            'features' => [
                'Professional 5-page website built for your specific trade',
                'Shows up on Google searches — on-page SEO included',
                'Contact form that texts you instantly when someone fills it out',
                'WhatsApp + call button front and center on every page',
                'Photo gallery to show your work and build trust',
                'Google Maps so customers know exactly where you serve',
                'Works perfectly on any phone — most of your customers are on mobile',
                'Hosting fully managed — we handle everything, no tech headaches',
                'Unlimited edits for 90 days after launch',
            ],
        ],
        [
            'name' => 'Booked',
            'summary' => 'Stop losing leads to competitors. Get instant replies working for you 24/7.',
            'price' => '$897.00',
            'original_price' => null,
            'monthly_price' => '$49.00',
            'timeline' => 'Live in 1 week',
            'cta_label' => 'Get started',
            'is_highlighted' => true,
            'features' => [
                'Everything in Found',
                'Instant auto-reply the moment a lead contacts you via SMS, WhatsApp, Facebook, or Instagram — even at 2am',
                'Automated review requests sent after every completed job — get to 50+ Google reviews fast',
                'Simple lead inbox — see every lead and every message in one place, right from your phone',
                'Follow-up sequences that automatically chase leads so you don\'t have to',
                'Monthly performance snapshot — calls received, leads captured, reviews earned',
            ],
        ],
        [
            'name' => 'Dominant',
            'summary' => 'The complete growth machine. Run your entire business from your phone.',
            'price' => '$1,297.00',
            'original_price' => null,
            'monthly_price' => '$89.00',
            'timeline' => 'Live in 2 weeks',
            'cta_label' => 'Get started',
            'is_highlighted' => false,
            'features' => [
                'Everything in Booked',
                'Online booking system — customers book jobs directly from your site, no phone tag',
                'Google Calendar sync — your schedule stays up to date automatically',
                'Automated estimate and quote delivery — send a professional quote by text in seconds, from anywhere',
                'Appointment reminders — automated texts before every job cut no-shows dramatically',
                'Priority support — direct access, fast response, we treat your business like our own',
            ],
        ],
    ];
@endphp

<x-layouts.marketing :title="config('app.name')">
    {{-- ===================== HERO ===================== --}}
    <section id="home" class="scroll-mt-28 md:scroll-mt-32">
        <div class="relative min-h-[740px] overflow-hidden md:min-h-[860px]" data-reveal>
            <div
                class="absolute inset-0 bg-cover bg-[78%_center] bg-no-repeat md:bg-[right_center]"
                style="background-image: url('{{ asset('images/brand/hero.jpg') }}');"
            ></div>
            <div class="absolute inset-0 bg-[#07131d]/48 dark:bg-[#040a10]/56"></div>
            <div class="absolute inset-0 bg-linear-to-r from-[#07131df7] via-[#0b1f2eda] via-42% to-[#1d688321]"></div>
            <div class="absolute inset-0 bg-linear-to-t from-[#061019f2] via-[#06101980] to-[#1d688329] dark:from-[#03070df7] dark:via-[#0710197d] dark:to-[#1d68831c]"></div>
            <div class="absolute inset-y-0 left-0 w-full bg-linear-to-r from-[#07131df8] via-[#0a1c29dc] via-48% to-transparent md:w-[62%]"></div>
            <div class="absolute left-[-8%] top-[10%] h-[48%] w-[40%] rounded-full bg-[#1d688342] blur-3xl"></div>
            <div class="absolute bottom-[-14%] right-[-6%] h-[42%] w-[32%] rounded-full bg-[#1d688326] blur-3xl"></div>
            <div class="absolute inset-x-0 bottom-0 h-40 bg-linear-to-t from-[#07131d] to-transparent dark:from-[#040a10]"></div>

            <div class="agency-container relative flex min-h-[740px] items-center py-28 md:min-h-[860px] md:py-32">
                <div class="grid w-full gap-12 lg:grid-cols-[minmax(0,1.08fr)_minmax(0,0.92fr)] lg:items-center">
                    <div class="max-w-3xl space-y-9">
                        <div class="space-y-5">
                            <div class="text-xs font-semibold uppercase tracking-[0.3em] text-blue-100/78">
                                Web Development Agency · Central Florida
                            </div>
                            <div class="max-w-2xl space-y-6 border-l border-white/14 pl-5 sm:pl-7">
                                <div class="relative">
                                    <div class="absolute -inset-x-6 -inset-y-5 bg-[#08141ed6] blur-2xl md:-inset-x-10 md:-inset-y-8"></div>
                                    <div class="relative space-y-5">
                                        <h1 class="font-[family-name:var(--font-display)] text-5xl font-bold leading-[0.94] tracking-[-0.04em] text-white md:text-6xl lg:text-7xl">
                                            Built to Convert. Designed to Impress.
                                        </h1>
                                        <p class="max-w-xl text-base leading-8 text-blue-50/88 md:text-lg">
                                            More calls. More booked jobs. More Revenue. We handle the digital — you handle the work. 💪
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <a
                                href="#contact"
                                class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-4 text-sm font-semibold text-[#0a2230] shadow-[0_18px_40px_-22px_rgba(2,6,23,0.55)] transition hover:bg-blue-50"
                            >
                                Get Your Free Strategy Call
                                <svg class="ml-2 size-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8h10M9 4l4 4-4 4"/>
                                </svg>
                            </a>
                            <a
                                href="#services"
                                class="inline-flex items-center justify-center rounded-lg border border-white/22 bg-white/7 px-6 py-4 text-sm font-semibold text-white backdrop-blur-sm transition hover:bg-white/12"
                            >
                                See How It Works
                            </a>
                        </div>

                        <div class="grid max-w-2xl gap-px overflow-hidden rounded-lg border border-white/10 bg-white/8 shadow-[0_35px_100px_-65px_rgba(0,0,0,0.9)] backdrop-blur-sm sm:grid-cols-3">
                            <div class="bg-black/20 px-5 py-4 backdrop-blur-sm">
                                <div class="font-[family-name:var(--font-display)] text-2xl font-semibold text-white">50+</div>
                                <p class="mt-1 text-xs text-blue-100/70">🏢 Businesses live & converting</p>
                            </div>
                            <div class="bg-black/20 px-5 py-4 backdrop-blur-sm">
                                <div class="font-[family-name:var(--font-display)] text-2xl font-semibold text-white">15+</div>
                                <p class="mt-1 text-xs text-blue-100/70">💼 Years building for the trades</p>
                            </div>
                            <div class="bg-black/20 px-5 py-4 backdrop-blur-sm">
                                <div class="font-[family-name:var(--font-display)] text-2xl font-semibold text-white">5★</div>
                                <p class="mt-1 text-xs text-blue-100/70">⭐ Rated by every client</p>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== SERVICES ===================== --}}
    <section id="services" class="agency-section-compact scroll-mt-28 bg-slate-50/80 md:scroll-mt-32 dark:bg-[#071521]">
        <div class="agency-container">
            <x-ui.section-heading
                eyebrow="What's included"
                title="Everything your business needs to grow. Nothing you don't."
                description="Three systems working together so your phone rings, your reputation builds, and your schedule stays full."
                align="center"
            />

            <div class="mt-10 grid gap-6 md:grid-cols-3" data-reveal>

                {{-- Card 1 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">A website that makes your phone ring</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">Your customers are searching right now. If they land on a slow, outdated site — they call your competitor. We build fast, professional websites designed to turn visitors into booked jobs.</p>
                    <ul class="mt-5 grid gap-2.5 border-t border-slate-100 pt-5 dark:border-white/8">
                        @foreach (['Loads fast on any phone', 'Shows up on Google searches', 'Built to earn trust at first glance', 'One clear goal: get them to call you'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600 dark:text-slate-300">
                                <svg class="size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Card 2 — highlighted --}}
                <div class="agency-card relative overflow-hidden ring-2 ring-gold-400/50 dark:ring-gold-400/40">
                    <div class="absolute inset-x-0 top-0 h-0.5 bg-linear-to-r from-gold-400 via-gold-500 to-gold-400"></div>
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-gold-50 ring-1 ring-gold-200 dark:bg-gold-950/30 dark:ring-gold-700/30">
                        <svg class="size-6 text-gold-600 dark:text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">5-star reviews — without asking every customer yourself</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">Most happy customers never leave a review — because nobody asked. We set up automatic review requests sent by text after every job. More reviews means more trust, more calls, more revenue.</p>
                    <ul class="mt-5 grid gap-2.5 border-t border-slate-100 pt-5 dark:border-white/8">
                        @foreach (['Automatic texts after every completed job', 'More 5-star Google reviews, fast', 'Rank above competitors in your area', 'Your reputation works for you 24/7'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600 dark:text-slate-300">
                                <svg class="size-4 shrink-0 text-gold-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Card 3 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">Never lose a lead to a competitor again</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">When someone fills out your form, they expect a fast response. If you don't reply first, they move on. Our lead system sends an instant text or WhatsApp reply the moment a new lead comes in — so you always get there first.</p>
                    <ul class="mt-5 grid gap-2.5 border-t border-slate-100 pt-5 dark:border-white/8">
                        @foreach (['Instant SMS & WhatsApp replies to new leads', 'Appointment reminders that cut no-shows', 'Follow-up sequences that close more jobs', 'Works while you\'re on the job site'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600 dark:text-slate-300">
                                <svg class="size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================== PROCESS ===================== --}}
    <section id="process" class="agency-section scroll-mt-28 bg-white md:scroll-mt-32 dark:bg-[#050c14]">
        <div class="agency-container">
            <x-ui.section-heading
                eyebrow="How it works"
                title="Up and running in 3 simple steps."
                description="No lengthy contracts. No confusing tech talk. We handle everything — you focus on doing the work you're best at."
                align="center"
            />

            <div class="mt-12 grid gap-6 md:grid-cols-3" data-reveal>
                {{-- Step 1 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-6 flex items-center justify-between">
                        <span class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                            <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>
                        <span class="font-[family-name:var(--font-display)] text-5xl font-bold text-slate-100 dark:text-white/8">01</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">We talk about your business</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">
                        One free strategy call — no pressure, no pitch deck. Tell us your trade, your market, and your biggest growth challenge. We'll tell you exactly what it takes to fix it.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="agency-chip">Free strategy call</span>
                        <span class="agency-chip">No commitment</span>
                        <span class="agency-chip">Clear next steps</span>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-6 flex items-center justify-between">
                        <span class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                            <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                            </svg>
                        </span>
                        <span class="font-[family-name:var(--font-display)] text-5xl font-bold text-slate-100 dark:text-white/8">02</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">We build your growth platform</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">
                        We design and build your site, set up automated review requests, connect your lead capture system, and configure every tool your business needs — all in 2 to 3 weeks.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="agency-chip">Premium website</span>
                        <span class="agency-chip">Review automation</span>
                        <span class="agency-chip">Lead system</span>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-6 flex items-center justify-between">
                        <span class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                            <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>
                        <span class="font-[family-name:var(--font-display)] text-5xl font-bold text-slate-100 dark:text-white/8">03</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">Watch your phone ring</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">
                        More calls. More booked jobs. More 5-star reviews building your reputation on autopilot. We stay in your corner for support — you stay focused on the work.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="agency-chip">More calls</span>
                        <span class="agency-chip">5-star reviews</span>
                        <span class="agency-chip">More revenue</span>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center" data-reveal>
                <x-ui.button href="#contact">
                    Get Your Free Strategy Call
                    <svg class="size-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8h10M9 4l4 4-4 4"/>
                    </svg>
                </x-ui.button>
            </div>
        </div>
    </section>

    {{-- ===================== TESTIMONIALS ===================== --}}
    <section id="reviews" class="agency-section-compact scroll-mt-28 bg-slate-50/70 md:scroll-mt-32 dark:bg-[#081725]">
        <div class="agency-container">
            <x-ui.section-heading
                eyebrow="Client results"
                title="Local service businesses winning online."
                description="Real business owners in Central Florida — more calls, more jobs, more revenue."
                align="center"
            />

            <div class="mt-10 grid gap-5 md:grid-cols-2" data-reveal>

                {{-- Review 1 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>
                        @endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">
                        "Before Nextgen, we had zero online presence. Within 30 days of launching our new site, we were getting 8–10 calls a week from Google. My schedule is booked out three weeks in advance for the first time ever."
                    </p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">MR</div>
                        <div>
                            <p class="text-sm font-semibold text-slate-950 dark:text-white">Miguel Reyes</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Owner, Reyes HVAC Services · Orlando, FL</p>
                        </div>
                    </div>
                </div>

                {{-- Review 2 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>
                        @endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">
                        "The review automation alone paid for everything. We went from 12 Google reviews to 74 in two months — completely on autopilot. Customers tell us they chose us specifically because of our reviews."
                    </p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">DT</div>
                        <div>
                            <p class="text-sm font-semibold text-slate-950 dark:text-white">Dana Torres</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Owner, SparkClean Residential · Kissimmee, FL</p>
                        </div>
                    </div>
                </div>

                {{-- Review 3 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>
                        @endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">
                        "I was skeptical — I'd paid for websites before and got nothing. Antonio is different. He understood my business, set everything up fast, and the leads started coming in before I even finished reviewing the site."
                    </p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">JW</div>
                        <div>
                            <p class="text-sm font-semibold text-slate-950 dark:text-white">James Whitfield</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Owner, Whitfield Roofing Co. · Sanford, FL</p>
                        </div>
                    </div>
                </div>

                {{-- Review 4 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>
                        @endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">
                        "Tenía miedo de invertir en algo que no funcionara. Pero el sitio se ve profesional, los clientes lo mencionan constantemente, y las llamadas aumentaron desde la primera semana. Vale cada centavo."
                    </p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">CM</div>
                        <div>
                            <p class="text-sm font-semibold text-slate-950 dark:text-white">Carlos Mendoza</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Owner, Mendoza Pressure Washing · Lake Mary, FL</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Trust bar --}}
            <div class="mt-8 flex items-center justify-center gap-2 text-sm text-slate-500 dark:text-slate-400" data-reveal>
                <div class="flex items-center gap-1 text-gold-500">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="size-3.5" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>
                    @endfor
                </div>
                <span>Rated <strong class="font-semibold text-slate-900 dark:text-white">5.0</strong> by every client we've worked with</span>
            </div>
        </div>
    </section>

    {{-- ===================== PRICING ===================== --}}
    <section id="pricing" class="agency-section scroll-mt-28 bg-white md:scroll-mt-32 dark:bg-[#050c14]">
        <div class="agency-container">
            <div class="mx-auto mb-12 max-w-2xl text-center">
                <span class="agency-eyebrow-gold mb-4">Simple, transparent pricing</span>
                <h2 class="agency-heading mt-4 text-3xl md:text-4xl">No surprises. Just results.</h2>
                <p class="agency-copy mt-4">One setup fee. One low monthly. No contracts — cancel anytime. Pick the plan that fits where you are right now.</p>
            </div>

            <div
                x-data="{
                    current: 0,
                    total: {{ count($pricingPlans) }},
                    prev() {
                        if (this.current > 0) {
                            this.current--;
                            this.scrollTo(this.current);
                        }
                    },
                    next() {
                        if (this.current < this.total - 1) {
                            this.current++;
                            this.scrollTo(this.current);
                        }
                    },
                    scrollTo(index) {
                        const track = this.$refs.track;
                        const card = track.children[index];
                        track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' });
                    }
                }"
                class="relative sm:px-12 lg:px-14"
            >
                {{-- Left arrow --}}
                <button
                    @click="prev()"
                    :disabled="current === 0"
                    class="absolute left-0 top-1/2 z-10 -translate-y-1/2 hidden sm:inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white shadow-md transition hover:border-brand-400 hover:text-brand-600 disabled:opacity-30 disabled:cursor-not-allowed dark:border-white/10 dark:bg-slate-900 dark:hover:border-brand-400 dark:hover:text-brand-300"
                    aria-label="Previous plan"
                >
                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                {{-- Right arrow --}}
                <button
                    @click="next()"
                    :disabled="current === total - 1"
                    class="absolute right-0 top-1/2 z-10 -translate-y-1/2 hidden sm:inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white shadow-md transition hover:border-brand-400 hover:text-brand-600 disabled:opacity-30 disabled:cursor-not-allowed dark:border-white/10 dark:bg-slate-900 dark:hover:border-brand-400 dark:hover:text-brand-300"
                    aria-label="Next plan"
                >
                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                {{-- Scrollable track (vertical stack on mobile, horizontal slider on sm+) --}}
                <div
                    x-ref="track"
                    class="flex flex-col gap-5 sm:no-scrollbar sm:flex-row sm:overflow-x-auto sm:scroll-smooth sm:px-1 sm:pb-2"
                >
                    @foreach ($pricingPlans as $pricingPlan)
                        <div class="w-full shrink-0 sm:w-96 lg:w-[360px]">
                            <x-marketing.pricing-card :pricingPlan="$pricingPlan" />
                        </div>
                    @endforeach
                </div>

                {{-- Dot indicators (slider only on sm+) --}}
                <div class="mt-6 hidden sm:flex items-center justify-center gap-2">
                    @foreach ($pricingPlans as $index => $pricingPlan)
                        <button
                            @click="current = {{ $index }}; scrollTo({{ $index }})"
                            :class="current === {{ $index }} ? 'w-6 bg-brand-600 dark:bg-brand-400' : 'w-2 bg-slate-300 dark:bg-slate-600'"
                            class="h-2 rounded-full transition-all duration-300"
                            aria-label="Go to {{ $pricingPlan['name'] }}"
                        ></button>
                    @endforeach
                </div>
            </div>

            <p class="agency-muted mt-8 text-center">Not sure which plan is right? Start with Found. You can upgrade anytime — we'll apply what you've paid toward the next plan.</p>
        </div>
    </section>

    {{-- ===================== ABOUT ===================== --}}
    <section id="about" class="relative scroll-mt-28 overflow-hidden md:scroll-mt-32">
        <div
            class="absolute inset-0 scale-[1.03] bg-cover bg-[18%_center] bg-no-repeat saturate-[0.88] contrast-[1.02] brightness-[0.72] md:bg-[14%_center]"
            style="background-image: url('{{ asset('images/brand/worker.jpg') }}');"
            aria-hidden="true"
        ></div>
        <div class="absolute inset-0 bg-linear-to-r from-[#274c5e]/20 via-[#12384a]/44 via-36% to-[#06111af2]"></div>
        <div class="absolute inset-0 bg-linear-to-t from-[#050d15f4] via-[#09131c80] to-[#1d688324] dark:from-[#03070df7] dark:via-[#07101978] dark:to-[#1d688318]"></div>
        <div class="absolute inset-y-0 right-0 w-full bg-linear-to-l from-[#050d15f5] via-[#08141dd8] via-34% to-transparent md:w-[56%]"></div>
        <div class="absolute left-[-10%] top-[4%] h-[54%] w-[34%] rounded-full bg-[#9fd9ff12] blur-3xl"></div>
        <div class="absolute bottom-[-8%] right-[4%] h-[36%] w-[28%] rounded-full bg-[#1d688326] blur-3xl"></div>

        <div class="agency-container relative py-20 md:py-28">
            <div class="ml-auto max-w-xl pt-4 md:pt-8" data-reveal>
                <span class="agency-eyebrow border-brand-400/30 bg-brand-400/10 text-brand-200 dark:border-brand-400/30 dark:bg-brand-400/10 dark:text-brand-200">More leads. More jobs. More revenue.</span>
                <h2 class="mt-6 font-display text-3xl font-semibold tracking-tight text-white md:text-4xl lg:text-5xl">A website that brings in customers — while you focus on the work.</h2>
                <p class="mt-6 text-base leading-7 text-slate-300 md:text-lg">
                    Running a business keeps you busy. Between jobs, calls, and estimates, your online presence often takes a back seat — and that means potential customers finding someone else first.
                </p>
                <p class="mt-4 text-base leading-7 text-slate-300 md:text-lg">
                    We make it easy. We build professional websites with the tools you need to attract more leads, follow up automatically, and keep your schedule full — without any extra work on your end.
                </p>
                <div class="mt-8 grid grid-cols-3 gap-4 border-t border-white/15 pt-6">
                    <div class="text-center">
                        <p class="font-display text-2xl font-bold text-white">More</p>
                        <p class="mt-1 text-xs font-medium text-slate-400">Leads</p>
                    </div>
                    <div class="text-center">
                        <p class="font-display text-2xl font-bold text-gold-400">More</p>
                        <p class="mt-1 text-xs font-medium text-slate-400">Customers</p>
                    </div>
                    <div class="text-center">
                        <p class="font-display text-2xl font-bold text-white">More</p>
                        <p class="mt-1 text-xs font-medium text-slate-400">Revenue</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== CTA BANNER ===================== --}}
    <section class="py-8 md:py-12">
        <div class="w-full bg-[#1d6883d9] px-5 py-20 text-white sm:px-6 lg:px-8">
            <div class="relative mx-auto flex max-w-5xl flex-col items-center gap-6 text-center">
                <div class="absolute -left-16 top-8 size-40 rounded-full bg-white/10 blur-2xl"></div>
                <div class="absolute -right-20 -top-10 size-56 rounded-full bg-white/10 blur-2xl"></div>

                <p class="text-xs font-semibold uppercase tracking-[0.28em] text-blue-100/70">Ready when you are</p>
                <h2 class="font-display text-4xl font-bold tracking-tight md:text-6xl">
                    More customers are searching for your services online — let's make sure they find you.
                </h2>
                <p class="max-w-3xl text-lg leading-8 text-blue-100">
                    We'll have your new website live quickly, so you can start attracting more leads, booking more jobs, and growing your business with a lot less effort.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                    <a href="#contact" class="inline-flex items-center justify-center rounded-xl bg-white px-8 py-4 text-sm font-semibold text-[#0a2230] shadow-[0_18px_40px_-22px_rgba(2,6,23,0.55)] transition hover:bg-blue-50">
                        Get Your Free Strategy Call
                    </a>
                    <a href="#pricing" class="inline-flex items-center justify-center border border-white/40 rounded-xl px-8 py-4 text-sm font-semibold text-white transition hover:bg-white/10">
                        View Pricing
                    </a>
                </div>
                <p class="text-sm text-blue-100/70">
                    Fast timelines. Premium execution. More calls. More jobs. More revenue.
                </p>
            </div>
        </div>
    </section>

    {{-- ===================== CONTACT ===================== --}}
    <section id="contact" class="agency-section-compact scroll-mt-28 bg-slate-50/70 md:scroll-mt-32 dark:bg-[#081725]">
        <div class="agency-container">
            <div class="agency-grid items-start lg:grid-cols-[0.85fr_1.15fr]">
                <div class="space-y-6" data-reveal>
                    <span class="agency-eyebrow">Get started</span>
                    <h2 class="agency-subheading md:text-4xl">Tell us about your business. We'll show you how to grow it.</h2>
                    <p class="agency-copy">No pitch. No pressure. Just a real conversation about what it takes to fill your schedule and grow your revenue.</p>
                    <div class="agency-card">
                        <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">We work best with</p>
                        <ul class="mt-4 grid gap-3 text-sm text-slate-600 dark:text-slate-300">
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span>Local service businesses ready to grow their call volume</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span>Owners tired of relying on word-of-mouth alone</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span>Businesses that want their reputation working for them 24/7</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span>Spanish-speaking owners in the Central Florida area</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <livewire:contact-form />
            </div>
        </div>
    </section>
</x-layouts.marketing>