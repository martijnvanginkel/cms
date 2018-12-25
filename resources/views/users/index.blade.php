@extends('layouts.cms')

@section('content')

<h1 class="title">Users</h1>

<table class="table is-bordered is-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Created_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <th>{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
