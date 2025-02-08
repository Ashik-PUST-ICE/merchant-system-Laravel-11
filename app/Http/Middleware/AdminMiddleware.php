<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // এখানে চেক করা হচ্ছে, যদি বর্তমানে লগিন করা ইউজারের 'is_admin' ফিল্ড সত্য হয়।
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request); // যদি admin হয়, তাহলে রিকুয়েস্ট এগিয়ে যাবে
        }

        return redirect('/'); // নাহলে, হোম পেজে রিডাইরেক্ট হবে
    }
}
