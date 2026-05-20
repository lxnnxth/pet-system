<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->session()->get('user');


        if (!$user) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
