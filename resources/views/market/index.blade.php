@extends('mastermarket')
@section('title', 'Jualinaja')

@section('content')
    <div class="lg:max-w-6xl w-full px-6 lg:px-0 mx-auto lg:mt-32 mt-24">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper rounded-box">
                <div class="swiper-slide">
                    <img class="object-cover w-full lg:h-96 h-44"
                        src="https://images.tokopedia.net/img/QBrNqa/2022/3/30/7fcd18e4-58bb-4833-bee9-db9ffa7b0ef7.jpg"
                        alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full lg:h-96 h-44"
                        src="https://ecs7.tokopedia.net/img/cache/730/kjjBfF/2021/8/18/ec18bff5-2636-47cf-b50f-966e23973d28.jpg"
                        alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full lg:h-96 h-44"
                        src="https://ecs7.tokopedia.net/img/cache/730/kjjBfF/2021/8/18/ec18bff5-2636-47cf-b50f-966e23973d28.jpg"
                        alt="image" />
                </div>
            </div>
        </div>
    </div>
    <h1 class="font-bold text-3xl text-center lg:text-left lg:pl-24 pt-16">Popular Products</h1>
    <div class="products-popular lg:max-w-6xl mx-auto pt-5 py-3">
        <div class="grid gap-1 p-6 lg:p-0 grid-cols-2 lg:grid-cols-6">

            <!-- card -->

            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://assets.promediateknologi.com/crop/0x0:0x0/0x0/photo/2022/11/21/2042925042.jpg"
                            alt="Shoes" class="h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500 rounde-full">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- end card -->
        </div>
    </div>
    <h1 class="font-bold text-3xl lg:pl-24 lg:text-left pt-6 text-center">Iklan</h1>
    <div class="lg:max-w-6xl mx-auto pt-5 py-3">
        <div class="grid gap-1 p-6 lg:p-0 grid-cols-2 lg:grid-cols-6">
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('market.index') }}">
                <div
                    class="card max-w-60 bg-base-100 border border-slate-200 shadow-xl hover:-translate-y-1 hover:scale-95 duration-500">
                    <figure class="">
                        <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                            alt="Shoes" class="rounded-t-xl h-full" />
                    </figure>
                    <div class="desc">
                        <p class="text-sm px-3 pt-4">Macbook pro M2 2022</p>
                        <div class="px-3 pt-3 pb-3 block">
                            <div class="address flex space-x-2 pt-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-bold text-sm">Kota Cirebon</p>
                            </div>
                            <div class="justify-center pt-2">
                                <button
                                    class="rounded-xl text-center text-lg font-bold bg-secondary text-white w-full py-1 text-primary text-bold">Rp
                                    15.000.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            // mousewheel: true,
            // keyboard: true,
        });
    </script>
@endsection
