@php
    $links = [
        ['en' => 'Services',  'es' => 'Servicios', 'anchor' => 'services'],
        ['en' => 'AI',        'es' => 'IA',         'anchor' => 'ai'],
        ['en' => 'Pricing',   'es' => 'Precios',    'anchor' => 'pricing'],
        ['en' => 'About',     'es' => 'Nosotros',   'anchor' => 'about'],
        ['en' => 'Contact',   'es' => 'Contacto',   'anchor' => 'contact'],
    ];

    $socialLinks = [
        ['label' => 'LinkedIn', 'platform' => 'LinkedIn', 'url' => 'https://www.linkedin.com'],
        ['label' => 'GitHub', 'platform' => 'GitHub', 'url' => 'https://github.com'],
        ['label' => 'X / Twitter', 'platform' => 'X', 'url' => 'https://x.com'],
    ];
@endphp

<header
    x-data="{ open: false }"
    class="sticky inset-x-0 top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur dark:border-white/10 dark:bg-[#050c14]/90"
>
    <div class="w-full px-5 md:px-8 lg:px-10">
        <div class="flex items-center justify-between gap-4 py-1.5 md:py-2">

            {{-- Logo --}}
            <a href="{{ route('home') }}#home">
                <img src="/images/brand/NeXora_Logo.png" alt="{{ config('app.name') }}" class="h-[58px] w-auto dark:hidden">
                <img src="/images/brand/NeXora_Logo_dark.png" alt="{{ config('app.name') }}" class="hidden h-[58px] w-auto dark:block">
            </a>

            {{-- Desktop nav --}}
            <nav class="hidden items-center gap-6 lg:flex">
                @foreach ($links as $link)
                    <a
                        href="{{ route('home') }}#{{ $link['anchor'] }}"
                        class="text-sm font-medium text-slate-600 transition hover:text-slate-950 dark:text-slate-300 dark:hover:text-white"
                    >
                        <span data-lang="en">{{ $link['en'] }}</span>
                        <span data-lang="es">{{ $link['es'] }}</span>
                    </a>
                @endforeach
            </nav>

            {{-- Right actions --}}
            <div class="flex items-center gap-3">
                <div class="hidden items-center gap-3 md:flex">
                    @foreach ($socialLinks as $socialLink)
                        <a
                            href="{{ $socialLink['url'] }}"
                            target="_blank"
                            rel="noreferrer"
                            class="text-slate-500 transition hover:text-brand-600 dark:text-slate-400 dark:hover:text-brand-300"
                            aria-label="{{ $socialLink['label'] }}"
                        >
                            <x-marketing.social-icon :platform="$socialLink['platform']" class="size-4" />
                        </a>
                    @endforeach
                </div>

                <div class="hidden h-4 w-px bg-slate-200 sm:block dark:bg-white/15"></div>

                <x-marketing.lang-toggle class="hidden sm:inline-flex" />
                <x-marketing.theme-toggle class="hidden sm:inline-flex" />

                <x-ui.button href="{{ route('home') }}#contact" class="hidden md:inline-flex">
                    <span data-lang="en">Let's Talk</span>
                    <span data-lang="es">Hablemos</span>
                </x-ui.button>

                {{-- Hamburger button (mobile only) --}}
                <button
                    type="button"
                    @click="open = !open"
                    class="inline-flex items-center justify-center rounded-lg p-2 text-slate-600 transition hover:bg-slate-100 hover:text-slate-950 lg:hidden dark:text-slate-300 dark:hover:bg-white/10 dark:hover:text-white"
                    :aria-expanded="open"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!open" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile drawer --}}
    <div
        x-show="open"
        x-transition:enter="transition duration-200 ease-out"
        x-transition:enter-start="-translate-y-2 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition duration-150 ease-in"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-2 opacity-0"
        class="border-t border-slate-200/80 bg-white/95 backdrop-blur lg:hidden dark:border-white/10 dark:bg-[#050c14]/95"
        @click.away="open = false"
    >
        <nav class="flex flex-col px-5 py-4">
            @foreach ($links as $link)
                <a
                    href="{{ route('home') }}#{{ $link['anchor'] }}"
                    @click="open = false"
                    class="border-b border-slate-100 py-3.5 text-base font-medium text-slate-700 transition hover:text-brand-600 dark:border-white/5 dark:text-slate-200 dark:hover:text-brand-300"
                >
                    <span data-lang="en">{{ $link['en'] }}</span>
                    <span data-lang="es">{{ $link['es'] }}</span>
                </a>
            @endforeach

            <div class="mt-4 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    @foreach ($socialLinks as $socialLink)
                        <a
                            href="{{ $socialLink['url'] }}"
                            target="_blank"
                            rel="noreferrer"
                            class="text-slate-500 transition hover:text-brand-600 dark:text-slate-400 dark:hover:text-brand-300"
                            aria-label="{{ $socialLink['label'] }}"
                        >
                            <x-marketing.social-icon :platform="$socialLink['platform']" class="size-5" />
                        </a>
                    @endforeach
                </div>
                <x-marketing.lang-toggle />
                <x-marketing.theme-toggle />
            </div>

            <x-ui.button href="{{ route('home') }}#contact" @click="open = false" class="mt-4 justify-center">
                <span data-lang="en">Let's Talk</span>
                <span data-lang="es">Hablemos</span>
            </x-ui.button>
        </nav>
    </div>
</header>
