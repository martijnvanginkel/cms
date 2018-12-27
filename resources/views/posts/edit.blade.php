@extends('layouts.cms')

@section('content')

  <h1 class="title">Edit Post</h1>

  <form method="post" action="{{ route('posts.update', $post->id)}}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input" name="title" type="text" placeholder="Title here" value="{{ $post->title }}">
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Text</label>
      <div class="control">
        <textarea class="textarea" name="text" placeholder="Text here">{{ $post->text }}</textarea>
      </div>
    </div>

    <div class="field">
      <label class="label" for="link">Link</label>
      <div class="control">
        <input class="input" name="link" type="text" placeholder="https://www.instagram.com/ ..." value="{{ $post->link }}">
      </div>
    </div>

    <div class="field">
      <label for="filename" class="label">File</label>
      <div class="control">
        <input type="file" name="filename" value="{{ $post->filename }}">
      </div>
    </div>

    <button type="submit" class="button">Submit</button>
  </form>

@endsection
