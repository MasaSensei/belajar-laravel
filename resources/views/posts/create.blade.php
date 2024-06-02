@extends('layouts.app')

@section('title', 'Buat Postingan Baru')

@section('content')
    <h1 class="container">Buat Postingan Baru</h1>
    <form method="post" action="{{ route('posts.store') }}" class="form-control container">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
