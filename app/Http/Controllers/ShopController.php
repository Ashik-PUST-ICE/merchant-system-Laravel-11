<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;

class ShopController extends Controller
{
    public function index($shop)
    {
        $store = Store::where('name', $shop)->first();
        $categories = Category::where('store_id', $store->id)->get();
        return view('shop.index', compact('store', 'categories'));
    }
}

