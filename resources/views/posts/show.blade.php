@extends('layouts.cms')

@section('content')

  <h1 class="title">Show Post</h1>

  <h2 class="subtitle">{{ $post->title }}</h2>

  <p>{{ $post->text }}</p>

@endsection
