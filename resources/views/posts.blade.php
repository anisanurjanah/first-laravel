@extends('layouts.main')

@section('container')

    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count() )
        <div class="card mb-3">
            <div class="d-flex justify-content-center align-items-center" style="height: 400px; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1417325384643-aac51acc9e5d" class="card-img-top w-100 h-auto" alt="{{ $posts[0]->category->name }}">
            </div>
            <div class="card-body text-center">
              <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</h3>
              <p><small class="text-body-secondary">By: <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
              <p class="card-text">{{ $posts[0]->excerpt }}</p>

              <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 d-flex flex-column">
                        <div class="position-absolute bg-dark px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{$post->category->name }}</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="height: 200px; overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1417325384643-aac51acc9e5d" class="card-img-top w-100 h-auto" alt="{{ $post->category->name }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                            <p><small class="text-body-secondary">By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <div class="mt-auto"> <!-- Agar tombol tetap di bawah -->
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more..</a>
                            </div>
                            {{-- <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more..</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
