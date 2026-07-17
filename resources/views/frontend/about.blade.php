@extends('layouts.frontend')

@section('title', 'About Us - BloomShop')

@section('content')
<div style="background-color: var(--bloom-background);">
    {{-- Hero --}}
    <section class="py-16 lg:py-24 bg-gradient-to-br from-orange-50 to-yellow-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <span class="mb-6 inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold shadow" style="background-color: var(--bloom-primary); color: var(--bloom-primary-foreground); border-color: transparent;">About Us</span>
                <h1 class="text-4xl lg:text-6xl font-bold mb-6" style="color: var(--bloom-foreground);">We're <span style="color: var(--bloom-primary);">BloomShop</span></h1>
                <p class="text-lg max-w-2xl mx-auto" style="color: var(--bloom-muted-foreground);">Discover unique products that inspire your lifestyle. Quality craftsmanship meets modern design.</p>
            </div>
        </div>
    </section>

    {{-- Content --}}
    <section class="py-16 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            <div class="space-y-8">
                <div class="rounded-xl border bg-white shadow p-8" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                    <h2 class="text-2xl font-bold mb-4" style="color: var(--bloom-foreground);">Our Story</h2>
                    <p class="leading-relaxed" style="color: var(--bloom-muted-foreground);">Founded with a passion for quality footwear, BloomShop has grown from a small boutique into a trusted destination for sneaker enthusiasts worldwide. We believe that every step should be a statement of style and comfort.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="rounded-xl border bg-white shadow p-6 text-center" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                        <div class="text-3xl font-bold mb-2" style="color: var(--bloom-primary);">500+</div>
                        <div class="text-sm" style="color: var(--bloom-muted-foreground);">Happy Customers</div>
                    </div>
                    <div class="rounded-xl border bg-white shadow p-6 text-center" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                        <div class="text-3xl font-bold mb-2" style="color: var(--bloom-primary);">50+</div>
                        <div class="text-sm" style="color: var(--bloom-muted-foreground);">Premium Brands</div>
                    </div>
                    <div class="rounded-xl border bg-white shadow p-6 text-center" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                        <div class="text-3xl font-bold mb-2" style="color: var(--bloom-primary);">24/7</div>
                        <div class="text-sm" style="color: var(--bloom-muted-foreground);">Customer Support</div>
                    </div>
                </div>

                <div class="rounded-xl border bg-white shadow p-8" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                    <h2 class="text-2xl font-bold mb-4" style="color: var(--bloom-foreground);">Our Mission</h2>
                    <p class="leading-relaxed" style="color: var(--bloom-muted-foreground);">To provide premium quality footwear that combines cutting-edge design with exceptional comfort, making every step a confident one. We're committed to sustainable practices and delivering outstanding customer experiences.</p>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.newsletter')
</div>
@endsection
