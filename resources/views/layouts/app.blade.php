<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>@yield('title') - Tracer Study IT Del</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome untuk ikon -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

  @include('components.navbar')

  @yield('content')

  @include('components.footer')

</body>

</html>