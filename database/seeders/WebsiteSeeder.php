<?php

namespace Database\Seeders;

use App\Models\ContentBlock;
use App\Models\PricingPlan;
use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    public function run(): void
    {
        PricingPlan::query()->whereNotIn('slug', ['found', 'booked', 'dominant'])->delete();

        foreach ($this->pricingPlans() as $pricingPlan) {
            PricingPlan::query()->updateOrCreate(
                ['slug' => $pricingPlan['slug']],
                $pricingPlan,
            );
        }

        foreach ($this->contentBlocks() as $contentBlock) {
            ContentBlock::query()->updateOrCreate(
                ['page' => $contentBlock['page'], 'key' => $contentBlock['key']],
                $contentBlock,
            );
        }

        foreach ($this->socialLinks() as $socialLink) {
            SocialLink::query()->updateOrCreate(
                ['platform' => $socialLink['platform']],
                $socialLink,
            );
        }
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function pricingPlans(): array
    {
        return [
            [
                'name' => 'Found',
                'slug' => 'found',
                'summary' => 'Get found online. Look professional. Get the call.',
                'description' => 'Built for brand new businesses, solo operators, and anyone with no website or an embarrassing one. The goal is legitimacy — look like a real business so customers trust you enough to call.',
                'price_in_cents' => 49700,
                'monthly_price_in_cents' => 1900,
                'currency' => 'usd',
                'billing_unit' => 'one-time',
                'timeline' => 'Live in 5 business days',
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
                'cta_label' => 'Get started',
                'sort_order' => 1,
                'is_highlighted' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Booked',
                'slug' => 'booked',
                'summary' => 'Stop losing leads to competitors. Get instant replies working for you 24/7.',
                'description' => 'For businesses already getting some calls but losing leads to slow response or missed messages. $49/mo pays for itself with one extra job per month — and you\'ll get way more than one.',
                'price_in_cents' => 89700,
                'monthly_price_in_cents' => 4900,
                'currency' => 'usd',
                'billing_unit' => 'one-time',
                'timeline' => 'Live in 1 week',
                'features' => [
                    'Everything in Found',
                    'Instant auto-reply the moment a lead contacts you via SMS, WhatsApp, Facebook, or Instagram — even at 2am',
                    'Automated review requests sent after every completed job — get to 50+ Google reviews fast',
                    'Simple lead inbox — see every lead and every message in one place, right from your phone',
                    'Follow-up sequences that automatically chase leads so you don\'t have to',
                    'Monthly performance snapshot — calls received, leads captured, reviews earned',
                ],
                'cta_label' => 'Get started',
                'sort_order' => 2,
                'is_highlighted' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Dominant',
                'slug' => 'dominant',
                'summary' => 'The complete growth machine. Run your entire business from your phone.',
                'description' => 'For established operators doing $15k+/month who want to systematize, stop dropping balls, and scale without hiring. The full solution from someone you trust.',
                'price_in_cents' => 129700,
                'monthly_price_in_cents' => 8900,
                'currency' => 'usd',
                'billing_unit' => 'one-time',
                'timeline' => 'Live in 2 weeks',
                'features' => [
                    'Everything in Booked',
                    'Online booking system — customers book jobs directly from your site, no phone tag',
                    'Google Calendar sync — your schedule stays up to date automatically',
                    'Automated estimate and quote delivery — send a professional quote by text in seconds, from anywhere',
                    'Appointment reminders — automated texts before every job cut no-shows dramatically',
                    'Priority support — direct access, fast response, we treat your business like our own',
                ],
                'cta_label' => 'Get started',
                'sort_order' => 3,
                'is_highlighted' => false,
                'is_active' => true,
            ],
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function contentBlocks(): array
    {
        return [
            [
                'page' => 'home',
                'key' => 'hero',
                'eyebrow' => 'Digital products with momentum',
                'title' => 'We build high-performing websites and SaaS products that feel premium from day one.',
                'subtitle' => 'A modern development agency for teams that care about conversion, clarity, and maintainable delivery.',
                'body' => 'From marketing websites to internal platforms and SaaS products, we blend strategy, interface design, and Laravel engineering into launches that look sharp and scale cleanly.',
                'secondary_body' => 'Small enough to move quickly, experienced enough to own the details.',
                'meta' => ['primary_cta' => 'Start your project', 'secondary_cta' => 'See pricing'],
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'page' => 'about',
                'key' => 'story',
                'eyebrow' => 'Built for ambitious teams',
                'title' => 'We treat websites and product interfaces like revenue infrastructure, not decoration.',
                'subtitle' => 'Our work sits at the intersection of product thinking, UI craft, and practical engineering.',
                'body' => 'The goal is simple: launch things that are easier to trust, easier to use, and easier to grow. That means tighter messaging, stronger systems, and cleaner delivery.',
                'secondary_body' => 'We favor long-lived decisions over trendy complexity.',
                'meta' => ['principles' => ['Clarity over clutter', 'Systems over one-offs', 'Performance as a feature']],
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'page' => 'contact',
                'key' => 'intro',
                'eyebrow' => 'Let\'s make the next version better',
                'title' => 'Tell us what you\'re building, what feels stuck, or where you need extra horsepower.',
                'subtitle' => 'We\'ll respond with a practical next step instead of a generic pitch.',
                'body' => 'Best fit projects usually involve a real product goal: launches, redesigns, new SaaS features, platform upgrades, or performance work.',
                'secondary_body' => null,
                'meta' => ['response_time' => 'Usually within 1 business day'],
                'sort_order' => 1,
                'is_active' => true,
            ],
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function socialLinks(): array
    {
        return [
            [
                'label' => 'LinkedIn',
                'platform' => 'LinkedIn',
                'url' => 'https://www.linkedin.com',
                'icon' => null,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'label' => 'GitHub',
                'platform' => 'GitHub',
                'url' => 'https://github.com',
                'icon' => null,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'label' => 'X / Twitter',
                'platform' => 'X',
                'url' => 'https://x.com',
                'icon' => null,
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];
    }
}
