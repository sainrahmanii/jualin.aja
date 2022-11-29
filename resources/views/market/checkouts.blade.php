@extends('mastercheckout')
@section('title', 'Checkouts')

@section('content')

    <div class="lg:max-w-6xl max-w-sm mx-auto lg:mt-32 mt-24">
        <div class="grid lg:grid-cols-2 grid-cols-1">
            <div class="image-checkouts mx-auto block">
                <img src="{{ asset('assets/images/market.png') }}" alt="gambar-product" class=" lg:w-4/5 items-center">
            </div>

            <div class="p-10 mt-10 lg:mt-0 mb-10 rounded-xl border border-slate-200">
                <h1 class="text-center text-xl font-extrabold">Check Your Profile</h1>
                <div class="form pt-7">
                    <input type="text" class="w-full rounded-full border border-slate-200 h-10 pl-5 outline-primary"
                        placeholder="Nama Lengkap">
                    <input type="number" class="w-full rounded-full border border-slate-200 mt-5 h-10 pl-5 outline-primary"
                        placeholder="No WhatsApp">
                    <input type="text" class="w-full rounded-full border border-slate-200 mt-5 h-10 pl-5 outline-primary"
                        placeholder="Alamat">
                    <input type="number" class="w-full rounded-full border border-slate-200 mt-5 h-10 pl-5 outline-primary"
                        placeholder="No Rekening">
                    <input type="text" class="w-full rounded-full border border-slate-200 mt-5 h-10 pl-5 outline-primary"
                        placeholder="Nama Bank">
                </div>
                <a href=""><button
                        class="bg-primary text-white w-full h-10 rounded-full mt-10 hover:bg-green-600">CHECKOUT</button></a>
            </div>
        </div>
    </div>

@endsection
