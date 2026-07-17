<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function __invoke()
    {
        return view('frontend.cart');
    }
}
