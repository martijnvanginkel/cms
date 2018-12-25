@extends('layouts.cms')

@section('content')

  <h1 class="title">Create Post</h1>

  <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="field">
      <label class="label" for="title">Name</label>
      <div class="control">
        <input class="input" name="title" type="text" placeholder="Text input">
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Message</label>
      <div class="control">
        <textarea class="textarea" name="text" placeholder="Textarea"></textarea>
      </div>
    </div>

    <div class="field">
      <label for="filename" class="label">File</label>
      <div class="control">
        <input type="file" name="filename">
      </div>
    </div>

    <button type="submit" class="button">Submit</button>
  </form>

@endsection
