<div>
    <form wire:submit="send" class="agency-card grid gap-5">
        <div class="grid gap-5 md:grid-cols-2">
            <div>
                <label class="agency-label" for="name">{{ __('form.name') }}</label>
                <input wire:model="name" class="agency-input" id="name" name="name" type="text"
                    placeholder="John Smith">
                @error('name')
                    <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="agency-label" for="phone">{{ __('form.phone') }}</label>
                <input wire:model="phone" class="agency-input" id="phone" name="phone" type="tel"
                    placeholder="(407) 555-0100">
                @error('phone')
                    <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
            <div>
                <label class="agency-label" for="email">{{ __('form.email') }}</label>
                <input wire:model="email" class="agency-input" id="email" name="email" type="email"
                    placeholder="john@mycompany.com">
                @error('email')
                    <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="agency-label" for="company">{{ __('form.company') }}</label>
                <input wire:model="company" class="agency-input" id="company" name="company" type="text"
                    placeholder="Acme Corp">
                @error('company')
                    <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label class="agency-label" for="project_scope">{{ __('form.project_scope') }}</label>
            <select wire:model="project_scope" class="agency-input" id="project_scope" name="project_scope">
                <option value="">{{ __('form.industry_placeholder') }}</option>
                <option value="E-commerce">E-commerce</option>
                <option value="Restaurant / Food & Beverage">Restaurant / Food &amp; Beverage</option>
                <option value="Health & Wellness">Health &amp; Wellness</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Professional Services">Professional Services</option>
                <option value="Retail">Retail</option>
                <option value="Construction / Trades">Construction / Trades</option>
                <option value="Education">Education</option>
                <option value="Technology / SaaS">Technology / SaaS</option>
                <option value="Non-Profit">Non-Profit</option>
                <option value="Other">Other</option>
            </select>
            @error('project_scope')
                <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="agency-label" for="message">
                {{ __('form.message_label') }}
                <span class="font-normal text-slate-400">({{ __('form.optional') }})</span>
            </label>
            <textarea wire:model="message" class="agency-input min-h-28" id="message" name="message"
                placeholder="e.g. I need a website, I want to automate my follow-ups, I'm looking for a mobile app..."></textarea>
            @error('message')
                <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between gap-4">
            <p class="agency-muted">{{ __('form.response_time') }}</p>
            <x-ui.button type="submit">{{ __('form.submit') }}</x-ui.button>
        </div>
    </form>
</div>
