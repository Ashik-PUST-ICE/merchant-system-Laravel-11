<?php

// app/Http/Controllers/Auth/LoginController.php
namespace App\Http\Controllers\Auth;

use App\Models\Merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


public function login(Request $request)
{
    // Login validation and authentication
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        if (Auth::user()->is_admin) {
            // If user is admin, redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Otherwise, redirect to the merchant dashboard or home
            return redirect()->route('merchant.dashboard');
        }
    }

    return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
}

}

