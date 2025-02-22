@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark">
                            <div class="d-flex justify-content-center align-items-center" style="height: 300px; overflow: hidden;">
                                <img src="https://images.unsplash.com/photo-1417325384643-aac51acc9e5d" class="card-img w-100 h-auto" alt="{{ $category->name }}">
                            </div>
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center text-white flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
