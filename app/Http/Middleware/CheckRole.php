<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param null $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        $user = Auth::user();
        //hotfix
        if($user->role == 'A' && $role == 'admin'){
            return $next($request);
        }
        if ($user->role !== $role) {
            return response(['error' => 'No access'], 403);
        }
        return $next($request);
    }
}
