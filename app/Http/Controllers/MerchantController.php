<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;
use App\Models\Product;

class MerchantController extends Controller
{
    public function storeList()
    {
        $stores = Store::where('merchant_id', auth()->id())->get();
        return view('merchant.store-list', compact('stores'));
    }

    public function createStore()
    {
        return view('merchant.create-store');
    }

    public function categoryList()
    {
        $categories = Category::where('merchant_id', auth()->id())->get();
        return view('merchant.category-list', compact('categories'));
    }

    public function createCategory()
    {
        return view('merchant.create-category');
    }

    public function productList()
    {
        $products = Product::where('merchant_id', auth()->id())->get();
        return view('merchant.product-list', compact('products'));
    }

    public function createProduct()
    {
        return view('merchant.create-product');
    }
}

