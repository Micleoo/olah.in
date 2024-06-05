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
                                            <h6 class="mb-0 text-muted">3 barang</h6>
                                        </div>
                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{ asset('images/Celengan-botol-plastik.webp') }}"
                                                    class="img-fluid rounded-3" alt="Celengan Botol Plastik">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-black mb-0">Celengan-botol-plastik</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm" />

                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Rp5.000</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{ asset('images/Pot-botol-plastik.webp') }}"
                                                    class="img-fluid rounded-3" alt="Pot Botol Plastik">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-black mb-0">Pot Botol Plastik</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm" />

                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Rp6.000</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{ asset('images/Tas-plastik-bekas.jpg') }}"
                                                    class="img-fluid rounded-3" alt="Tas Plastik bekas">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-black mb-0">Tas Plastik bekas</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm" />

                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Rp10.000</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="/Marketplace" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Kembali ke
                                                    Marketplace</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Ringkasan</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">3 barang</h5>
                                            <h5>Rp21.000</h5>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Pengiriman</h5>

                                        <div class="mb-4 pb-2">
                                            <div class="custom-radio">
                                                <input type="radio" id="pengiriman-biasa" name="pengiriman"
                                                    value="1">
                                                <label for="pengiriman-biasa">Pengiriman biasa Rp5.000</label>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" id="pengiriman-cepat" name="pengiriman"
                                                    value="2">
                                                <label for="pengiriman-cepat">Pengiriman cepat Rp10.000</label>
                                            </div>
                                        </div>

                                        <style>
                                            .custom-radio {
                                                position: relative;
                                                margin-bottom: 10px;
                                            }

                                            .custom-radio input[type="radio"] {
                                                position: absolute;
                                                opacity: 0;
                                                cursor: pointer;
                                            }

                                            .custom-radio label {
                                                cursor: pointer;
                                                padding-left: 30px;
                                                position: relative;
                                                display: inline-block;
                                            }

                                            .custom-radio label::before {
                                                content: '';
                                                position: absolute;
                                                left: 0;
                                                top: 50%;
                                                transform: translateY(-50%);
                                                width: 20px;
                                                height: 20px;
                                                border-radius: 50%;
                                                border: 2px solid #ccc;
                                                background-color: #fff;
                                            }

                                            .custom-radio input[type="radio"]:checked+label::before {
                                                border-color: #78c2ad;
                                                background-color: #78c2ad;
                                            }

                                            .custom-radio input[type="radio"]:checked+label {
                                                color: #78c2ad;
                                            }
                                        </style>



                                        <h5 class="text-uppercase mb-3">Kode Promo</h5>

                                        <div class="mb-5">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Masukan kode</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total harga</h5>
                                            <h5>Rp26.000</h5>
                                        </div>

                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-dark btn-block btn-lg btn-custom"
                                            data-mdb-ripple-color="dark">Check out</button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
