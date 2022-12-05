<nav class="bg-white shadow-lg fixed top-0 left-0 right-0 z-10">
    <div class="max-w-6xl mx-auto py-3">
        <div class="flex justify-between items-center">
            <!-- logo -->
            <button>
                <a href="/"><img src="{{ asset('assets/images/jualin.aja.png') }}" alt="logo" class="lg:w-64 w-40 pl-6 lg:pl-0"></a>
            </button>

            <!-- nav button -->
            <div class="md:flex space-x-4 hidden items-center">
                @auth
                <h1>Halo, <b>{{Auth::user()->name}}</b></h1>
                    <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                        <img src="{{ Auth::user()->avatar }}" alt="avatar" class="w-12 rounded-full cursor-pointer">
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="{{ route('dashboard.dashboard') }}">Dashboard</a></li>
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Keluar
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('sign-in') }}"><button class="rounded-full border border-primary text-primary font-bold py-2 px-9">Masuk</button></a>
                    <a href="{{ route('sign-up') }}"><button class="rounded-full bg-primary hover:bg-third text-white py-2 px-9 font-bold hover:drop-shadow-xl">Daftar</button></a>
                @endauth
            </div>

            <!-- button mobile -->
            <div class="mobile-nav-button md:hidden flex pr-6">
                <button class="items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <!-- mobile nav -->
    <div class="hidden mobile-nav justify-center pb-5">

        @auth
            <div class="flex items-center justify-center">
                <a href="{{ route('dashboard.dashboard') }}" class="flex items-center">
                    <img src="{{ Auth::user()->avatar }}" alt="avatar" class="w-16 rounded-full pr-3">
                    <h1>Halo, <b>{{ Auth::user()->name }}</b></h1>
                </a>
            </div>
            <a href="#" class="flex justify-center mx-auto bg-primary rounded-full py-2 w-1/2 mt-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Keluar
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </a>
        @else
            <a href="{{ route('sign-in') }}" class="block py-2 pl-32"><button class="border border-primary rounded-full py-2 px-20 font-bold">Masuk</button></a>
            <a href="{{ route('sign-up') }}" class="block py-2 pl-32"><button class="rounded-full bg-primary text-white py-2 px-20 font-bold">Daftar</button></a>
        @endauth

    </div>

    <script>
        const btn = document.querySelector(".mobile-nav-button");
        const menu = document.querySelector(".mobile-nav");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>

</nav>
