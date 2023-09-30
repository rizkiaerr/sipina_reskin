@extends('layouts.main')

@section('container')

<div class="container-xxl bg-primary hero-header">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-dark" style="border-radius: 1rem; background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
          <div class="card-body p-5 text-center">
            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <main class="form-signin">
              <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
              <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                  <label for="email">Email address</label>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-info rounded-pill mt-3" type="submit">Login</button>
              </form>
              <small class="d-block text-center mt-3">Belum terdaftar? Silahkan hubungi Admin
                {{-- <a href="/register">Register Now!</a> --}}
              </small>
            </main>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
