<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;

class ChatAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // hanya untuk user login
    }

    // Tampilkan halaman chat
    public function index()
    {
        // Ambil semua chat user ini dengan admin
        $chats = Chat::where('user_id', Auth::id())->orderBy('created_at', 'asc')->get();
        return view('chat.admin', compact('chats'));
    }

    // Simpan pesan user
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        Chat::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'is_admin' => false, // user yg mengirim
        ]);

        return redirect()->route('chatAdmin');
    }
}
