@extends('layout.main')

@section('container')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class=" text-custom">{{ $kursus['title'] }}</h1>
                    <img src="{{ asset('images/' . $kursus['image']) }}" alt="{{ $kursus['title'] }}" class="img-fluid mb-4">
                    <p class="lead text-muted">{{ $kursus['content'] }}</p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali ke Daftar Kursus</a>
                </div>
            </div>
        </section>
    </main>
@endsection
