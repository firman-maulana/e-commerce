<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Pastikan hanya bisa diakses jika sudah login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Kirim data ke view
        return view('profile', compact('user'));
    }
}
