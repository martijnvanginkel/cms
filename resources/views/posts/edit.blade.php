@extends('layouts.cms')

@section('content')

  <h1 class="title">Edit Post</h1>

  <form method="post" action="{{ route('posts.update', $post->id)}}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="field">
      <label class="label" for="title">Name</label>
      <div class="control">
        <input class="input" name="title" type="text" value="{{ $post->title }}">
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Message</label>
      <div class="control">
        <textarea class="textarea" name="text" placeholder="Textarea">{{ $post->text }}</textarea>
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
