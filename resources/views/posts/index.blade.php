@extends('layout')

@section('content')
    <h1 class="text-center">Posts</h1>
    <?php /*<a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create New Post</a>*/?>
    <ul class="list-group">
        @foreach ($posts as $post)
            <li class="list-group-item">
                <h5>{{ $post->title }}</h5>
                <p>{{ $post->content }}</p>
                <?php /*<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>*/?>
            </li>
        @endforeach
    </ul>
@endsection
