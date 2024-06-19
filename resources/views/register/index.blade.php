@extends('layout.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Sign up</h1>
      <form action="/Sign-up" method="post"> 
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="Username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
    

        <button class="btn btn-primary mt-3 w-100 py-2" type="submit">Sign up</button>
      </form>
      <small class="d-block text-center mt-3">Sudah punya akun? <a href="/Login" class="text-decoration-none" style="color: #049f88;">login</a></small>
    </main>

  </div>
</div>


@endsection