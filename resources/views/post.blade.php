@extends('layouts.main')
@section('container')

<div class="container-xxl bg-primary hero-header">
            <h1 class="mb-3 text-center">{{ $post->title }}</h1>
</div>
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
     
            @if($post->image)
                <div style="max-height: 350px;overflow:hidden;">
                    <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="{{ asset('/img/noimage.png') }}" alt="{{ $post->category->name }}" class="img-fluid rounded mx-auto d-block">
            @endif
            <article>

                {!! $post->body !!}
    
            </article class="my-3 fs-5">

        <a href="/posts" class="mt-3 btn btn-dark rounded-pill"> Back To Post</a>
        </div>
    </div>
</div>



@endsection