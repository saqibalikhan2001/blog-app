<x-app-layout>
    <x-slot name="header">
        Posts
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create New Post</a>
                    <ul class="list-group">
                        @foreach ($posts as $post)
                            <li class="list-group-item">
                                <h5>{{ $post->title }}</h5>
                                <p>{{ $post->content }}</p>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
