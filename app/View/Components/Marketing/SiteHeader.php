<?php

namespace App\View\Components\Marketing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteHeader extends Component
{
    /** @var array<int, array{key: string, anchor: string}> */
    public array $links;

    /** @var array<int, array{label: string, platform: string, url: string}> */
    public array $socialLinks;

    public function __construct()
    {
        $this->links = [
            ['key' => 'nav.services', 'anchor' => 'services'],
            ['key' => 'nav.ai', 'anchor' => 'ai'],
            ['key' => 'nav.pricing', 'anchor' => 'pricing'],
            ['key' => 'nav.about', 'anchor' => 'about'],
            ['key' => 'nav.contact', 'anchor' => 'contact'],
        ];

        $this->socialLinks = [
            ['label' => 'LinkedIn', 'platform' => 'LinkedIn', 'url' => 'https://www.linkedin.com'],
            ['label' => 'GitHub', 'platform' => 'GitHub', 'url' => 'https://github.com'],
            ['label' => 'X / Twitter', 'platform' => 'X', 'url' => 'https://x.com'],
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.marketing.site-header');
    }
}
