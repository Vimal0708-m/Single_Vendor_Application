<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = $this->getProducts();

        return view('frontend.home', compact('products'));
    }

    protected function getProducts(): array
    {
        return Product::with(['images', 'category', 'brand'])
            ->where('status', true)
            ->latest()
            ->get()
            ->map(function ($product) {
                $image = $product->primaryImage();

                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->discount_price ?? $product->price,
                    'image' => $image?->image
                        ? Storage::disk('public')->url($image->image)
                        : asset('frontend-assets/images/no-image.jpg'),
                    'description' => $product->description,
                ];
            })
            ->toArray();
    }
}
