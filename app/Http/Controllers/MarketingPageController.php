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
                'summary' => 'Get found online. Look professional. Get the call.',
                'price' => '$497.00',
                'original_price' => null,
                'monthly_price' => '$19.00',
                'timeline' => 'Live in 5 business days',
                'cta_label' => 'Get started',
                'is_highlighted' => false,
                'features' => [
                    'Professional 5-page website built for your specific trade',
                    'Shows up on Google searches — on-page SEO included',
                    'Contact form that texts you instantly when someone fills it out',
                    'WhatsApp + call button front and center on every page',
                    'Photo gallery to show your work and build trust',
                    'Google Maps so customers know exactly where you serve',
                    'Works perfectly on any phone — most of your customers are on mobile',
                    'Hosting fully managed — we handle everything, no tech headaches',
                    'Unlimited edits for 90 days after launch',
                ],
            ],
            [
                'name' => 'Booked',
                'summary' => 'Stop losing leads to competitors. Get instant replies working for you 24/7.',
                'price' => '$897.00',
                'original_price' => null,
                'monthly_price' => '$49.00',
                'timeline' => 'Live in 1 week',
                'cta_label' => 'Get started',
                'is_highlighted' => true,
                'features' => [
                    'Everything in Found',
                    'Instant auto-reply via SMS, WhatsApp, Facebook, or Instagram — even at 2am',
                    'Automated review requests sent after every completed job',
                    'Simple lead inbox — every lead and message in one place',
                    'Follow-up sequences that automatically chase leads',
                    'Monthly performance snapshot — calls, leads, reviews',
                ],
            ],
            [
                'name' => 'Dominant',
                'summary' => 'The complete growth machine. Run your entire business from your phone.',
                'price' => '$1,297.00',
                'original_price' => null,
                'monthly_price' => '$89.00',
                'timeline' => 'Live in 2 weeks',
                'cta_label' => 'Get started',
                'is_highlighted' => false,
                'features' => [
                    'Everything in Booked',
                    'Online booking system — customers book directly from your site',
                    'Google Calendar sync — your schedule stays up to date automatically',
                    'Automated estimate and quote delivery by text in seconds',
                    'Appointment reminders that cut no-shows dramatically',
                    'Priority support — direct access, fast response',
                ],
            ],
        ];

        return view('pages.marketing.home', compact('pricingPlans'));
    }
}
