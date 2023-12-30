<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifiedUser
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->email_verified_at !== null) {
            return $next($request);
        }
        return redirect('/')->with('error', 'Anda harus memverifikasi email untuk mengakses halaman ini.');
    }
}
