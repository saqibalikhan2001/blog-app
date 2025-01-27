@extends('layout')

@section('content')
    <h1 class="text-center">Edit Post</h1>
    <form action="{{ route('post.update') }}" method="POST">
        @csrf
        <input type="hidden" name="postId" value="{{ $post->id }}">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title"  value="{{ $post->title }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Content</label>
            <textarea name="description" id="description" class="form-control">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
@endsection
