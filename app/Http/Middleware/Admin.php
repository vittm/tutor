<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->isAdmin() == 0)
        {
            return $next($request);
        }
        return redirect('/');
    }

}
