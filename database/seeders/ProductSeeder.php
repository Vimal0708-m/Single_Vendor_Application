<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(resource_path('data/products.json'));
        $products = json_decode($json, true) ?? [];

        foreach ($products as $item) {
            Product::create([
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'description' => $item['description'] ?? null,
                'price' => $item['price'],
                'stock' => 50,
                'sku' => strtoupper(Str::slug($item['name'], '-')).'-'.$item['id'],
                'category_id' => 1,
                'brand_id' => 1,
                'status' => 'active',
            ]);
        }
    }
}
