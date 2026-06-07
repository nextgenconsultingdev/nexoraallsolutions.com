@if(app()->getLocale() === 'es')
    <a
        href="{{ route('home') }}"
        {{ $attributes->class(['inline-flex items-center gap-1.5 text-xs font-semibold tracking-widest text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white']) }}
        aria-label="Switch to English"
    >
        <svg class="size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <circle cx="12" cy="12" r="9.5" />
            <path stroke-linecap="round" d="M12 2.5C12 2.5 8.5 7 8.5 12s3.5 9.5 3.5 9.5M12 2.5C12 2.5 15.5 7 15.5 12s-3.5 9.5-3.5 9.5M2.5 12h19" />
        </svg>
        <span>EN</span>
    </a>
@else
    <a
        href="{{ route('es.home') }}"
        {{ $attributes->class(['inline-flex items-center gap-1.5 text-xs font-semibold tracking-widest text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white']) }}
        aria-label="Cambiar a Español"
    >
        <svg class="size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <circle cx="12" cy="12" r="9.5" />
            <path stroke-linecap="round" d="M12 2.5C12 2.5 8.5 7 8.5 12s3.5 9.5 3.5 9.5M12 2.5C12 2.5 15.5 7 15.5 12s-3.5 9.5-3.5 9.5M2.5 12h19" />
        </svg>
        <span>ESP</span>
    </a>
@endif
