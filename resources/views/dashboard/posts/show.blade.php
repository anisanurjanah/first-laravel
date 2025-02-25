@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success">
                    <i class="bi bi-arrow-left-circle"></i>
                    Back to all my posts
                </a>
                <a href="" class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i>
                    Edit
                </a>
                <a href="" class="btn btn-danger">
                    <i class="bi bi-x-circle"></i>
                    Delete
                </a>

                <div class="d-flex justify-content-center align-items-center mt-4" style="height: 400px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1417325384643-aac51acc9e5d" class="card-img-top w-100 h-auto" alt="{{ $post->category->name }}">
                </div>

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>

@endsection
