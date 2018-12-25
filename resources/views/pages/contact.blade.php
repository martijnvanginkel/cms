@extends('layouts.main')

@section('content')

<form class="contact-form" method="post" action="{{ route('questions.store') }}" enctype="multipart/form-data">
  @csrf

  <label class="label" for="name"></label>
  <input class="input" name="name" type="text" placeholder="Name" required>

  <label class="label" for="email"></label>
  <input class="input" name="email" type="text" placeholder="E-mail (so I can contact you back)" required>

  <label for="message" class="label"></label>
  <textarea class="textarea" name="message" placeholder="Your message to me" required></textarea>

  <button type="submit">Submit</button>

</form>

@endsection
