import Swal from 'sweetalert2'

window.Swal = Swal

// Global toast helper
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

// Livewire listener
document.addEventListener('livewire:init', () => {
    Livewire.on('notify', ({ message, type }) => {
        window.toast(message, type)
    });
});

const themeStorageKey = 'nexora-theme';

function resolveTheme() {
    const storedTheme = window.localStorage.getItem(themeStorageKey);

    if (storedTheme === 'light' || storedTheme === 'dark') {
        return storedTheme;
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

function applyTheme(theme) {
    document.documentElement.classList.toggle('dark', theme === 'dark');
    document.documentElement.dataset.theme = theme;
    window.localStorage.setItem(themeStorageKey, theme);

    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        const moonIcon = button.querySelector('[data-theme-icon="moon"]');
        const sunIcon = button.querySelector('[data-theme-icon="sun"]');

        moonIcon?.classList.toggle('hidden', theme !== 'light');
        sunIcon?.classList.toggle('hidden', theme !== 'dark');
    });
}

function bootThemeToggle() {
    applyTheme(resolveTheme());

    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            applyTheme(document.documentElement.classList.contains('dark') ? 'light' : 'dark');
        });
    });
}

function bootRevealAnimations() {
    const revealItems = document.querySelectorAll('[data-reveal]');

    if (revealItems.length === 0 || !('IntersectionObserver' in window)) {
        revealItems.forEach((item) => item.classList.add('is-visible'));

        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
    });

    revealItems.forEach((item) => {
        item.classList.add('reveal');
        observer.observe(item);
    });
}

function bootBackToTop() {
    const button = document.querySelector('[data-back-to-top]');

    if (!button) {
        return;
    }

    const toggleVisibility = () => {
        button.classList.toggle('is-visible', window.scrollY > 500);
    };

    button.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });

    toggleVisibility();
    window.addEventListener('scroll', toggleVisibility, { passive: true });
}

document.addEventListener('DOMContentLoaded', () => {
    bootThemeToggle();
    bootRevealAnimations();
    bootBackToTop();
});
