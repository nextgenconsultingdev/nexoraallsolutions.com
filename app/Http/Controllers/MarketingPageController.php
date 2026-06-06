<?php

namespace App\Http\Controllers;

use App\Models\ContentBlock;
use App\Models\PricingPlan;
use App\Models\SocialLink;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class MarketingPageController extends Controller
{
    public function home(): View
    {
        return view('pages.marketing.home', [
            ...$this->sharedData(),
            'content' => $this->pageContent('home'),
            'aboutContent' => $this->pageContent('about'),
            'contactContent' => $this->pageContent('contact'),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function sharedData(): array
    {
        return [
            'pricingPlans' => PricingPlan::query()->active()->ordered()->get(),
            'socialLinks' => SocialLink::query()->active()->ordered()->get(),
        ];
    }

    private function pageContent(string $page): Collection
    {
        return ContentBlock::query()
            ->forPage($page)
            ->active()
            ->ordered()
            ->get()
            ->keyBy('key');
    }
}
