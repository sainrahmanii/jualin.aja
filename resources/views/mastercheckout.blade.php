<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('assets/images/ic_globe.png') }}">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- auto reload -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- livewire -->
    @livewireStyles

    <!-- swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

  </head>
  <body>

    @include('includes.navcheckout')
    @yield('content')
    @include('includes.footer')

    <!-- livexire -->
    @livewireScripts
  </body>
</html>
