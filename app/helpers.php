<?php

if (! function_exists('locale_route')) {
    /**
     * Generate a URL for a named route using the active locale prefix.
     * Returns the default (EN) route when the active locale matches app.locale.
     */
    function locale_route(string $name, array $parameters = []): string
    {
        $locale = app()->getLocale();
        $default = config('app.locale', 'en');
        $routeName = $locale !== $default ? "{$locale}.{$name}" : $name;

        return route($routeName, $parameters);
    }
}
