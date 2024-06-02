@extends('layouts.app')

@section('title', 'Edit Postingan')

@section('content')
    <h1 class="container">Edit Postingan</h1>
    <form method="post" action="{{ route('posts.update', $post->id) }}" class="form-control container">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title"
                value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <form method="post" action="{{ route('posts.destroy', $post->id) }}" class="container">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
