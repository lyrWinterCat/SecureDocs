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
        
        // 디바이스 ID 확인: 헤더 → 세션 순서로 체크
        $deviceId = $request->header('X-DEVICE-ID') ?? session('device_id');

        if ($user->device_id !== $deviceId) {
            abort(403, 'Unauthorized device.');
        }

        return $next($request);
    }
}
