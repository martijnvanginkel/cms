<?php

namespace charmfarmer\Http\Controllers;

use Illuminate\Http\Request;
use charmfarmer\Post;

class PageController extends Controller
{
    public function index()
    {
      $posts = Post::all();

      return view('pages.index', compact('posts'));
    }

    public function contact()
    {
      return view('pages.contact');
    }
}
