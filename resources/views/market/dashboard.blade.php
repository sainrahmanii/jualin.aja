@extends('mastercheckout')
@section('title', 'Dashboard')

@section('content')

<div class="lg:max-w-3xl w-full px-6 lg:px-0 mx-auto lg:mt-32 mt-24 mb-16">
    <h1 class="text-xl text-center">Selamat {{ $salam }}, <span class="font-semibold">{{Auth::user()->name}}</span></h1>
    <h1 class="text-xl text-center">Kelola Bisinismu Sekarang!</h1>
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-4 lg:pt-12 pt-7">
        <a href="{{ route('dashboard.produk.index') }}">
            <div class="products card bg-base-100 hover:shadow-xl pt-10 pb-10 drop-shadow-2xl">
                <img src="{{ asset('assets/images/Holding Box.png') }}" alt="image-manage-product" class="w-28 mx-auto">
                <h1 class="font-bold text-xl text-center">Produk</h1>
            </div>
        </a>
        <a href="{{ route('dashboard.pesanan.index') }}">
            <div class="products card bg-base-100 hover:shadow-xl pt-10 pb-10 drop-shadow-2xl">
                <img src="{{ asset('assets/images/orderan.png') }}" alt="image-manage-product" class="w-32 mx-auto">
                <h1 class="font-bold text-xl text-center">Pesanan</h1>
            </div>
        </a>
        <a href="{{ route('dashboard.belanjaan.index') }}">
            <div class="products card bg-base-100 hover:shadow-xl pt-10 pb-10 drop-shadow-2xl">
                <img src="{{ asset('assets/images/Buying.png') }}" alt="image-manage-product" class="w-28 mx-auto">
                <h1 class="font-bold text-xl text-center">Belanjaan</h1>
            </div>
        </a>
        <a href="{{ route('dashboard.profil.index') }}">
            <div class="products card bg-base-100 hover:shadow-xl pt-10 pb-10 drop-shadow-2xl">
                <img src="{{ asset('assets/images/Customer.png') }}" alt="image-manage-product" class="w-28 mx-auto">
                <h1 class="font-bold text-xl text-center">Profil</h1>
            </div>
        </a>

    </div>
</div>

@endsection
