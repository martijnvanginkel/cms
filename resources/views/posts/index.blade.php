@extends('layouts.cms')

@section('content')

<h1 class="title">Posts</h1>

<table class="table is-bordered is-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Text</th>
      <th>File</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
      <tr>
        <th>{{ $post->id }}</th>
        <td>{{ substr($post->title, 0, 15) }}</td>
        <td>{{ substr($post->text, 0, 10) }} ... </td>
        <td>{{ substr($post->filename, -10)}}</td>
        <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
        <td><a href="{{ route('posts.show', $post->id) }}" class="button is-link is-small">Show</a></td>
        <td><a href="{{ route('posts.edit', $post->id) }}" class="button is-primary is-small">Edit</a></td>
        <td>
          <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('Are you sure?')" class="button is-danger is-small">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
