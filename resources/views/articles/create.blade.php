@extends('layout')

@section('content')
    <h1 class="text-center">Create Article</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Content</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Article</button>
    </form>
@endsection
