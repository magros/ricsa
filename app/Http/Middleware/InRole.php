<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;

class InRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param array $roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if ( Str::slug($request->user()->role->role_name ) == Str::slug($role)) {
                return $next($request);
            }
        }
        if ($request->ajax()) {
            return response('Forbidden.', 403);
        }
        return redirect()->to('/')->with('error', 'No tienes acceso a esta vista');

    }
}
