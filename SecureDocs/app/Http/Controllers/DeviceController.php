<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function showForm()
    {
        return view('register-device');
    }

    public function register(Request $request)
    {
        $request->validate([
            'device_id' => 'required|string'
        ]);
    
        $user = auth()->user();
        $user->device_id = $request->device_id;
        $user->save();
    
        // 세션에 디바이스 ID 저장
        session(['device_id' => $request->device_id]);
    
        return redirect('/documents');
    }
}
