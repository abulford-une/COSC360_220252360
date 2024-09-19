<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class APIMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = Auth::user()->user_role;
        if ($role != 'admin' && $role != 'author') {
            return response()->json([
                'data' => 'Authentication error',
                'message' => 'You are not authorised to access this resource'
            ], status: 401);
        }
        return $next($request);
    }
}
