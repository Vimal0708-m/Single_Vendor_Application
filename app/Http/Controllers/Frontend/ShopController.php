<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = $this->getProducts();

        if ($search = $request->input('search')) {
            $products = array_filter($products, fn ($p) => stripos($p['name'], $search) !== false || stripos($p['description'] ?? '', $search) !== false);
        }

        return view('frontend.shop', ['products' => array_values($products)]);
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
