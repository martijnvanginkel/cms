@extends('layouts.main')

@section('content')

<section class="post-section">

  <div class="image-banner">
    <img src="{{ asset('images/'.$post->filename) }}" alt=""/>
  </div>

  <time>{{ date('d/m/Y', strtotime($post->created_at)) }}</time>

  <article>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->text }}</p>
  </article>

  <div class="link-wrapper">
    <a class="link-button" href="{{ $post->link }}" target="_blank"><i class="fab fa-instagram"></i> Instagram Post</a>
  </div>

    <p>Written by <a href="https://www.linkedin.com/in/martijn-van-ginkel-2034a3150/">Martijn van Ginkel</a></p>


</section>


@endsection
