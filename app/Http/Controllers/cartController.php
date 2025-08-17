<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    // Menampilkan halaman cart
    public function index()
    {
        // Ambil data cart dari session
        $cart = session()->get('cart', []);

        // Hitung total harga
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart', compact('cart', 'total'));
    }

    // Menghapus item dari cart
    public function remove($id)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    // Mengosongkan cart
    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Keranjang sudah dikosongkan.');
    }
}
