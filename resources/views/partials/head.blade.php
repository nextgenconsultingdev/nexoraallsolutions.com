<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

{{-- hreflang tags for bilingual SEO --}}
<link rel="alternate" hreflang="en" href="{{ route('home') }}" />
<link rel="alternate" hreflang="es" href="{{ route('es.home') }}" />
<link rel="alternate" hreflang="x-default" href="{{ route('home') }}" />

<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="preconnect" href="https://api.fontshare.com" crossorigin>
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

<script>
    (() => {
        const storageKey = 'nexora-theme';
        const storedTheme = window.localStorage.getItem(storageKey);
        const resolvedTheme = storedTheme === 'light' || storedTheme === 'dark'
            ? storedTheme
            : (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

        document.documentElement.classList.toggle('dark', resolvedTheme === 'dark');
        document.documentElement.dataset.theme = resolvedTheme;
    })();
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
