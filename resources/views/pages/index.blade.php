@extends('layouts.main')

@section('content')

<section class="article-section">

  @foreach ($posts as $key => $post)

    <article>
      <div class="article-wrapper">

        <a href="{{ route('pages.post', $post->id) }}">
          <img src="{{ asset('images/'.$post->filename) }}" alt=""/>
        </a>

        <div class="article-text">
          <h2><a href="{{ route('pages.post', $post->id) }}">{{ $post->title }}</a></h2>

          <div class="article-info">
            <time><span>{{ date('d/m/Y', strtotime($post->created_at)) }}</span></time>
            <a href="{{ route('pages.post', $post->id) }}" class="more-button">More</a>
          </div>
        </div>

      </div>
    </article>

  @endforeach

</section>

@endsection
