<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index()
    {
        $posts = Posts::get();
        return view('posts.index', ['posts' => $posts]);
    }

    function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }
    function destroy($id)
    {
        // Product::where('id',$id)->delete();
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
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'category_id' => 'required',
        //     'quantity' => 'required',
        // ]);

        Posts::create($request->all());
        return redirect()->route('post.index');
    }
}

