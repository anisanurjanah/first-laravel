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
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i>
                    Edit
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i> Delete</button>
                </form>

                <div class="d-flex justify-content-center align-items-center mt-4" style="height: 400px; overflow: hidden;">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid w-100 h-auto" alt="{{ $post->category->name }}">
                    @else
                        <img src="https://images.unsplash.com/photo-1417325384643-aac51acc9e5d" class="img-fluid w-100 h-auto" alt="{{ $post->category->name }}">
                    @endif
                </div>

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>

@endsection
