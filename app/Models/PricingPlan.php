<?php

namespace App\Models;

use Database\Factories\PricingPlanFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

#[Fillable([
    'name',
    'slug',
    'summary',
    'description',
    'price_in_cents',
    'original_price_in_cents',
    'monthly_price_in_cents',
    'currency',
    'billing_unit',
    'timeline',
    'features',
    'cta_label',
    'stripe_price_id',
    'sort_order',
    'is_highlighted',
    'is_active',
])]
class PricingPlan extends Model
{
    /** @use HasFactory<PricingPlanFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'features' => 'array',
            'is_highlighted' => 'bool',
            'is_active' => 'bool',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (PricingPlan $pricingPlan): void {
            if (blank($pricingPlan->slug)) {
                $pricingPlan->slug = Str::slug($pricingPlan->name);
            }
        });
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order');
    }

    public function formattedPrice(): string
    {
        return '$'.number_format($this->price_in_cents / 100, 2);
    }

    public function formattedOriginalPrice(): ?string
    {
        if (blank($this->original_price_in_cents)) {
            return null;
        }

        return '$'.number_format($this->original_price_in_cents / 100, 2);
    }

    public function formattedMonthlyPrice(): ?string
    {
        if (blank($this->monthly_price_in_cents)) {
            return null;
        }

        return '$'.number_format($this->monthly_price_in_cents / 100, 2);
    }
}
