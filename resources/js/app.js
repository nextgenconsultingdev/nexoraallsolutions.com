import Swal from 'sweetalert2'

window.Swal = Swal

/**
 * Displays a toast notification using SweetAlert2.
 *
 * @param {string} message - The text to display in the toast.
 * @param {'success'|'error'|'warning'|'info'|'question'} [icon='success'] - The icon type.
 * @returns {void}
 */
window.toast = (message, icon = 'success') => {
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon,
        title: message,
        showConfirmButton: false,
        timer: 3000
    });
}

// Wire up Livewire's "notify" event to the global toast helper.
document.addEventListener('livewire:init', () => {
    Livewire.on('notify', ({ message, type }) => {
        window.toast(message, type)
    });
});

const langStorageKey = 'nexora-lang';

/**
 * Determines the active language by checking localStorage first,
 * then falling back to the browser's navigator.language.
 *
 * @returns {'en'|'es'} The resolved language code.
 */
function resolveLang() {
    const stored = window.localStorage.getItem(langStorageKey);

    // Return the stored preference if it's a supported language.
    if (stored === 'en' || stored === 'es') return stored;

    // Fall back to the browser locale, defaulting to English.
    return navigator.language?.toLowerCase().startsWith('es') ? 'es' : 'en';
}

/**
 * Applies a language to the document and updates all toggle buttons.
 * Persists the choice to localStorage so it survives page reloads.
 *
 * @param {'en'|'es'} lang - The language code to apply.
 * @returns {void}
 */
function applyLang(lang) {
    // Store on <html> so CSS/Blade templates can read it via data-lang.
    document.documentElement.dataset.lang = lang;
    window.localStorage.setItem(langStorageKey, lang);

    // Show the label that matches the active language; hide the other.
    document.querySelectorAll('[data-lang-toggle]').forEach((button) => {
        button.querySelector('[data-lang-label="en"]')?.classList.toggle('hidden', lang !== 'en');
        button.querySelector('[data-lang-label="es"]')?.classList.toggle('hidden', lang !== 'es');
    });
}

/**
 * Initializes the language toggle by applying the resolved language and
 * attaching click listeners to every `[data-lang-toggle]` button.
 *
 * @returns {void}
 */
function bootLangToggle() {
    applyLang(resolveLang());

    document.querySelectorAll('[data-lang-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            // Flip between the two supported languages on each click.
            applyLang(document.documentElement.dataset.lang === 'en' ? 'es' : 'en');
        });
    });
}

const themeStorageKey = 'nexora-theme';

/**
 * Determines the active theme by checking localStorage first,
 * then falling back to the OS-level color scheme preference.
 *
 * @returns {'light'|'dark'} The resolved theme name.
 */
function resolveTheme() {
    const storedTheme = window.localStorage.getItem(themeStorageKey);

    // Return the stored preference if it's a supported theme.
    if (storedTheme === 'light' || storedTheme === 'dark') {
        return storedTheme;
    }

    // Fall back to the system color scheme preference.
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

/**
 * Applies a theme to the document and updates all toggle button icons.
 * Adds/removes the `dark` class on <html> for Tailwind's dark mode variant.
 * Persists the choice to localStorage so it survives page reloads.
 *
 * @param {'light'|'dark'} theme - The theme to apply.
 * @returns {void}
 */
function applyTheme(theme) {
    // Tailwind uses the `dark` class on <html> for dark-mode utilities.
    document.documentElement.classList.toggle('dark', theme === 'dark');
    document.documentElement.dataset.theme = theme;
    window.localStorage.setItem(themeStorageKey, theme);

    // Swap the visible icon: show moon in light mode, sun in dark mode.
    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        const moonIcon = button.querySelector('[data-theme-icon="moon"]');
        const sunIcon = button.querySelector('[data-theme-icon="sun"]');

        moonIcon?.classList.toggle('hidden', theme !== 'light');
        sunIcon?.classList.toggle('hidden', theme !== 'dark');
    });
}

/**
 * Initialises the theme toggle by applying the resolved theme and
 * attaching click listeners to every `[data-theme-toggle]` button.
 *
 * @returns {void}
 */
function bootThemeToggle() {
    applyTheme(resolveTheme());

    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            // Flip between light and dark on each click.
            applyTheme(document.documentElement.classList.contains('dark') ? 'light' : 'dark');
        });
    });
}

/**
 * Sets up IntersectionObserver-based reveal animations for every element
 * marked with `[data-reveal]`. When an element enters the viewport it gains
 * the `is-visible` class, triggering its CSS transition.
 *
 * Falls back to making all elements immediately visible when
 * IntersectionObserver is not supported by the browser.
 *
 * @returns {void}
 */
function bootRevealAnimations() {
    const revealItems = document.querySelectorAll('[data-reveal]');

    // Skip setup entirely if there are no reveal elements or the API is absent.
    if (revealItems.length === 0 || !('IntersectionObserver' in window)) {
        revealItems.forEach((item) => item.classList.add('is-visible'));

        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Unobserve after the first reveal so the animation runs only once.
                observer.unobserve(entry.target);
            }
        });
    }, {
        // Trigger when at least 15% of the element is visible.
        threshold: 0.15,
    });

    revealItems.forEach((item) => {
        // Add `reveal` to apply the initial hidden/transition CSS state.
        item.classList.add('reveal');
        observer.observe(item);
    });
}

/**
 * Initialises the back-to-top button identified by `[data-back-to-top]`.
 * The button becomes visible after the user scrolls past 500 px and
 * smoothly scrolls the page back to the top when clicked.
 *
 * @returns {void}
 */
function bootBackToTop() {
    const button = document.querySelector('[data-back-to-top]');

    // Nothing to set up if the button doesn't exist on this page.
    if (!button) {
        return;
    }

    /** Adds or removes `is-visible` based on the current scroll position. */
    const toggleVisibility = () => {
        button.classList.toggle('is-visible', window.scrollY > 500);
    };

    button.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });

    // Set initial visibility in case the page loads mid-scroll (e.g. browser restore).
    toggleVisibility();
    window.addEventListener('scroll', toggleVisibility, { passive: true });
}

// Bootstrap all UI modules once the DOM is fully parsed.
document.addEventListener('DOMContentLoaded', () => {
    bootLangToggle();
    bootThemeToggle();
    bootRevealAnimations();
    bootBackToTop();
});
