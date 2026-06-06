<button
    type="button"
    data-theme-toggle
    {{ $attributes->class(['inline-flex items-center border-b-2 border-transparent px-1 py-2 text-slate-500 transition hover:text-slate-950 dark:text-slate-400 dark:hover:text-white']) }}
    aria-label="Toggle theme"
>
    <svg data-theme-icon="moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z" />
    </svg>
    <svg data-theme-icon="sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="hidden size-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25M12 18.75V21M4.97 4.97l1.59 1.59M17.44 17.44l1.59 1.59M3 12h2.25M18.75 12H21M4.97 19.03l1.59-1.59M17.44 6.56l1.59-1.59M15.75 12A3.75 3.75 0 1 1 8.25 12a3.75 3.75 0 0 1 7.5 0Z" />
    </svg>
</button>
