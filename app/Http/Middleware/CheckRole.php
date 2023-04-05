<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (! auth()->check() || auth()->user()->role->name !== $role) {
            return abort(403);
        }

        return $next($request);
    }
}
