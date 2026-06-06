@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $variantClass = match ($variant) {
        'secondary' => 'agency-button-secondary',
        'ghost' => 'agency-button-ghost',
        default => 'agency-button-primary',
    };
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class([$variantClass]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->class([$variantClass]) }}>
        {{ $slot }}
    </button>
@endif
