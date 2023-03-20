<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role->name;

            switch ($role) {
                case 'admin':
                    return redirect(route('admin.dashboard'));
                    break;
                case 'kotiba':
                    return redirect(route('hall.dashboard'));
                    break;
                case 'kutubxonachi':
                    return redirect(route('abonement.dashboard'));
                    break;
                default:
                    return redirect(route('home'));
                    break;
            }
        }
        return $next($request);
    }
}
