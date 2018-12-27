@extends('layouts.cms')

@section('content')

  <h1 class="title">Create Post</h1>

  <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="field">
      <label class="label" for="title">Title *</label>
      <div class="control">
        <input class="input" name="title" type="text" placeholder="Title here" required>
      </div>
    </div>

    <div class="field">
      <label for="text"class="label">Text *</label>
      <div class="control">
        <textarea class="textarea" name="text" placeholder="Text here" required></textarea>
      </div>
    </div>

    <div class="field">
      <label class="label" for="link">Link (Instagram)</label>
      <div class="control">
        <input class="input" name="link" type="text" placeholder="https://www.instagram.com/ ...">
      </div>
    </div>

    <div class="field">
      <label for="filename" class="label">File (640x360) *</label>
      <div class="control">
        <input type="file" name="filename" required>
      </div>
    </div>


    <button type="submit" class="button">Submit</button>
  </form>

@endsection
