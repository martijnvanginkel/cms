<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Website</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

  <h1 class="main-title">HELE GROTE TITEL</h1>

  <nav class="main-menu">
    <ul>
      <li><a href="{{ route('pages.index') }}">Blog</a></li>
      <li><a href="{{ route('pages.contact') }}">Contact</a></li>
    </ul>
  </nav>

  <main>
    @yield('content')
  </main>

  <footer>
    <a class="footer-link" href="https://www.instagram.com/martijn_vanginkel/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a class="footer-link" href="mailto:martijnvanginkel2@gmail.com?Subject=Question" target="_top"><i class="far fa-envelope"></i></a>
  </footer>

</body>

</html>
