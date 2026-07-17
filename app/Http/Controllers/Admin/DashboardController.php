<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'totalCategories' => Category::count(),
            'totalBrands' => Brand::count(),
            'totalProducts' => Product::count(),
            'totalOrders' => Order::count(),
        ]);
    }
}
