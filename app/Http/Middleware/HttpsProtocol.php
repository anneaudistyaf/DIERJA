<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HttpsProtocol
{

    public function handle(Request $request, Closure $next)
    {
        if (!app()->environment('local')) {
            // for Proxies
            Request::setTrustedProxies(
                [$request->getClientIp()],
                Request::HEADER_X_FORWARDED_ALL
            );

            if (!$request->isSecure()) {
                return redirect()->secure($request->getRequestUri());
            }
        }

        return $next($request);
    }
}
