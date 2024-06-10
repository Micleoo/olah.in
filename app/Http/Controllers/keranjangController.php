<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;

class keranjangController extends Controller
{
    // Menampilkan semua item dalam keranjang
    public function index()
    {
        $keranjang = Keranjang::all();
        return view('keranjang.index', compact('keranjang'));
    }

    // Menambahkan item ke keranjang
    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|exists:produk,id',
            'id_user' => 'required|exists:users,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        Keranjang::create($request->all());

        return redirect()->route('keranjang.index')->with('success', 'Item telah ditambahkan ke keranjang.');
    }

    // Menghapus item dari keranjang
    public function destroy($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect()->route('keranjang.index')->with('success', 'Item telah dihapus dari keranjang.');
    }
}
