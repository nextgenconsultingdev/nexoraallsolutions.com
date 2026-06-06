<div>
    <form wire:submit="send" class="agency-card grid gap-5">
        <div class="grid gap-5 md:grid-cols-2">
            <div>
                <label class="agency-label" for="name">Your name</label>
                <input wire:model="name" class="agency-input" id="name" name="name" type="text" placeholder="John Smith">
                @error('name')
                <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="agency-label" for="phone">Phone number</label>
                <input wire:model="phone" class="agency-input" id="phone" name="phone" type="tel" placeholder="(407) 555-0100">
                @error('phone')
                <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
            <div>
                <label class="agency-label" for="email">Email address</label>
                <input wire:model="email" class="agency-input" id="email" name="email" type="email" placeholder="john@mycompany.com">
                @error('email')
                <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="agency-label" for="company">Business name</label>
                <input wire:model="company" class="agency-input" id="company" name="company" type="text" placeholder="Smith Plumbing LLC">
                @error('company')
                <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label class="agency-label" for="project_scope">What type of business do you have?</label>
            <select wire:model="project_scope" class="agency-input" id="project_scope" name="project_scope">
                <option value="">Select your industry</option>
                <option value="Plumbing" {{ old('project_scope') === 'Plumbing' ? 'selected' : '' }}>Plumbing</option>
                <option value="HVAC" {{ old('project_scope') === 'HVAC' ? 'selected' : '' }}>HVAC</option>
                <option value="Roofing" {{ old('project_scope') === 'Roofing' ? 'selected' : '' }}>Roofing</option>
                <option value="Cleaning" {{ old('project_scope') === 'Cleaning' ? 'selected' : '' }}>Cleaning</option>
                <option value="Pressure Washing" {{ old('project_scope') === 'Pressure Washing' ? 'selected' : '' }}>Pressure Washing</option>
                <option value="Landscaping" {{ old('project_scope') === 'Landscaping' ? 'selected' : '' }}>Landscaping</option>
                <option value="Contracting / Remodeling" {{ old('project_scope') === 'Contracting / Remodeling' ? 'selected' : '' }}>Contracting / Remodeling</option>
                <option value="Auto Detailing" {{ old('project_scope') === 'Auto Detailing' ? 'selected' : '' }}>Auto Detailing</option>
                <option value="Other" {{ old('project_scope') === 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('project_scope')
            <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="agency-label" for="message">What's your biggest challenge right now? <span class="font-normal text-slate-400">(optional)</span></label>
            <textarea wire:model="message" class="agency-input min-h-28" id="message" name="message" placeholder="e.g. I don't have a website, I'm not getting enough calls, my current site looks outdated..."></textarea>
            @error('message')
            <p class="mt-2 text-sm text-red-700 dark:text-brand-300">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between gap-4">
            <p class="agency-muted">We'll get back to you within 1 business day.</p>
            <x-ui.button type="submit">Get a free consultation</x-ui.button>
        </div>
    </form>
</div>
