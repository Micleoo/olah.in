@extends('layout.main')

@section('container')
    <section class="h-100 h-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Keranjang</h1>
                                            <h6 class="mb-0 text-muted">{{ count($produk ?? []) }} barang</h6>
                                        </div>
                                        <hr class="my-4">

                                        @foreach ($produk ?? [] as $product)
                                            <form action="{{ route('keranjang.store') }}" method="post">
                                                @csrf
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="{{ asset($product->image) }}" class="img-fluid rounded-3"
                                                            alt="{{ $product->name }}">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-black mb-0">{{ $product->name }}</h6>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <button type="button" class="btn btn-link px-2"
                                                            onclick="decrementQuantity(this)">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <input id="quantity" min="0" name="quantity" value="1"
                                                            type="number" class="form-control form-control-sm" />
                                                        <button type="button" class="btn btn-link px-2"
                                                            onclick="incrementQuantity(this)">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">{{ $product->price }}</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr class="my-4">
                                        @endforeach

                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="/Marketplace" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Kembali ke
                                                    Marketplace</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1 text-black">Ringkasan</h3>
                                        <hr class="my-4">

                                        <!-- Ringkasan belanjaan dan lainnya -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/Keranjang.js') }}"></script>
@endsection
