@extends('layouts.main')

@section('content')

<section class="post-section">

    <a class="image-banner" href="{{ $post->link }}" target="_blank">
      <img src="{{ asset('images/'.$post->filename) }}" alt=""/>
    </a>
    <div class="post-wrapper">

      <time>{{ date('d/m/Y', strtotime($post->created_at)) }}</time>

      <article class="post-text">
        <h1>{{ $post->title }}</h1>
        <p>{!! nl2br(e($post->text)) !!}</p>
      </article>


        <div class="link-wrapper">
          <a class="link-button" href="{{ $post->link }}" target="_blank"><i class="fab fa-instagram"></i> Instagram Post</a>
        </div>

        <p class="written-by">Written by <a href="https://www.linkedin.com/in/martijn-van-ginkel-2034a3150/" target="_blank">Martijn van Ginkel</a></p>

    </div>
</section>


@endsection
