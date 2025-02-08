<?php

// app/Http/Controllers/Auth/RegisterController.php
namespace App\Http\Controllers\Auth;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:merchants',
            'shop_name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $merchant = Merchant::create([
            'name' => $request->name,
            'email' => $request->email,
            'shop_name' => $request->shop_name,
            'password' => Hash::make($request->password),  // Hash the password
        ]);

        auth()->login($merchant); // Login the merchant

        return redirect()->route('merchant.product-list');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}

