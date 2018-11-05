<?php

namespace App\Http\Middleware;

use App\hasRole;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdminCena
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->hasRole("Membre Cena")){

            return $next($request);
        }

        return redirect()->back();
    }
}
