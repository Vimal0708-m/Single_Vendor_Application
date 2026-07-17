@extends('layouts.frontend')

@section('title', 'Wishlist - BloomShop')

@section('content')
<div x-data class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold" style="color: var(--bloom-foreground);">My Wishlist</h1>
        <p class="mt-2" style="color: var(--bloom-muted-foreground);">
            <span x-text="$store.wishlist.items.length"></span> item(s) in your wishlist
        </p>
    </div>

    {{-- Empty Wishlist --}}
    <div x-show="$store.wishlist.items.length === 0" class="py-32">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <svg class="h-24 w-24 mx-auto mb-4" style="color: var(--bloom-muted-foreground);" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/></svg>
                <h1 class="text-3xl font-bold mb-4" style="color: var(--bloom-foreground);">Your wishlist is empty</h1>
                <p class="text-lg" style="color: var(--bloom-muted-foreground);">Start adding products you love!</p>
            </div>
            <a href="{{ route('frontend.shop') }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm text-sm font-medium transition-colors h-10 px-8 text-black shadow hover:opacity-90" style="background-color: var(--bloom-primary);">Browse Products</a>
        </div>
    </div>

    {{-- Wishlist Items --}}
    <div x-show="$store.wishlist.items.length > 0" style="display: none;">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 max-w-7xl">
            <template x-for="itemId in $store.wishlist.items" :key="itemId">
                <div class="rounded-xl border bg-white shadow overflow-hidden" style="border-color: var(--bloom-border); background-color: var(--bloom-card);">
                    <div class="relative">
                        <a :href="'{{ route('frontend.home') }}/product/' + itemId" class="block">
                            <div class="aspect-square overflow-hidden bg-gray-100">
                                <img :src="'/frontend-assets/images/no-image.jpg'" :alt="'Product ' + itemId" class="w-full h-full object-cover" />
                            </div>
                        </a>
                        <button x-on:click="$store.wishlist.toggle(itemId)" class="absolute top-3 right-3 z-10 p-2 rounded-full bg-white/80 backdrop-blur-sm hover:bg-white transition-all duration-200 text-red-500">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <a :href="'{{ route('frontend.home') }}/product/' + itemId" class="font-semibold" style="color: var(--bloom-foreground);">Product #<span x-text="itemId"></span></a>
                        <button x-on:click="$store.cart.add({ id: itemId, name: 'Product ' + itemId, price: 99, image: '/frontend-assets/images/no-image.jpg' })" class="mt-3 w-full inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm text-sm font-medium transition-colors h-9 px-4 text-black shadow hover:opacity-90" style="background-color: var(--bloom-primary);">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
@endsection
