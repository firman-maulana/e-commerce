<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        return view('tracking.index');
    }

    public function track(Request $request)
    {
        $request->validate([
            'tracking_number' => 'required|string|max:50'
        ]);

        $trackingNumber = $request->tracking_number;

        // Contoh data dummy
        $status = [
            'TRX12345' => 'Pesanan sedang diproses',
            'TRX67890' => 'Pesanan dalam perjalanan',
            'TRX11111' => 'Pesanan telah sampai',
        ];

        $message = $status[$trackingNumber] ?? 'Nomor resi tidak ditemukan';

        return view('tracking', compact('trackingNumber', 'message'));
    }
}
