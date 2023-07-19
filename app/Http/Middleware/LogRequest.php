<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data= [
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'date' => $request->all(),
            'header' => $request->header(),
        ];
        Log::info($data);
        return $next($request);
    }
}
