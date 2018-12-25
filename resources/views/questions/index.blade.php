@extends('layouts.cms')

@section('content')

<h1 class="title">Questions</h1>

<table class="table is-bordered is-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Question</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($questions as $question)
      <tr>
        <th>{{ $question->id }}</th>
        <td>{{ substr($question->name, 0, 15) }}</td>
        <td>{{ substr($question->email, 0, 15) }} </td>
        <td>{{ substr($question->message, 0, 15) }} </td>
        <td>{{ date('d/m/Y', strtotime($question->created_at)) }}</td>
        <td><a href="{{ route('questions.show', $question->id) }}" class="button is-link is-small">Show</a></td>
        <td>
          <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
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
