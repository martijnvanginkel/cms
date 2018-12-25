@extends('layouts.cms')

@section('content')

  <h2 class="subtitle">{{ $question->name }}</h2>
  <h2>{{ $question->email }}</h2>

  <p>{{ $question->message }}</p>

  <h3>{{ $question->created_at }}</h3>

@endsection
