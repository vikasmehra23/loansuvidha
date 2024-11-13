<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyCsrfToken
{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   

    public function handle(Request $request, Closure $next): Response
    {

        if ($request->is('phonepe.payment.callback')) {
            // dd($request);
            return $next($request);
        }
        if ($request->is('phonepe-response')) {
            // dd($request);
            return $next($request);
        }

        
    }
}
