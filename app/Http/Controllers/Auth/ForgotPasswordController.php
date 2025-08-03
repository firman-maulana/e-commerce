<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = rand(100000, 999999); // OTP 6 digit

        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => Carbon::now()]
        );

        // Kirim email
        Mail::raw("Kode OTP Anda adalah: $token", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Reset Password OTP');
        });

        // Kirim email dan token ke halaman reset
        return redirect()->route('password.reset.form', ['email' => $request->email, 'token' => $token]);
    }
}
