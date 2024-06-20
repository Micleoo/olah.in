@extends('layout.main')

@section('container')
    <section id="product-details" style="margin-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $product->foto_produk) }}" class="img-fluid" alt="{{ $product->nama_produk }}" style="border-radius: 15px;">
                </div>
                <div class="col-md-6">
                    <h1 style="font-weight: 600; font-size: 28px;">{{ $product->nama_produk }}</h1>
                    <p class="mt-4">{{ $product->deskripsi }}</p>
                    <h2 style="color: #05c9ac;">{{ $product->harga }}</h2>
                    <p><strong>Jumlah Terjual:</strong> {{ $product->jumlah_terjual }}</p>
                    <a href="{{ route('keranjang.store', ['id_produk' => $product->id]) }}" class="btn btn-primary">
                        <i class="bi bi-cart"></i> Add to Cart
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
