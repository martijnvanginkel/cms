<?php

namespace charmfarmer\Http\Controllers;

use Illuminate\Http\Request;
use charmfarmer\Post;

class PageController extends Controller
{
    public function index()
    {
      $posts = Post::orderBy('created_at', 'DESC')->get();

      return view('pages.index', compact('posts'));
    }

    public function contact()
    {
      return view('pages.contact');
    }

    public function post($id)
    {
      $post = Post::find($id);

      return view('pages.post', compact('post'));
    }
}
