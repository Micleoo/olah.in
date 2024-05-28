


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/fadd57a8f9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
</head>
<body>
@extends('layout.main')


@section('container')
<<<<<<< HEAD
    <h1> Market Place </h1>
@endsection
=======


<section id="All products" style="margin-top:50px">
    <div class="container">
    <div class="col-md-12 mb-4">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-auto">
              <h1 style="font-weight: 600; font-size: 28px;">Semua produk</h1>
            </div>
            <div class="col-auto">
              <a class="btn btn-primary" href="/Marketplace/uploadProduk" style="background-color: #053CC9;">Upload Produk</a>
            </div>
          </div>
          <hr style="border-top: 2px solid #737373; margin-bottom: 30px;">
        </div>
      </div>

      <div class="row">

        @foreach ($products as $product)
        <div class="col-md-4 col-sm-12 mb-5">
          <div class="card h-100"  style="border-radius: 30px;">
            <img src="{{ asset('storage/' . $product->foto_produk) }}" class="card-img-top" alt="{{ $product->nama_produk }}" style="height: 300px; object-fit: cover;">
            <div class="card-body">
        
              <h5 class="card-title">{{ \Illuminate\Support\Str::limit($product->nama_produk, 35) }}</h5>
              
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




</body>
</html>
>>>>>>> 369ada8fe3fab7a710abb1636403876bb16c6dfa
