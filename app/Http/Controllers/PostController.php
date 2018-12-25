<?php

namespace charmfarmer\Http\Controllers;

use charmfarmer\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = new Post;

      if($request->hasfile('filename'))
       {
          $file = $request->file('filename');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/images/', $name);
          $post->filename = $name;
       }

      $post->title = $request->title;
      $post->text = $request->text;

      $post->save();

      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \charmfarmer\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \charmfarmer\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \charmfarmer\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

      $post->title = $request->title;
      $post->text = $request->text;
      $post->filename = $request->filename;
      $post->update();

      return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \charmfarmer\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();

      return redirect()->route('posts.index');
    }
}
