<x-layouts.marketing :title="config('app.name')">

    {{-- ===================== HERO ===================== --}}
    <section id="home" class="scroll-mt-28 md:scroll-mt-32">
        <div class="relative min-h-[740px] overflow-hidden md:min-h-[860px]" data-reveal>
            <div class="absolute inset-0 bg-cover bg-[78%_center] bg-no-repeat md:bg-[right_center]" style="background-image: url('{{ asset('images/brand/hero.jpg') }}');"></div>
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
                                <span data-lang="en">Digital Solutions Agency · Central Florida</span>
                                <span data-lang="es">Agencia de Soluciones Digitales · Florida Central</span>
                            </div>
                            <div class="max-w-2xl space-y-6 border-l border-white/14 pl-5 sm:pl-7">
                                <div class="relative">
                                    <div class="absolute -inset-x-6 -inset-y-5 bg-[#08141ed6] blur-2xl md:-inset-x-10 md:-inset-y-8"></div>
                                    <div class="relative space-y-5">
                                        <h1 class="font-[family-name:var(--font-display)] text-5xl font-bold leading-[0.94] tracking-[-0.04em] text-white md:text-6xl lg:text-7xl">
                                            <span data-lang="en">Ready to Take Your Business to the Next Level?</span>
                                            <span data-lang="es">¿Listo para llevar tu negocio al siguiente nivel?</span>
                                        </h1>
                                        <p class="max-w-xl text-base leading-8 text-blue-50/88 md:text-lg">
                                            <span data-lang="en">At NeXora, we design intelligent solutions tailored to your business to help you grow, automate, and achieve real results.</span>
                                            <span data-lang="es">En NeXora diseñamos soluciones inteligentes a la medida de tu negocio para ayudarte a crecer, automatizar y alcanzar resultados reales.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <a href="#contact" class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-4 text-sm font-semibold text-[#0a2230] shadow-[0_18px_40px_-22px_rgba(2,6,23,0.55)] transition hover:bg-blue-50">
                                <span data-lang="en">Let's Talk Today</span>
                                <span data-lang="es">Hablemos Hoy</span>
                                <svg class="ml-2 size-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8h10M9 4l4 4-4 4"/></svg>
                            </a>
                            <a href="#services" class="inline-flex items-center justify-center rounded-lg border border-white/22 bg-white/7 px-6 py-4 text-sm font-semibold text-white backdrop-blur-sm transition hover:bg-white/12">
                                <span data-lang="en">See Our Services</span>
                                <span data-lang="es">Ver Nuestros Servicios</span>
                            </a>
                        </div>

                        <div class="grid max-w-2xl gap-px overflow-hidden rounded-lg border border-white/10 bg-white/8 shadow-[0_35px_100px_-65px_rgba(0,0,0,0.9)] backdrop-blur-sm sm:grid-cols-3">
                            <div class="bg-black/20 px-5 py-4 backdrop-blur-sm">
                                <div class="font-[family-name:var(--font-display)] text-2xl font-semibold text-white">50+</div>
                                <p class="mt-1 text-xs text-blue-100/70">
                                    <span data-lang="en">🚀 Projects delivered</span>
                                    <span data-lang="es">🚀 Proyectos entregados</span>
                                </p>
                            </div>
                            <div class="bg-black/20 px-5 py-4 backdrop-blur-sm">
                                <div class="font-[family-name:var(--font-display)] text-2xl font-semibold text-white">15+</div>
                                <p class="mt-1 text-xs text-blue-100/70">
                                    <span data-lang="en">💼 Years of experience</span>
                                    <span data-lang="es">💼 Años de experiencia</span>
                                </p>
                            </div>
                            <div class="bg-black/20 px-5 py-4 backdrop-blur-sm">
                                <div class="font-[family-name:var(--font-display)] text-2xl font-semibold text-white">5★</div>
                                <p class="mt-1 text-xs text-blue-100/70">
                                    <span data-lang="en">⭐ Rated by every client</span>
                                    <span data-lang="es">⭐ Calificado por cada cliente</span>
                                </p>
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
            <x-ui.section-heading align="center">
                <x-slot:eyebrow>
                    <span data-lang="en">What We Build</span>
                    <span data-lang="es">Lo Que Construimos</span>
                </x-slot:eyebrow>
                <x-slot:title>
                    <span data-lang="en">Projects That Drive Your Business Forward.</span>
                    <span data-lang="es">Proyectos que impulsan tu negocio.</span>
                </x-slot:title>
                <x-slot:description>
                    <span data-lang="en">We develop custom digital solutions to optimize processes, improve your clients' experience, and accelerate your company's growth.</span>
                    <span data-lang="es">Desarrollamos soluciones digitales a la medida para optimizar procesos, mejorar la experiencia de tus clientes y acelerar el crecimiento de tu empresa.</span>
                </x-slot:description>
            </x-ui.section-heading>

            <div class="mt-10 grid gap-6 md:grid-cols-2" data-reveal>

                {{-- CRM --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">CRM</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">We implement and customize CRM solutions to manage your clients, sales, and processes in one place — improving relationships and results.</span>
                        <span data-lang="es">Implementamos y personalizamos CRM para gestionar tus clientes, ventas y procesos en un solo lugar, mejorando relaciones y resultados.</span>
                    </p>
                    <ul class="mt-5 grid gap-2.5 border-t border-slate-100 pt-5 dark:border-white/8">
                        @foreach ([
                            ['en' => 'Centralized client management',  'es' => 'Gestión centralizada de clientes'],
                            ['en' => 'Sales pipeline tracking',        'es' => 'Seguimiento del flujo de ventas'],
                            ['en' => 'Automated follow-ups',           'es' => 'Seguimiento automático'],
                            ['en' => 'Real-time reporting',            'es' => 'Reportes en tiempo real'],
                        ] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600 dark:text-slate-300">
                                <svg class="size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span data-lang="en">{{ $item['en'] }}</span>
                                <span data-lang="es">{{ $item['es'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Web Pages --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">Web Pages</span>
                        <span data-lang="es">Páginas Web</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">We create modern, fast, SEO-optimized websites that represent your brand, attract new clients, and build lasting trust.</span>
                        <span data-lang="es">Creamos páginas web modernas, rápidas y optimizadas para SEO que representan tu marca, atraen clientes y generan confianza.</span>
                    </p>
                    <ul class="mt-5 grid gap-2.5 border-t border-slate-100 pt-5 dark:border-white/8">
                        @foreach ([
                            ['en' => 'Fast, mobile-first design',          'es' => 'Diseño móvil primero y rápido'],
                            ['en' => 'SEO-optimized from day one',          'es' => 'Optimizado para SEO desde el primer día'],
                            ['en' => 'Converts visitors into clients',      'es' => 'Convierte visitantes en clientes'],
                            ['en' => 'Reflects your brand identity',        'es' => 'Refleja tu identidad de marca'],
                        ] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600 dark:text-slate-300">
                                <svg class="size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span data-lang="en">{{ $item['en'] }}</span>
                                <span data-lang="es">{{ $item['es'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Apps — highlighted --}}
                <div class="agency-card relative overflow-hidden ring-2 ring-gold-400/50 dark:ring-gold-400/40">
                    <div class="absolute inset-x-0 top-0 h-0.5 bg-linear-to-r from-gold-400 via-gold-500 to-gold-400"></div>
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-gold-50 ring-1 ring-gold-200 dark:bg-gold-950/30 dark:ring-gold-700/30">
                        <svg class="size-6 text-gold-600 dark:text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 8.25h3m-3 3h3m-3 3h3"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">Apps</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">We design and develop mobile applications that deliver incredible experiences, increase engagement, and scale your business.</span>
                        <span data-lang="es">Diseñamos y desarrollamos aplicaciones móviles que ofrecen experiencias increíbles, aumentan el engagement y escalan tu negocio.</span>
                    </p>
                    <ul class="mt-5 grid gap-2.5 border-t border-slate-100 pt-5 dark:border-white/8">
                        @foreach ([
                            ['en' => 'Custom iOS & Android apps',      'es' => 'Apps personalizadas iOS y Android'],
                            ['en' => 'Intuitive user experience',      'es' => 'Experiencia de usuario intuitiva'],
                            ['en' => 'Scales with your business',      'es' => 'Crece con tu negocio'],
                            ['en' => 'Real-time data sync',            'es' => 'Sincronización de datos en tiempo real'],
                        ] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600 dark:text-slate-300">
                                <svg class="size-4 shrink-0 text-gold-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span data-lang="en">{{ $item['en'] }}</span>
                                <span data-lang="es">{{ $item['es'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Automations --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">Automations</span>
                        <span data-lang="es">Automatizaciones</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">We automate repetitive tasks and integrate your tools and technology to save time, reduce errors, and increase productivity.</span>
                        <span data-lang="es">Automatizamos tareas repetitivas e integramos tus herramientas y tecnología para ahorrar tiempo, reducir errores y aumentar la productividad.</span>
                    </p>
                    <ul class="mt-5 grid gap-2.5 border-t border-slate-100 pt-5 dark:border-white/8">
                        @foreach ([
                            ['en' => 'Workflow automation',            'es' => 'Automatización de flujos de trabajo'],
                            ['en' => 'Tool & platform integrations',   'es' => 'Integración de herramientas y plataformas'],
                            ['en' => 'Reduce manual work',             'es' => 'Reduce el trabajo manual'],
                            ['en' => 'Improve team efficiency',        'es' => 'Mejora la eficiencia del equipo'],
                        ] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600 dark:text-slate-300">
                                <svg class="size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span data-lang="en">{{ $item['en'] }}</span>
                                <span data-lang="es">{{ $item['es'] }}</span>
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
            <x-ui.section-heading align="center">
                <x-slot:eyebrow>
                    <span data-lang="en">How it works</span>
                    <span data-lang="es">Cómo funciona</span>
                </x-slot:eyebrow>
                <x-slot:title>
                    <span data-lang="en">Up and running in 3 simple steps.</span>
                    <span data-lang="es">En marcha en 3 pasos simples.</span>
                </x-slot:title>
                <x-slot:description>
                    <span data-lang="en">No lengthy contracts. No confusing tech talk. We handle everything — you focus on running your business.</span>
                    <span data-lang="es">Sin contratos largos. Sin tecnicismos. Nos encargamos de todo — tú enfócate en hacer crecer tu negocio.</span>
                </x-slot:description>
            </x-ui.section-heading>

            <div class="mt-12 grid gap-6 md:grid-cols-3" data-reveal>
                {{-- Step 1 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-6 flex items-center justify-between">
                        <span class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                            <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                        </span>
                        <span class="font-[family-name:var(--font-display)] text-5xl font-bold text-slate-100 dark:text-white/8">01</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">We learn about your business</span>
                        <span data-lang="es">Conocemos tu negocio</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">
                        <span data-lang="en">One free strategy call — no pressure, no pitch deck. Tell us your goals, your challenges, and what's holding you back. We'll map out exactly what it takes to move forward.</span>
                        <span data-lang="es">Una llamada estratégica gratuita — sin presión, sin presentaciones. Cuéntanos tus metas, tus desafíos y qué te está frenando. Trazaremos exactamente qué hacer para avanzar.</span>
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="agency-chip"><span data-lang="en">Free strategy call</span><span data-lang="es">Llamada gratis</span></span>
                        <span class="agency-chip"><span data-lang="en">No commitment</span><span data-lang="es">Sin compromiso</span></span>
                        <span class="agency-chip"><span data-lang="en">Clear next steps</span><span data-lang="es">Próximos pasos claros</span></span>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-6 flex items-center justify-between">
                        <span class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                            <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
                        </span>
                        <span class="font-[family-name:var(--font-display)] text-5xl font-bold text-slate-100 dark:text-white/8">02</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">We build your solution</span>
                        <span data-lang="es">Construimos tu solución</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">
                        <span data-lang="en">We design and build your custom solution — whether that's a website, CRM, mobile app, automation system, or AI tools — combining strategy, design, and technology to get results.</span>
                        <span data-lang="es">Diseñamos y construimos tu solución personalizada — ya sea un sitio web, CRM, app móvil, sistema de automatización o herramientas de IA — combinando estrategia, diseño y tecnología para obtener resultados.</span>
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="agency-chip"><span data-lang="en">Custom-built</span><span data-lang="es">A la medida</span></span>
                        <span class="agency-chip"><span data-lang="en">Strategy-first</span><span data-lang="es">Estrategia primero</span></span>
                        <span class="agency-chip"><span data-lang="en">Fast delivery</span><span data-lang="es">Entrega rápida</span></span>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-6 flex items-center justify-between">
                        <span class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                            <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg>
                        </span>
                        <span class="font-[family-name:var(--font-display)] text-5xl font-bold text-slate-100 dark:text-white/8">03</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-xl font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">Watch your business grow</span>
                        <span data-lang="es">Mira crecer tu negocio</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">
                        <span data-lang="en">More leads. More efficiency. More revenue. Your new digital infrastructure works for you around the clock — and we stay in your corner for ongoing support and growth.</span>
                        <span data-lang="es">Más leads. Más eficiencia. Más ingresos. Tu nueva infraestructura digital trabaja para ti las 24 horas — y estamos en tu esquina para soporte continuo y crecimiento.</span>
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="agency-chip"><span data-lang="en">Ongoing support</span><span data-lang="es">Soporte continuo</span></span>
                        <span class="agency-chip"><span data-lang="en">Measurable results</span><span data-lang="es">Resultados medibles</span></span>
                        <span class="agency-chip"><span data-lang="en">Real growth</span><span data-lang="es">Crecimiento real</span></span>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center" data-reveal>
                <x-ui.button href="#contact">
                    <span data-lang="en">Let's Talk Today</span>
                    <span data-lang="es">Hablemos Hoy</span>
                    <svg class="size-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8h10M9 4l4 4-4 4"/></svg>
                </x-ui.button>
            </div>
        </div>
    </section>

    {{-- ===================== AI SOLUTIONS ===================== --}}
    <section id="ai" class="agency-section-compact scroll-mt-28 bg-slate-50/80 md:scroll-mt-32 dark:bg-[#071521]">
        <div class="agency-container">
            <x-ui.section-heading align="center">
                <x-slot:eyebrow>
                    <span data-lang="en">Powered by AI</span>
                    <span data-lang="es">Impulsado por IA</span>
                </x-slot:eyebrow>
                <x-slot:title>
                    <span data-lang="en">Smart Technology That Works For You.</span>
                    <span data-lang="es">Tecnología inteligente que trabaja para ti.</span>
                </x-slot:title>
                <x-slot:description>
                    <span data-lang="en">We design and implement intelligent solutions that automate, optimize, and scale your business.</span>
                    <span data-lang="es">Diseñamos e implementamos soluciones inteligentes que automatizan, optimizan y escalan tu negocio.</span>
                </x-slot:description>
            </x-ui.section-heading>

            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-4" data-reveal>

                {{-- AI Agents --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-lg font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">AI Agents</span>
                        <span data-lang="es">Agentes de IA</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">Intelligent agents that understand, decide, and act for your business — automating tasks, making decisions, and improving continuously.</span>
                        <span data-lang="es">Agentes inteligentes que entienden, deciden y actúan por tu negocio — automatizando tareas, tomando decisiones y mejorando continuamente.</span>
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2 border-t border-slate-100 pt-4 dark:border-white/8">
                        <span class="agency-chip"><span data-lang="en">Fully automated</span><span data-lang="es">Totalmente automatizado</span></span>
                        <span class="agency-chip"><span data-lang="en">Always learning</span><span data-lang="es">Siempre aprendiendo</span></span>
                    </div>
                </div>

                {{-- Chatbots --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-lg font-semibold text-slate-950 dark:text-white">Chatbots</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">Smart conversations that connect with your customers 24/7 — solving doubts, qualifying leads, and improving their experience.</span>
                        <span data-lang="es">Conversaciones inteligentes que conectan con tus clientes 24/7 — resolviendo dudas, calificando leads y mejorando su experiencia.</span>
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2 border-t border-slate-100 pt-4 dark:border-white/8">
                        <span class="agency-chip"><span data-lang="en">24/7 availability</span><span data-lang="es">Disponible 24/7</span></span>
                        <span class="agency-chip"><span data-lang="en">Multi-platform</span><span data-lang="es">Multi-plataforma</span></span>
                    </div>
                </div>

                {{-- Virtual Assistants --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-lg font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">Virtual Assistants</span>
                        <span data-lang="es">Asistentes Virtuales</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">AI-powered assistants that support your team and customers — managing tasks and providing fast, accurate information.</span>
                        <span data-lang="es">Asistentes con IA que apoyan a tu equipo y clientes — gestionando tareas y brindando información rápida y precisa.</span>
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2 border-t border-slate-100 pt-4 dark:border-white/8">
                        <span class="agency-chip"><span data-lang="en">Instant responses</span><span data-lang="es">Respuestas instantáneas</span></span>
                        <span class="agency-chip"><span data-lang="en">Task management</span><span data-lang="es">Gestión de tareas</span></span>
                    </div>
                </div>

                {{-- Smart Automations --}}
                <div class="agency-card relative overflow-hidden">
                    <div class="mb-5 flex size-12 items-center justify-center rounded-2xl bg-brand-50 ring-1 ring-brand-100 dark:bg-brand-950/40 dark:ring-brand-800/40">
                        <svg class="size-6 text-brand-600 dark:text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] text-lg font-semibold text-slate-950 dark:text-white">
                        <span data-lang="en">Smart Automations</span>
                        <span data-lang="es">Automatizaciones Inteligentes</span>
                    </h3>
                    <p class="mt-3 text-sm leading-6 text-slate-500 dark:text-slate-400">
                        <span data-lang="en">We automate repetitive processes with AI so you can save time, reduce errors, and focus on what really matters.</span>
                        <span data-lang="es">Automatizamos procesos repetitivos con IA para que ahorres tiempo, reduzcas errores y te enfoques en lo que realmente importa.</span>
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2 border-t border-slate-100 pt-4 dark:border-white/8">
                        <span class="agency-chip"><span data-lang="en">Save time</span><span data-lang="es">Ahorra tiempo</span></span>
                        <span class="agency-chip"><span data-lang="en">Fewer errors</span><span data-lang="es">Menos errores</span></span>
                    </div>
                </div>

            </div>

            <div class="mt-10 text-center" data-reveal>
                <p class="text-xs font-semibold uppercase tracking-[0.28em] text-slate-400 dark:text-slate-500">
                    <span data-lang="en">Innovate · Automate · Grow · The future is intelligent</span>
                    <span data-lang="es">Innovar · Automatizar · Crecer · El futuro es inteligente</span>
                </p>
            </div>
        </div>
    </section>

    {{-- ===================== TESTIMONIALS ===================== --}}
    <section id="reviews" class="agency-section-compact scroll-mt-28 bg-white md:scroll-mt-32 dark:bg-[#050c14]">
        <div class="agency-container">
            <x-ui.section-heading align="center">
                <x-slot:eyebrow>
                    <span data-lang="en">Client results</span>
                    <span data-lang="es">Resultados de clientes</span>
                </x-slot:eyebrow>
                <x-slot:title>
                    <span data-lang="en">Businesses winning with NeXora.</span>
                    <span data-lang="es">Negocios ganando con NeXora.</span>
                </x-slot:title>
                <x-slot:description>
                    <span data-lang="en">Real business owners — more leads, more efficiency, more revenue.</span>
                    <span data-lang="es">Dueños de negocios reales — más leads, más eficiencia, más ingresos.</span>
                </x-slot:description>
            </x-ui.section-heading>

            <div class="mt-10 grid gap-5 md:grid-cols-2" data-reveal>

                {{-- Review 1 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)<svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>@endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">"Before NeXora, we had zero online presence. Within 30 days of launching our new site, we were getting 8–10 qualified leads a week. My schedule is booked out three weeks in advance for the first time ever."</p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">MR</div>
                        <div><p class="text-sm font-semibold text-slate-950 dark:text-white">Miguel Reyes</p><p class="text-xs text-slate-500 dark:text-slate-400">Owner, Reyes Services · Orlando, FL</p></div>
                    </div>
                </div>

                {{-- Review 2 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)<svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>@endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">"The automation system alone paid for everything. We went from manually following up with every lead to having the whole process run itself. Our conversion rate jumped 40% in the first two months."</p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">DT</div>
                        <div><p class="text-sm font-semibold text-slate-950 dark:text-white">Dana Torres</p><p class="text-xs text-slate-500 dark:text-slate-400">Owner, SparkClean Residential · Kissimmee, FL</p></div>
                    </div>
                </div>

                {{-- Review 3 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)<svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>@endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">"I was skeptical — I'd paid for digital work before and got nothing. NeXora is different. They understood my business, built something that actually works, and the results started showing before the project was even done."</p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">JW</div>
                        <div><p class="text-sm font-semibold text-slate-950 dark:text-white">James Whitfield</p><p class="text-xs text-slate-500 dark:text-slate-400">CEO, Whitfield Group · Sanford, FL</p></div>
                    </div>
                </div>

                {{-- Review 4 --}}
                <div class="agency-card space-y-5">
                    <div class="flex items-center gap-1 text-gold-500">
                        @for ($i = 0; $i < 5; $i++)<svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>@endfor
                        <span class="ml-1 text-xs font-medium text-slate-500 dark:text-slate-400">5.0</span>
                    </div>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">"Tenía miedo de invertir en algo que no funcionara. Pero el sitio se ve profesional, el CRM nos ahorra horas cada semana, y los clientes lo mencionan constantemente. Vale cada centavo."</p>
                    <div class="flex items-center gap-3 border-t border-slate-100 pt-4 dark:border-white/8">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-100 font-[family-name:var(--font-display)] text-sm font-semibold text-brand-700 dark:bg-brand-900/60 dark:text-brand-300">CM</div>
                        <div><p class="text-sm font-semibold text-slate-950 dark:text-white">Carlos Mendoza</p><p class="text-xs text-slate-500 dark:text-slate-400">Owner, Mendoza Solutions · Lake Mary, FL</p></div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex items-center justify-center gap-2 text-sm text-slate-500 dark:text-slate-400" data-reveal>
                <div class="flex items-center gap-1 text-gold-500">@for ($i = 0; $i < 5; $i++)<svg class="size-3.5" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1l1.796 3.64L14 5.355l-3 2.923.708 4.126L8 10.25 4.292 12.404 5 8.278 2 5.355l4.204-.715L8 1z"/></svg>@endfor</div>
                <span>
                    <span data-lang="en">Rated <strong class="font-semibold text-slate-900 dark:text-white">5.0</strong> by every client we've worked with</span>
                    <span data-lang="es">Calificado con <strong class="font-semibold text-slate-900 dark:text-white">5.0</strong> por cada cliente con el que hemos trabajado</span>
                </span>
            </div>
        </div>
    </section>

    {{-- ===================== PRICING ===================== --}}
    <section id="pricing" class="agency-section scroll-mt-28 bg-slate-50/70 md:scroll-mt-32 dark:bg-[#081725]">
        <div class="agency-container">
            <div class="mx-auto mb-12 max-w-2xl text-center">
                <span class="agency-eyebrow-gold mb-4">
                    <span data-lang="en">Simple, transparent pricing</span>
                    <span data-lang="es">Precios simples y transparentes</span>
                </span>
                <h2 class="agency-heading mt-4 text-3xl md:text-4xl">
                    <span data-lang="en">No surprises. Just results.</span>
                    <span data-lang="es">Sin sorpresas. Solo resultados.</span>
                </h2>
                <p class="agency-copy mt-4">
                    <span data-lang="en">One setup fee. One low monthly. No contracts — cancel anytime. Pick the plan that fits where you are right now.</span>
                    <span data-lang="es">Un cargo de configuración. Una mensualidad baja. Sin contratos — cancela cuando quieras. Elige el plan que se ajusta a donde estás ahora.</span>
                </p>
            </div>

            <div
                x-data="{
                    current: 0,
                    total: {{ count($pricingPlans) }},
                    prev() { if (this.current > 0) { this.current--; this.scrollTo(this.current); } },
                    next() { if (this.current < this.total - 1) { this.current++; this.scrollTo(this.current); } },
                    scrollTo(index) { const track = this.$refs.track; const card = track.children[index]; track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' }); }
                }"
                class="relative sm:px-12 lg:px-14"
            >
                <button @click="prev()" :disabled="current === 0" class="absolute left-0 top-1/2 z-10 -translate-y-1/2 hidden sm:inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white shadow-md transition hover:border-brand-400 hover:text-brand-600 disabled:opacity-30 disabled:cursor-not-allowed dark:border-white/10 dark:bg-slate-900 dark:hover:border-brand-400 dark:hover:text-brand-300" aria-label="Previous plan">
                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button @click="next()" :disabled="current === total - 1" class="absolute right-0 top-1/2 z-10 -translate-y-1/2 hidden sm:inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white shadow-md transition hover:border-brand-400 hover:text-brand-600 disabled:opacity-30 disabled:cursor-not-allowed dark:border-white/10 dark:bg-slate-900 dark:hover:border-brand-400 dark:hover:text-brand-300" aria-label="Next plan">
                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>

                <div x-ref="track" class="flex flex-col gap-5 sm:no-scrollbar sm:flex-row sm:overflow-x-auto sm:scroll-smooth sm:px-1 sm:pb-2">
                    @foreach ($pricingPlans as $pricingPlan)
                        <div class="w-full shrink-0 sm:w-96 lg:w-[360px]">
                            <x-marketing.pricing-card :pricingPlan="$pricingPlan" />
                        </div>
                    @endforeach
                </div>

                <div class="mt-6 hidden sm:flex items-center justify-center gap-2">
                    @foreach ($pricingPlans as $index => $pricingPlan)
                        <button @click="current = {{ $index }}; scrollTo({{ $index }})" :class="current === {{ $index }} ? 'w-6 bg-brand-600 dark:bg-brand-400' : 'w-2 bg-slate-300 dark:bg-slate-600'" class="h-2 rounded-full transition-all duration-300" aria-label="Go to {{ $pricingPlan['name'] }}"></button>
                    @endforeach
                </div>
            </div>

            <p class="agency-muted mt-8 text-center">
                <span data-lang="en">Not sure which plan is right? Let's talk — we'll point you in the right direction at no cost.</span>
                <span data-lang="es">¿No sabes cuál plan elegir? Hablemos — te orientamos en la dirección correcta sin costo alguno.</span>
            </p>
        </div>
    </section>

    {{-- ===================== ABOUT ===================== --}}
    <section id="about" class="relative scroll-mt-28 overflow-hidden md:scroll-mt-32">
        <div class="absolute inset-0 scale-[1.03] bg-cover bg-[18%_center] bg-no-repeat saturate-[0.88] contrast-[1.02] brightness-[0.72] md:bg-[14%_center]" style="background-image: url('{{ asset('images/brand/worker.jpg') }}');" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-linear-to-r from-[#274c5e]/20 via-[#12384a]/44 via-36% to-[#06111af2]"></div>
        <div class="absolute inset-0 bg-linear-to-t from-[#050d15f4] via-[#09131c80] to-[#1d688324] dark:from-[#03070df7] dark:via-[#07101978] dark:to-[#1d688318]"></div>
        <div class="absolute inset-y-0 right-0 w-full bg-linear-to-l from-[#050d15f5] via-[#08141dd8] via-34% to-transparent md:w-[56%]"></div>
        <div class="absolute left-[-10%] top-[4%] h-[54%] w-[34%] rounded-full bg-[#9fd9ff12] blur-3xl"></div>
        <div class="absolute bottom-[-8%] right-[4%] h-[36%] w-[28%] rounded-full bg-[#1d688326] blur-3xl"></div>

        <div class="agency-container relative py-20 md:py-28">
            <div class="ml-auto max-w-xl pt-4 md:pt-8" data-reveal>
                <span class="agency-eyebrow border-brand-400/30 bg-brand-400/10 text-brand-200 dark:border-brand-400/30 dark:bg-brand-400/10 dark:text-brand-200">
                    <span data-lang="en">Intelligent Solutions</span>
                    <span data-lang="es">Soluciones Inteligentes</span>
                </span>
                <h2 class="mt-6 font-display text-3xl font-semibold tracking-tight text-white md:text-4xl lg:text-5xl">
                    <span data-lang="en">Technology that drives your business forward — while you focus on what you do best.</span>
                    <span data-lang="es">Tecnología que impulsa tu negocio — mientras tú te enfocas en lo que mejor sabes hacer.</span>
                </h2>
                <p class="mt-6 text-base leading-7 text-slate-300 md:text-lg">
                    <span data-lang="en">Running a business means juggling growth, operations, and customer experience. Without the right digital foundation, opportunities slip through the cracks.</span>
                    <span data-lang="es">Dirigir un negocio significa equilibrar el crecimiento, las operaciones y la experiencia del cliente. Sin la base digital correcta, las oportunidades se escapan.</span>
                </p>
                <p class="mt-4 text-base leading-7 text-slate-300 md:text-lg">
                    <span data-lang="en">We make it simple. We build custom digital solutions — from powerful websites to CRM systems, mobile apps, and AI automation — that work together to grow your business with less effort.</span>
                    <span data-lang="es">Lo hacemos sencillo. Construimos soluciones digitales personalizadas — desde sitios web potentes hasta sistemas CRM, apps móviles y automatización con IA — que trabajan juntas para hacer crecer tu negocio con menos esfuerzo.</span>
                </p>

                <div class="mt-8 grid grid-cols-2 gap-4 border-t border-white/15 pt-6">
                    @foreach ([
                        ['icon' => 'M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z', 'en_title' => 'Artificial Intelligence', 'es_title' => 'Inteligencia Artificial', 'en_sub' => 'Tools that think and act for you', 'es_sub' => 'Herramientas que piensan y actúan por ti'],
                        ['icon' => 'M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941', 'en_title' => 'Strategy & Results', 'es_title' => 'Estrategia y Resultados', 'en_sub' => 'Data-driven decisions that win', 'es_sub' => 'Decisiones basadas en datos que ganan'],
                        ['icon' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z', 'en_title' => 'Automation & Efficiency', 'es_title' => 'Automatización y Eficiencia', 'en_sub' => 'Less manual work, more output', 'es_sub' => 'Menos trabajo manual, más productividad'],
                        ['icon' => 'M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z', 'en_title' => 'Personalized Support', 'es_title' => 'Acompañamiento Personalizado', 'en_sub' => 'With you at every step', 'es_sub' => 'Contigo en cada paso'],
                    ] as $pillar)
                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 flex size-8 shrink-0 items-center justify-center rounded-lg bg-brand-400/15">
                                <svg class="size-4 text-brand-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $pillar['icon'] }}"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-white">
                                    <span data-lang="en">{{ $pillar['en_title'] }}</span>
                                    <span data-lang="es">{{ $pillar['es_title'] }}</span>
                                </p>
                                <p class="mt-0.5 text-xs text-slate-400">
                                    <span data-lang="en">{{ $pillar['en_sub'] }}</span>
                                    <span data-lang="es">{{ $pillar['es_sub'] }}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
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

                <p class="text-xs font-semibold uppercase tracking-[0.28em] text-blue-100/70">
                    <span data-lang="en">Ready when you are</span>
                    <span data-lang="es">Listos cuando tú lo estés</span>
                </p>
                <h2 class="font-display text-4xl font-bold tracking-tight md:text-6xl">
                    <span data-lang="en">Let's build the future of your business together.</span>
                    <span data-lang="es">Construyamos juntos el futuro de tu negocio.</span>
                </h2>
                <p class="max-w-3xl text-lg leading-8 text-blue-100">
                    <span data-lang="en">Contact us and discover how NeXora can design an intelligent solution tailored specifically for your business — from strategy to launch.</span>
                    <span data-lang="es">Contáctanos y descubre cómo NeXora puede diseñar una solución inteligente adaptada específicamente para tu negocio — desde la estrategia hasta el lanzamiento.</span>
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                    <a href="#contact" class="inline-flex items-center justify-center rounded-xl bg-white px-8 py-4 text-sm font-semibold text-[#0a2230] shadow-[0_18px_40px_-22px_rgba(2,6,23,0.55)] transition hover:bg-blue-50">
                        <span data-lang="en">Let's Talk Today</span>
                        <span data-lang="es">Hablemos Hoy</span>
                    </a>
                    <a href="#pricing" class="inline-flex items-center justify-center border border-white/40 rounded-xl px-8 py-4 text-sm font-semibold text-white transition hover:bg-white/10">
                        <span data-lang="en">View Pricing</span>
                        <span data-lang="es">Ver Precios</span>
                    </a>
                </div>
                <p class="text-sm text-blue-100/70">
                    <span data-lang="en">Big ideas. Intelligent solutions. Real results.</span>
                    <span data-lang="es">Grandes ideas. Soluciones inteligentes. Resultados reales.</span>
                </p>
            </div>
        </div>
    </section>

    {{-- ===================== CONTACT ===================== --}}
    <section id="contact" class="agency-section-compact scroll-mt-28 bg-slate-50/70 md:scroll-mt-32 dark:bg-[#081725]">
        <div class="agency-container">
            <div class="agency-grid items-start lg:grid-cols-[0.85fr_1.15fr]">
                <div class="space-y-6" data-reveal>
                    <span class="agency-eyebrow">
                        <span data-lang="en">Let's Talk</span>
                        <span data-lang="es">Hablemos</span>
                    </span>
                    <h2 class="agency-subheading md:text-4xl">
                        <span data-lang="en">Tell us about your business and let's build something great together.</span>
                        <span data-lang="es">Cuéntanos sobre tu negocio y construyamos algo grande juntos.</span>
                    </h2>
                    <p class="agency-copy">
                        <span data-lang="en">No pressure. No pitch deck. Just a real conversation about how we can help you grow, automate, and achieve real results.</span>
                        <span data-lang="es">Sin presión. Sin presentaciones. Solo una conversación real sobre cómo podemos ayudarte a crecer, automatizar y alcanzar resultados reales.</span>
                    </p>
                    <div class="agency-card">
                        <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">
                            <span data-lang="en">We work best with</span>
                            <span data-lang="es">Trabajamos mejor con</span>
                        </p>
                        <ul class="mt-4 grid gap-3 text-sm text-slate-600 dark:text-slate-300">
                            @foreach ([
                                ['en' => 'Businesses ready to modernize their operations and grow faster', 'es' => 'Negocios listos para modernizar sus operaciones y crecer más rápido'],
                                ['en' => 'Owners looking to automate, save time, and reduce manual work',  'es' => 'Dueños que buscan automatizar, ahorrar tiempo y reducir el trabajo manual'],
                                ['en' => 'Companies that want a real digital presence that attracts and converts', 'es' => 'Empresas que quieren una presencia digital real que atraiga y convierta'],
                                ['en' => 'Teams that need custom apps or AI tools to scale their business', 'es' => 'Equipos que necesitan apps personalizadas o herramientas de IA para escalar'],
                            ] as $item)
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 size-4 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/><path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span>
                                        <span data-lang="en">{{ $item['en'] }}</span>
                                        <span data-lang="es">{{ $item['es'] }}</span>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="flex flex-col gap-3 text-sm text-slate-600 dark:text-slate-300">
                        <a href="tel:+1" class="flex items-center gap-2 transition hover:text-brand-600 dark:hover:text-brand-300">
                            <svg class="size-4 text-brand-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                            <span data-lang="en">Schedule a Call — Let's talk about your project</span>
                            <span data-lang="es">Agenda una Llamada — Hablemos de tu proyecto</span>
                        </a>
                        <a href="mailto:hola@nexora.com" class="flex items-center gap-2 transition hover:text-brand-600 dark:hover:text-brand-300">
                            <svg class="size-4 text-brand-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            hola@nexora.com
                        </a>
                    </div>
                </div>

                <livewire:contact-form />
            </div>
        </div>
    </section>
</x-layouts.marketing>