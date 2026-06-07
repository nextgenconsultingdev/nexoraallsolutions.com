@props([
    'title' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="agency-shell">
        <x-marketing.site-header />

        @if (session('success') || session('checkout_success') || session('checkout_error'))
            <div class="agency-container pt-28">
                @if (session('success') || session('checkout_success'))
                    <div class="agency-panel mb-4 border-brand-300/40 bg-brand-50/80 px-5 py-4 text-sm text-brand-900 dark:border-brand-400/20 dark:bg-brand-500/10 dark:text-brand-100">
                        {{ session('success') ?? session('checkout_success') }}
                    </div>
                @endif

                @if (session('checkout_error'))
                    <div class="agency-panel mb-4 border-amber-300/40 bg-amber-50/80 px-5 py-4 text-sm text-amber-900 dark:border-amber-400/20 dark:bg-amber-500/10 dark:text-amber-100">
                        {{ session('checkout_error') }}
                    </div>
                @endif
            </div>
        @endif

        <main>
            {{ $slot }}
        </main>

        <button type="button" class="back-to-top" data-back-to-top aria-label="Back to top">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19V5m0 0-6 6m6-6 6 6" />
            </svg>
        </button>

        <x-marketing.site-footer />
        @fluxScripts
    </body>
</html>
