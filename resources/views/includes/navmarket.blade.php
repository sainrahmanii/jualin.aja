<nav class="bg-white shadow-lg fixed top-0 left-0 right-0 z-10">
    <div class="max-w-6xl mx-auto py-3">
        <div class="flex justify-between items-center">
            <!-- logo -->
            <button>
                <a href="/"><img src="{{ asset('assets/images/jualin.aja.png') }}" alt="logo" class="lg:w-64 w-40 pl-6 lg:pl-0"></a>
            </button>

            <!-- nav search -->
            <div class="md:flex">
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.50" class="w-6 h-6 stroke-slate-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
                    <input class="placeholder:text-slate-400 block bg-white lg:w-96 w-56 border border-slate-300 rounded-full py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-primary focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search"/>
                </label>
            </div>

            <!-- nav button -->
            <div class="md:flex space-x-4 hidden items-center">
            <div class="md:flex space-x-4 hidden items-center">
                @auth
                <h1>Halo, <b>{{Auth::user()->name}}</b></h1>
                    <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                        <button><img src="{{Auth::user()->avatar}}" alt="avatar" class="w-12 rounded-full"></button>
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="{{ route('dashboard.dashboard') }}">Dashboard</a></li>
                            <li>
                                {{-- <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Keluar
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </a> --}}
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('sign-in') }}"><button class="rounded-full border border-primary text-primary font-bold py-2 px-9">Masuk</button></a>
                    <a href="{{ route('sign-up') }}"><button class="rounded-full bg-primary hover:bg-third text-white py-2 px-9 font-bold hover:drop-shadow-xl">Daftar</button></a>
                @endauth
            </div>

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
        <a href="{{ route('sign-in') }}" class="block py-2 pl-32"><button class="border border-primary rounded-full font-bold py-2 px-20">Masuk</button></a>
        <a href="{{ route('sign-up') }}" class="block py-2 pl-32"><button class="rounded-full bg-primary text-white py-2 px-20 font-bold">Daftar</button></a>

        <!-- <div class="flex items-center justify-center">
            <a href="{{ route('dashboard.dashboard') }}" class="flex items-center">
                <img src="{{ asset('assets/images/sain.png') }}" alt="avatar" class="w-16 rounded-full pr-3">
                <h1>Halo, <b>Husain Rahmani</b></h1>
            </a>
        </div>
        <a href="{{ route('dashboard.dashboard') }}" class="flex justify-center mx-auto bg-primary rounded-full py-2 w-1/2 mt-3">Keluar</a> -->

    </div>

    <script>
        const btn = document.querySelector(".mobile-nav-button");
        const menu = document.querySelector(".mobile-nav");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>

</nav>
