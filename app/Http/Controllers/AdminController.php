<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // middleware যোগ করা হচ্ছে
        $this->middleware('admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
