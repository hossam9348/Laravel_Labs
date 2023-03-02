<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    function index()
    {
        $posts = Posts::paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }
    function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
    function update($id)
    {
        $post = Posts::find($id);
        return view('posts.update', compact('post'));
    }
    function edit($id, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);
        $post = Posts::find($id);
        $post->update($request->except(['_method', '_token']));
        return redirect()->route('post.index');
    }

    function create()
    {
        return view('posts.create');
    }
    function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        Posts::create(['title' => $request->title, 'user_id' => Auth::user()->id]);
        return redirect()->route('post.index');
    }
}

