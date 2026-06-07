<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MarketingPageController extends Controller
{
    public function home(): View
    {
        $pricingPlans = [
            [
                'name' => 'Found',
                'summary' => __('pricing.found.summary'),
                'price' => '$497.00',
                'original_price' => null,
                'monthly_price' => '$19.00',
                'timeline' => __('pricing.found.timeline'),
                'cta_label' => __('pricing.cta_label'),
                'is_highlighted' => false,
                'features' => [
                    __('pricing.found.feature_1'),
                    __('pricing.found.feature_2'),
                    __('pricing.found.feature_3'),
                    __('pricing.found.feature_4'),
                    __('pricing.found.feature_5'),
                    __('pricing.found.feature_6'),
                    __('pricing.found.feature_7'),
                    __('pricing.found.feature_8'),
                    __('pricing.found.feature_9'),
                ],
            ],
            [
                'name' => 'Booked',
                'summary' => __('pricing.booked.summary'),
                'price' => '$897.00',
                'original_price' => null,
                'monthly_price' => '$49.00',
                'timeline' => __('pricing.booked.timeline'),
                'cta_label' => __('pricing.cta_label'),
                'is_highlighted' => true,
                'features' => [
                    __('pricing.booked.feature_1'),
                    __('pricing.booked.feature_2'),
                    __('pricing.booked.feature_3'),
                    __('pricing.booked.feature_4'),
                    __('pricing.booked.feature_5'),
                    __('pricing.booked.feature_6'),
                ],
            ],
            [
                'name' => 'Dominant',
                'summary' => __('pricing.dominant.summary'),
                'price' => '$1,297.00',
                'original_price' => null,
                'monthly_price' => '$89.00',
                'timeline' => __('pricing.dominant.timeline'),
                'cta_label' => __('pricing.cta_label'),
                'is_highlighted' => false,
                'features' => [
                    __('pricing.dominant.feature_1'),
                    __('pricing.dominant.feature_2'),
                    __('pricing.dominant.feature_3'),
                    __('pricing.dominant.feature_4'),
                    __('pricing.dominant.feature_5'),
                    __('pricing.dominant.feature_6'),
                ],
            ],
        ];

        return view('pages.marketing.home', compact('pricingPlans'));
    }
}
