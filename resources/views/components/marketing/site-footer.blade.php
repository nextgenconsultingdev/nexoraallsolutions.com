<footer class="mt-20 border-t border-slate-200/80 bg-slate-950 text-white dark:border-white/10">
    <div class="w-full px-5 py-14 sm:px-6 lg:px-8 lg:py-16">
        <div class="mx-auto grid w-full max-w-7xl gap-10 lg:grid-cols-[1.2fr_0.8fr_0.8fr_0.8fr]">
            <div class="space-y-5">
                <img src="/images/brand/NeXora_Logo_dark.png" alt="{{ config('app.name') }}" class="h-[45px] w-auto">
                <h2 class="font-[family-name:var(--font-display)] text-xl font-semibold text-white">
                    {{ __('footer.tagline') }}
                </h2>
                <p class="text-sm leading-6 text-slate-400">
                    {{ __('footer.description') }}
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
                    {{ __('footer.nav_title') }}
                </h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <a href="{{ locale_route('home') }}#services" class="transition hover:text-brand-300">{{ __('nav.services') }}</a>
                    <a href="{{ locale_route('home') }}#process" class="transition hover:text-brand-300">{{ __('process.eyebrow') }}</a>
                    <a href="{{ locale_route('home') }}#pricing" class="transition hover:text-brand-300">{{ __('nav.pricing') }}</a>
                    <a href="{{ locale_route('home') }}#about" class="transition hover:text-brand-300">{{ __('nav.about') }}</a>
                    <a href="{{ locale_route('home') }}#contact" class="transition hover:text-brand-300">{{ __('nav.contact') }}</a>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                    {{ __('footer.contact_title') }}
                </h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <a href="mailto:hola@nexora.com" class="transition hover:text-brand-300">hola@nexora.com</a>
                    <span>{{ __('footer.contact_subtitle') }}</span>
                    <span>{{ __('footer.contact_location') }}</span>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                    {{ __('footer.services_title') }}
                </h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <span>{{ __('footer.services_crm') }}</span>
                    <span>{{ __('footer.services_web') }}</span>
                    <span>{{ __('footer.services_apps') }}</span>
                    <span>{{ __('footer.services_ai') }}</span>
                </div>
            </div>
        </div>

        <div class="mx-auto mt-12 flex w-full max-w-7xl flex-col gap-3 border-t border-white/10 pt-6 text-sm text-slate-500 md:flex-row md:items-center md:justify-between">
            <span>{{ __('footer.copyright', ['year' => now()->year]) }}</span>
            <span>{{ __('footer.closing') }}</span>
        </div>
    </div>
</footer>
