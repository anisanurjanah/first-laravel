@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By: Anisa Nurjanah in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
    {!! $post->body !!}

    <a href="/posts">Back to posts</a>
@endsection
