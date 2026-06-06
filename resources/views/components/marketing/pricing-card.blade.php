@props([
    'pricingPlan',
])

<article @class([
    'agency-card h-full relative overflow-hidden',
    'ring-2 ring-gold-400/50 dark:ring-gold-400/40' => $pricingPlan->is_highlighted,
]) data-reveal>

    {{-- Gold accent bar for highlighted plan --}}
    @if ($pricingPlan->is_highlighted)
        <div class="absolute inset-x-0 top-0 h-1 rounded-t-[28px] bg-gradient-to-r from-gold-400 via-gold-500 to-gold-400"></div>
    @endif

    <div class="flex h-full flex-col gap-6">
        <div class="space-y-3">
            @if ($pricingPlan->is_highlighted)
                <span class="agency-eyebrow-gold">Most popular</span>
            @endif

            <div class="space-y-2">
                <h3 class="agency-subheading text-2xl">{{ $pricingPlan->name }}</h3>
                <p class="agency-copy text-base">{{ $pricingPlan->summary }}</p>
            </div>
        </div>

        <div class="border-b border-slate-200/70 pb-6 dark:border-white/10">
            @if ($pricingPlan->formattedOriginalPrice())
                <p class="mb-1 text-sm text-slate-500 line-through dark:text-slate-400">{{ $pricingPlan->formattedOriginalPrice() }}</p>
            @endif
            <div class="flex items-end gap-2">
                <span class="font-display text-4xl font-semibold text-slate-950 dark:text-white">{{ $pricingPlan->formattedPrice() }}</span>
                <span class="pb-1 text-sm text-slate-500 dark:text-slate-400">one-time</span>
            </div>
            @if ($pricingPlan->formattedMonthlyPrice())
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">+ {{ $pricingPlan->formattedMonthlyPrice() }}<span class="text-xs">/month</span></p>
            @endif
        </div>

        <p class="agency-muted -mt-2">{{ $pricingPlan->timeline }}</p>

        <ul class="flex-1 divide-y divide-slate-100 dark:divide-white/5">
            @foreach ($pricingPlan->features ?? [] as $feature)
                <li class="flex items-center gap-3 py-2.5 text-xs text-slate-600 dark:text-slate-300">
                    <svg class="size-3.5 shrink-0 text-brand-500" viewBox="0 0 16 16" fill="none">
                        <circle cx="8" cy="8" r="7.5" stroke="currentColor" stroke-opacity="0.3"/>
                        <path d="M5 8l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>{{ $feature }}</span>
                </li>
            @endforeach
        </ul>

        <div class="mt-auto border-t border-slate-200/70 pt-6 dark:border-white/10">
            <x-ui.button href="#contact" class="w-full justify-center" :variant="$pricingPlan->is_highlighted ? 'primary' : 'secondary'">
                {{ $pricingPlan->cta_label }}
            </x-ui.button>
        </div>
    </div>
</article>
