@extends('layouts.app')

@section('title', 'Blog Codepolitan')

@section('content')
    <h1>Blog Codepolitan
        <a href="{{ route('posts.create') }}" class="btn btn-success">+ Buat Postingan</a>
    </h1>
    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated at
                        {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    @endforeach
@endsection
