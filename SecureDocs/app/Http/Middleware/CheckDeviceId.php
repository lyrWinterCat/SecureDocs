<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckDeviceId
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        $deviceId = $request->header('X-DEVICE-ID');

        if ($user->device_id !== $deviceId) {
            abort(403, 'Unauthorized device.');
        }

        return $next($request);
    }
}
