<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - Jualinaja</title>
    <link rel="icon" href="{{ asset('assets/images/ic_globe.png') }}">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- auto reload -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

  </head>
  <body>

      <div class="bg-secondary h-screen">
        <img src="{{ asset('assets/images/bumi1.png') }}" alt="earth" class="fixed lg:w-56 w-40 -top-12 -left-16 lg:-left-24 animate-spin-slow">
        <div class="socialite">
          <div class="text-center lg:pt-56 pt-36">
              <a href="{{ route('beranda.utama') }}">
                <img src="{{ asset('assets/images/logo-jualin.aja-white.png') }}" alt="logo" class="lg:w-80 w-56 mb-7 flex mx-auto">
              </a>
              <div class="flex justify-center">
                <a href="{{ route('user.auth.login') }}">
                  <button class="py-2 lg:py-3 px-12 rounded-full bg-primary text-black font-bold flex items-center">
                    <img src="{{ asset('assets/images/google.svg') }}" alt="google" class="w-7 mr-2">
                    SIGN IN WITH GOOGLE
                  </button>
                </a>
              </div>
            </div>
          </div>
          <img src="{{ asset('assets/images/bumi1.png') }}" alt="earth" class="fixed lg:w-56 w-40 -bottom-16 -right-16 bg-center animate-spin-slow">
      </div>
    </body>
</html>