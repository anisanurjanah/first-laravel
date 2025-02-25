@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

                <div class="d-flex justify-content-center align-items-center" style="height: 400px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1417325384643-aac51acc9e5d" class="card-img-top w-100 h-auto" alt="{{ $post->category->name }}">
                </div>

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-4">Back to posts</a>
            </div>
        </div>
    </div>

@endsection
