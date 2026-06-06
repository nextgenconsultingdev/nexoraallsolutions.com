@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'align' => 'left',
])

<div {{ $attributes->class([
    'flex flex-col gap-4',
    'items-center text-center' => $align === 'center',
]) }}>
    @if ($eyebrow)
        <span class="agency-eyebrow">{{ $eyebrow }}</span>
    @endif

    <div class="space-y-4">
        <h2 class="agency-subheading md:text-4xl">{{ $title }}</h2>

        @if ($description)
            <p class="agency-copy max-w-3xl">{{ $description }}</p>
        @endif
    </div>
</div>
