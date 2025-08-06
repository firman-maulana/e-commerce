<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
public function showResetForm(Request $request)
{
    $email = $request->email;
    $token = $request->token;

    return view('auth.reset-password', compact('email', 'token'));
}


    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required|digits:6',
            'password' => 'required|confirmed|min:6',
        ]);

        $reset = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$reset || Carbon::parse($reset->created_at)->addMinutes(15)->isPast()) {
            return back()->withErrors(['token' => 'Kode OTP tidak valid atau sudah kedaluwarsa']);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Hapus OTP
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('signIn')->with('success', 'Your password has been reset successfully. Please log in.');
    }
}
