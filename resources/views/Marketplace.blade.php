@extends('layout.main')

@section('container')
    <section id="All products" style="margin-top:50px">
        <div class="container">
            <div class="col-md-12 mb-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h1 style="font-weight: 600; font-size: 28px;">Semua produk</h1>
                        </div>
                        <div class="col-auto">
                            @auth
                                <a class="btn btn-primary" href="/Marketplace/uploadProduk"
                                    style="background-color: #05c9ac;">Upload Produk</a>
                            @else
                                <a class="btn btn-primary" href="{{ route('login') }}"
                                    style="background-color: #05c9ac;">Upload Produk</a>
                            @endauth
                        </div>
                    </div>
                    <hr style="border-top: 2px solid #737373; margin-bottom: 30px;">
                </div>
            </div>
            <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                <strong class="d-block py-2">{{ $products->count() }} Items found </strong>
                <div class="ms-auto">
                    <select class="form-select d-inline-block w-auto border pt-1">
                        <option value="0">Best match</option>
                        <option value="1">Recommended</option>
                        <option value="2">High rated</option>
                        <option value="3">Randomly</option>
                    </select>
                    <div class="btn-group shadow-0 border">
                        <a href="#" class="btn btn-light" title="List view">
                            <i class="fa fa-bars fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-light active" title="Grid view">
                            <i class="fa fa-th fa-lg"></i>
                        </a>
                    </div>
                </div>
            </header>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card h-100" style="border-radius: 30px;">
                            <img src="{{ asset('storage/' . $product->foto_produk) }}" class="card-img-top"
                                alt="{{ $product->nama_produk }}" style="height: 300px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ \Illuminate\Support\Str::limit($product->nama_produk, 35) }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($product->deskripsi, 70) }}</p>
                                <div style="display: flex; align-items: center;margin-bottom:20px">
                                    <p style="color:#737373;margin-bottom:0">{{ $product->harga }}</p>
                                </div>
                                @if (auth()->check())
                                    <!-- Jika pengguna telah login, tampilkan form add to cart -->
                                    <form action="{{ route('keranjang.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id_produk" value="{{ $product->id }}">
                                        <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="jumlah" value="1">
                                        <button type="submit" class="btn btn-primary shadow-0 me-1">
                                            <i class="bi bi-cart"></i> Add to Cart
                                        </button>
                                    </form>
                                @else
                                    <!-- Jika pengguna belum login, tampilkan tombol untuk login -->
                                    <a href="{{ route('login') }}" class="btn btn-primary shadow-0 me-1">
                                        <i class="bi bi-cart"></i> Add to Cart
                                    </a>
                                @endif

                                <a class="btn btn-primary" href="{{ route('produk.show', $product->id) }}">Lihat Detail</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Card decks go here -->
                    </div>

                    <hr />

                    <!-- Pagination -->
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
@endsection
