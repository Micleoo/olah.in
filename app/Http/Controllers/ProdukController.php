<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Produk::all();

        $title = "Market Place";

        return View('Marketplace', ['title' => $title, 'products' => $products]);
    }


    public function showUploadProduct()
    {
        $title = "Upload Produk";
        return View('uploadProduct', ['title' => $title]);
    }

    public function show($id)
    {
        $product = Produk::findOrFail($id);
        return view('produk.show', compact('product'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required',
            'harga' => 'required',
            'foto_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'jumlah_terjual' => 'required',
        ]);

        if ($request->hasFile('foto_produk')) {
            $imageName = $request->file('foto_produk')->store('foto_produk', 'public');
        } else {
            $imageName = null;
        }

        $id = 1;

        // Buat produk baru
        $product = Produk::create([
            'nama_produk' => $request->input('nama_produk'),
            'foto_produk' => $imageName,
            'deskripsi' => $request->input('deskripsi_produk'),
            'harga' => $request->input('harga'),
            'jumlah_terjual' => $request->input('jumlah_terjual'),
            'user_id' => $id,
        ]);

        return redirect()->back()->with('message', 'Product successfully uploaded!');
    }
}
