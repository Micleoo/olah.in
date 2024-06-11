@extends('layout.main')
@section('container')
    <!--Main Navigation-->

    <!-- sidebar + content -->
    <section class="">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="col-lg-12">
                    <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                        <strong class="d-block py-2">7 Items found </strong>
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
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="{{ asset('images/pot-botol-plastik.webp') }}" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex flex-row">
                                        <h5 class="mb-1 me-1">Rp25.000</h5>
                                        <span class="text-danger"><s>Rp15.000</s></span>
                                    </div>
                                    <p class="card-text">Pot Terbuat dari Botol Plastik bekas</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="{{ asset('images/Tas-plastik-bekas.jpg') }}" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Rp 5.000</h5>
                                    <p class="card-text">Tas daur ulang dari Plastik Bekas</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="{{ asset('images/Keranjang-dari-limbah-koran.jpg') }}" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Rp15.000</h5>
                                    <p class="card-text">Kerajinan Tangan dari Limbah Koran bekas menjadi Keranjang</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="{{ asset('images/Celengan-botol-plastik.webp') }}" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Rp15.000</h5>
                                    <p class="card-text">Celengan Terbuat dari Botol Plastik</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="{{ asset('images/pot-bunga.webp') }}" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Rp20.000</h5>
                                    <p class="card-text">Pot bunga daur ulang</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="{{ asset('images/Tempat-Koran-dari-Limbah-bambu.jpg') }}" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex flex-row">
                                        <h5 class="mb-1 me-1">Rp25.000</h5>
                                        <span class="text-danger"><s>Rp30.000</s></span>
                                    </div>
                                    <p class="card-text">tempat Penyimpanan Serba guna terbuat dari limbah bambu</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="{{ asset('images/Hiasan-gantung-plastik.jpg') }}" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex flex-row">
                                        <h5 class="mb-1 me-1">Rp5.000</h5>
                                    </div>
                                    <p class="card-text">Hiasan Gantung Olahan dari Limah Plastik</p>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i
                                                class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                    </div>
                                </div>
                            </div>
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
    <!-- sidebar + content -->


    {{-- Upload barang --}}
    <section id="All products" style="margin-top:50px">
        <div class="container">
            <div class="col-md-12 mb-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h1 style="font-weight: 600; font-size: 28px;">Semua produk</h1>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-primary" href="/Marketplace/uploadProduk"
                                style="background-color: #053CC9;">Upload Produk</a>
                        </div>
                    </div>
                    <hr style="border-top: 2px solid #737373; margin-bottom: 30px;">
                </div>

            </div>

            <div class="row">

                @foreach ($products as $product)
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card h-100" style="border-radius: 30px;">
                            <img src="{{ asset('storage/' . $product->foto_produk) }}" class="card-img-top"
                                alt="{{ $product->nama_produk }}" style="height: 300px; object-fit: cover;">
                            <div class="card-body">

                                <h5 class="card-title">{{ \Illuminate\Support\Str::limit($product->nama_produk, 35) }}
                                </h5>

                                <p class="card-text">{{ \Illuminate\Support\Str::limit($product->deskripsi, 70) }}</p>
                                <div style="display: flex; align-items: center;margin-bottom:20px">
                                    <p style="color:#737373;margin-bottom:0">{{ $product->harga }}</p>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="#">Lihat Detail</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
