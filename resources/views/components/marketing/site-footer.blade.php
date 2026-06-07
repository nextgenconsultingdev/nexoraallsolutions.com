<footer class="mt-20 border-t border-slate-200/80 bg-slate-950 text-white dark:border-white/10">
    <div class="w-full px-5 py-14 sm:px-6 lg:px-8 lg:py-16">
        <div class="mx-auto grid w-full max-w-7xl gap-10 lg:grid-cols-[1.2fr_0.8fr_0.8fr_0.8fr]">
            <div class="space-y-5">
                <img src="/images/brand/NeXora_Logo_dark.png" alt="{{ config('app.name') }}" class="h-[45px] w-auto">
                <h2 class="font-[family-name:var(--font-display)] text-xl font-semibold text-white">
                    <span data-lang="en">Big ideas. Intelligent solutions. Real results.</span>
                    <span data-lang="es">Grandes ideas. Soluciones inteligentes. Resultados reales.</span>
                </h2>
                <p class="text-sm leading-6 text-slate-400">
                    <span data-lang="en">We build custom digital solutions for businesses in Central Florida — websites, CRM systems, mobile apps, automations, and AI tools that drive real growth.</span>
                    <span data-lang="es">Construimos soluciones digitales personalizadas para negocios en Florida Central — sitios web, CRM, apps móviles, automatizaciones y herramientas de IA que generan crecimiento real.</span>
                </p>
                <div class="flex items-center gap-4 text-slate-400">
                    @foreach ($socialLinks as $socialLink)
                        <a
                            href="{{ $socialLink['url'] }}"
                            target="_blank"
                            rel="noreferrer"
                            class="transition hover:text-brand-300"
                            aria-label="{{ $socialLink['label'] }}"
                        >
                            <x-marketing.social-icon :platform="$socialLink['platform']" class="size-5" />
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                    <span data-lang="en">Navigate</span>
                    <span data-lang="es">Navegar</span>
                </h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <a href="{{ route('home') }}#services" class="transition hover:text-brand-300">
                        <span data-lang="en">Services</span>
                        <span data-lang="es">Servicios</span>
                    </a>
                    <a href="{{ route('home') }}#process" class="transition hover:text-brand-300">
                        <span data-lang="en">Process</span>
                        <span data-lang="es">Proceso</span>
                    </a>
                    <a href="{{ route('home') }}#pricing" class="transition hover:text-brand-300">
                        <span data-lang="en">Pricing</span>
                        <span data-lang="es">Precios</span>
                    </a>
                    <a href="{{ route('home') }}#about" class="transition hover:text-brand-300">
                        <span data-lang="en">About</span>
                        <span data-lang="es">Nosotros</span>
                    </a>
                    <a href="{{ route('home') }}#contact" class="transition hover:text-brand-300">
                        <span data-lang="en">Contact</span>
                        <span data-lang="es">Contacto</span>
                    </a>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                    <span data-lang="en">Contact</span>
                    <span data-lang="es">Contacto</span>
                </h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <a href="mailto:hola@nexora.com" class="transition hover:text-brand-300">hola@nexora.com</a>
                    <span>
                        <span data-lang="en">Digital solutions specialists</span>
                        <span data-lang="es">Especialistas en soluciones digitales</span>
                    </span>
                    <span>
                        <span data-lang="en">Central Florida · EST timezone</span>
                        <span data-lang="es">Florida Central · Zona horaria EST</span>
                    </span>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                    <span data-lang="en">What We Do</span>
                    <span data-lang="es">Lo Que Hacemos</span>
                </h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <span>
                        <span data-lang="en">CRM & Automation</span>
                        <span data-lang="es">CRM y Automatización</span>
                    </span>
                    <span>
                        <span data-lang="en">Web Pages & Landing Pages</span>
                        <span data-lang="es">Páginas Web y Landing Pages</span>
                    </span>
                    <span>
                        <span data-lang="en">Mobile Apps</span>
                        <span data-lang="es">Apps Móviles</span>
                    </span>
                    <span>
                        <span data-lang="en">AI Solutions</span>
                        <span data-lang="es">Soluciones de IA</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="mx-auto mt-12 flex w-full max-w-7xl flex-col gap-3 border-t border-white/10 pt-6 text-sm text-slate-500 md:flex-row md:items-center md:justify-between">
            <span>
                <span data-lang="en">&copy; {{ now()->year }} NeXora. All rights reserved.</span>
                <span data-lang="es">&copy; {{ now()->year }} NeXora. Todos los derechos reservados.</span>
            </span>
            <span>
                <span data-lang="en">We innovate. We optimize. We transform.</span>
                <span data-lang="es">Innovamos. Optimizamos. Transformamos.</span>
            </span>
        </div>
    </div>
</footer>