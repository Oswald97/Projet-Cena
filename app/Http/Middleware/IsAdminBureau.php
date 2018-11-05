<?php

namespace App\Http\Middleware;

use App\Allow;
use App\hasRole;
use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class IsAdminBureau
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
        $date=Allow::first()->date;
        $bool=$date->format('d-m-Y') < Carbon::now()-> format('d-m-Y');
        if(Auth::user()->hasRole("Chef Bureau")){
            if ($bool) {
                return redirect()->route('wait');
            }

            return $next($request);
        }

        return redirect()->back();
    }
}
