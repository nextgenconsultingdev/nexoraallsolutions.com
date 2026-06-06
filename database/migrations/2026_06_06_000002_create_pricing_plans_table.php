<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('summary');
            $table->text('description');
            $table->unsignedInteger('original_price_in_cents')->nullable();
            $table->unsignedInteger('price_in_cents');
            $table->unsignedInteger('monthly_price_in_cents')->nullable();
            $table->string('currency', 3)->default('usd');
            $table->string('billing_unit')->default('project');
            $table->string('timeline')->nullable();
            $table->json('features')->nullable();
            $table->string('cta_label')->default('Start with this package');
            $table->string('stripe_price_id')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_highlighted')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
