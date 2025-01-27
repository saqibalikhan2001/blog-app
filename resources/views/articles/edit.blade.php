@extends('layout')

@section('content')
    <h1 class="text-center">Edit Article</h1>
    <form action="{{ route('article.update') }}" method="POST">
        @csrf
        <input type="hidden" name="articleId" value="{{ $article->id }}">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" value="{{ $article->title }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Content</label>
            <textarea name="description" id="description" class="form-control">{{ $article->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
