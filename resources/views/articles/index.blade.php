@extends('layout')

@section('content')
    <h1 class="text-center">Articles</h1>
    <?php /*<a href="{{ route('articles.create') }}" class="btn btn-success mb-3">Create New Article</a>*/?>
    <ul class="list-group">
        @foreach ($articles as $article)
            <li class="list-group-item">
                <h5>{{ $article->title }}</h5>
                <p>{{ $article->content }}</p>
                <?php /*<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>*/?>
            </li>
        @endforeach
    </ul>
@endsection
