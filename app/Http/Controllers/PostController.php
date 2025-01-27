<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function userPosts()
    {
        $posts = Post::where('added_by', Auth::user()->id)->get();
        return view('posts.userPosts', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->description,
            'added_by' => (Auth::user() != NULL) ? Auth::user()->id : 1,
            'enabled' => ($request->enabled == 0) ? false : true
        ]);
        return redirect()->route('user.posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $post = Post::where('id', $request->postId)->first();
        if($post){
            $post->update([
                'title' => $request->title,
                'content' => isset($request->description) ? $request->description : null,
                'enabled' => ($request->enabled == 0) ? false : true
            ]);
        }

        return redirect()->route('user.posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('user.posts');
    }
}
