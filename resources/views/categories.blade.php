@extends('layouts.main')

@section('container')

<div class="container-xxl bg-primary hero-header">
    <h1 class="mb-5 text-center">Pengumuman</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category= {{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="/img/{{ $category->slug }}.png" class="card-img img-fluid max-width: 100%;height: auto;" alt="{{ $category->slug }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(211, 211, 211, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
