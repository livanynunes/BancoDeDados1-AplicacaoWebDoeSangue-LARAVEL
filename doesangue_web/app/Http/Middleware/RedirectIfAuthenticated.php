<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }
        // if ($guard == "doador" && Auth::guard($guard)->check()) {
        //         return redirect('/doador');
        //     }

        switch ($guard) {
            case 'doador':
                if (Auth::guard($guard)->check()) {
                    // return redirect()->route('doador.dashboard');
                    return redirect('/doador');
                }
                break;
            
            default:
                 if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }

        return $next($request);
    }
}
