@extends('layout.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if(session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
      <form action="/Login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>
    

        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Belum punya akun? <a href="/Sign-up" class="text-decoration-none" style="color: #049f88;">Daftar sekarang!</a></small>
    </main>

  </div>
</div>


@endsection