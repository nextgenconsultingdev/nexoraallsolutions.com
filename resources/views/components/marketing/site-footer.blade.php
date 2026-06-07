@php
    $socialLinks = [
        ['label' => 'LinkedIn', 'platform' => 'LinkedIn', 'url' => 'https://www.linkedin.com'],
        ['label' => 'GitHub', 'platform' => 'GitHub', 'url' => 'https://github.com'],
        ['label' => 'X / Twitter', 'platform' => 'X', 'url' => 'https://x.com'],
    ];
@endphp

<footer class="mt-20 border-t border-slate-200/80 bg-slate-950 text-white dark:border-white/10">
    <div class="w-full px-5 py-14 sm:px-6 lg:px-8 lg:py-16">
        <div class="mx-auto grid w-full max-w-7xl gap-10 lg:grid-cols-[1.2fr_0.8fr_0.8fr_0.8fr]">
            <div class="space-y-5">
                <img src="/images/brand/NeXora_Logo_dark.png" alt="{{ config('app.name') }}" class="h-[45px] w-auto">
                <h2 class="font-[family-name:var(--font-display)] text-xl font-semibold text-white">More calls. More jobs. More revenue. On autopilot.</h2>
                <p class="text-sm leading-6 text-slate-400">
                    We build done-for-you growth platforms for local service businesses in Central Florida — websites, automated reviews, and lead systems that keep your schedule full.
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
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">Navigate</h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <a href="{{ route('home') }}#services" class="transition hover:text-brand-300">Services</a>
                    <a href="{{ route('home') }}#process" class="transition hover:text-brand-300">Process</a>
                    <a href="{{ route('home') }}#pricing" class="transition hover:text-brand-300">Pricing</a>
                    <a href="{{ route('home') }}#about" class="transition hover:text-brand-300">About</a>
                    <a href="{{ route('home') }}#contact" class="transition hover:text-brand-300">Contact</a>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">Contact</h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <span>hello@nextgenconsulting.dev</span>
                    <span>Local service business specialists</span>
                    <span>Central Florida · EST timezone</span>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-[family-name:var(--font-display)] text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">Built for</h3>
                <div class="grid gap-2 text-sm text-slate-300">
                    <span>Plumbers & HVAC</span>
                    <span>Roofers & Contractors</span>
                    <span>Cleaners & Pressure Washers</span>
                    <span>Landscapers & Handymen</span>
                </div>
            </div>
        </div>

        <div class="mx-auto mt-12 flex w-full max-w-7xl flex-col gap-3 border-t border-white/10 pt-6 text-sm text-slate-500 md:flex-row md:items-center md:justify-between">
            <span>&copy; {{ now()->year }} Nextgen Consulting. All rights reserved.</span>
            <span>We handle the digital. You handle the work.</span>
        </div>
    </div>
</footer>
