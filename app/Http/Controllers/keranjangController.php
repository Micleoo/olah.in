<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;

class KeranjangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Menampilkan semua item dalam keranjang
    public function index()
    {
        $keranjang = Keranjang::where('id_user', auth()->id())->get();
        // Hitung total harga
        $totalHarga = $keranjang->sum(function ($item) {
            return $item->product->harga * $item->jumlah;
        });
        return view('keranjang.index', compact('keranjang', 'totalHarga'));
    }

    // Menambahkan item ke keranjang
    public function store(Request $request)
    {
        
        $request->validate([
            'id_produk' => 'required|exists:produk,id',
            'id_user' => 'required|exists:users,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        Keranjang::create([
            'id_produk' => $request->id_produk,
            'id_user' => $request->id_user,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('keranjang.index')->with('success', 'Item telah ditambahkan ke keranjang.');
    }

    public function showNavbar()
{
    $keranjang = Keranjang::all(); 
    return view('partials.navbar', compact('keranjang'));
}

    // Menghapus item dari keranjang
    public function destroy($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect()->route('keranjang.index')->with('success', 'Item telah dihapus dari keranjang.');
    }
}
