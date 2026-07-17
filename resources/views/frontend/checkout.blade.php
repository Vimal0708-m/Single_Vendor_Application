@extends('layouts.frontend')

@section('title', 'Checkout - BloomShop')

@section('content')
<div x-data class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold" style="color: var(--bloom-foreground);">Checkout</h1>
        <p class="mt-2" style="color: var(--bloom-muted-foreground);">Complete your order</p>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="rounded-xl border bg-white shadow p-6" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                <h2 class="text-lg font-semibold mb-6" style="color: var(--bloom-foreground);">Shipping Information</h2>

                <form class="space-y-6">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium" style="color: var(--bloom-foreground);">First Name</label>
                            <input type="text" placeholder="John" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium" style="color: var(--bloom-foreground);">Last Name</label>
                            <input type="text" placeholder="Doe" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium" style="color: var(--bloom-foreground);">Email</label>
                        <input type="email" placeholder="john@example.com" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium" style="color: var(--bloom-foreground);">Address</label>
                        <input type="text" placeholder="123 Main St" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                    </div>

                    <div class="grid sm:grid-cols-3 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium" style="color: var(--bloom-foreground);">City</label>
                            <input type="text" placeholder="New York" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium" style="color: var(--bloom-foreground);">State</label>
                            <input type="text" placeholder="NY" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium" style="color: var(--bloom-foreground);">ZIP</label>
                            <input type="text" placeholder="10001" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                        </div>
                    </div>

                    <h2 class="text-lg font-semibold pt-4" style="color: var(--bloom-foreground);">Payment Information</h2>

                    <div class="space-y-2">
                        <label class="text-sm font-medium" style="color: var(--bloom-foreground);">Card Number</label>
                        <input type="text" placeholder="4242 4242 4242 4242" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium" style="color: var(--bloom-foreground);">Expiry</label>
                            <input type="text" placeholder="MM/YY" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium" style="color: var(--bloom-foreground);">CVC</label>
                            <input type="text" placeholder="123" class="flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-base shadow-sm transition-colors placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-1 md:text-sm" style="border-color: var(--bloom-input);" />
                        </div>
                    </div>

                    <button type="submit" class="w-full inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm text-sm font-medium transition-colors h-10 px-8 text-black shadow hover:opacity-90" style="background-color: var(--bloom-primary);">
                        Place Order
                    </button>
                </form>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="rounded-xl border bg-white shadow sticky top-4" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                <div class="p-6">
                    <h2 class="text-lg font-semibold" style="color: var(--bloom-foreground);">Order Summary</h2>
                </div>
                <div class="px-6 pb-6 space-y-4">
                    <template x-for="(item, index) in $store.cart.items" :key="item.id">
                        <div class="flex items-center gap-3">
                            <img :src="item.image" :alt="item.name" class="w-12 h-12 rounded-lg object-cover bg-gray-100" />
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate" x-text="item.name"></p>
                                <p class="text-xs" style="color: var(--bloom-muted-foreground);">Qty: <span x-text="item.quantity"></span></p>
                            </div>
                            <p class="text-sm font-medium">$<span x-text="(item.price * item.quantity).toFixed(2)"></span></p>
                        </div>
                    </template>

                    <div class="h-[1px] w-full shrink-0" style="background-color: var(--bloom-border);"></div>

                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span style="color: var(--bloom-muted-foreground);">Subtotal</span>
                            <span>$<span x-text="$store.cart.subtotal().toFixed(2)"></span></span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span style="color: var(--bloom-muted-foreground);">Shipping</span>
                            <span x-text="$store.cart.shipping() === 0 ? 'Free' : '$' + $store.cart.shipping().toFixed(2)"></span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span style="color: var(--bloom-muted-foreground);">Tax</span>
                            <span>$<span x-text="$store.cart.tax().toFixed(2)"></span></span>
                        </div>
                        <div class="h-[1px] w-full shrink-0" style="background-color: var(--bloom-border);"></div>
                        <div class="flex justify-between">
                            <span class="text-lg font-semibold">Total</span>
                            <span class="text-lg font-bold" style="color: var(--bloom-primary);">$<span x-text="$store.cart.total().toFixed(2)"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
