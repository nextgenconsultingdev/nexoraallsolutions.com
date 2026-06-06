<?php

namespace App\Livewire;

use App\Models\ContactSubmission;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name;

    public string $email;

    public string $phone;

    public string $company;

    public string $project_scope;

    public string $message;

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'company' => ['nullable', 'string', 'max:120'],
            'project_scope' => ['required', 'string', 'max:120'],
            'message' => ['nullable', 'string', 'min:10'],
        ];
    }

    protected function messages(): array
    {
        return [
            'project_scope.required' => 'Please tell us what type of business you have.',
            'message.min' => 'Give us a little more detail so we can help you better.',
        ];
    }

    public function send(): void
    {
        $validated = $this->validate();

        ContactSubmission::query()->create([
            ...$validated,
            'status' => 'new',
            'meta' => [
                'submitted_from' => url()->previous(),
            ],
        ]);

        $this->reset(['name', 'email', 'phone', 'company', 'project_scope', 'message']);

        $this->dispatch('notify', message: 'Thanks for reaching out. We\'ll follow up soon.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
