<?php

namespace App\Http\Controllers;

use App\Models\Merchant;

class AdminController extends Controller
{
    public function dashboard()
    {
        $merchants = Merchant::all();
        return view('admin.dashboard', compact('merchants'));
    }
}

