@extends('mastercheckout')

@section('title', 'Profil')

@section('content')

    <div class="lg:max-w-lg w-full px-6 lg:px-0 mx-auto lg:mt-32 mt-24">
        <img src="{{ Auth::user()->avatar }}" alt="" class="w-32 mx-auto rounded-full">
        <h2 class="text-lg text-center mt-5">Selamat {{ $salam }}, <span class="font-bold">{{ Auth::user()->name }}</span></h2>
        <h1 class="text-center text-lg mb-5">Update Profil Kamu Sekarang!</h1>
        <div class="">
            <div class="rounded-lg px-5 py-5 drop-shadow-2xl bg-base-100 hover:shadow-xl">
                <label class="label">
                    <span class="label-text">Nama Lengkap</span>
                </label>
                <input type="text" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}"
                    class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" />
                <label class="relative block">
                    <span class="label-text">Nomor WhatsApp</span>
                    <span class="flex absolute pt-2.5 font-bold pl-5">
                        +62
                    </span>
                    <input type="number" placeholder="Nomor WhatsApp"
                        class="w-full border-2 outline-none border-slate-300 py-2 pl-14 pr-5 rounded-full" min="10000" />
                </label>
                <label class="label">
                    <span class="label-text">Alamat</span>
                </label>
                <input type="text" placeholder="Alamat"
                    class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" min="75" />
                <label class="label">
                    <span class="label-text">Nama Bank</span>
                </label>
                <input type="text" placeholder="Nama Bank"
                    class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" min="75" />
                <label class="label">
                    <span class="label-text">Nomor Rekening</span>
                </label>
                <input type="number" placeholder="Nomor Rekening"
                    class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" min="75" />
                <label class="label">
                    <span class="label-text">Foto Profil</span>
                </label>
                <input type="file"
                    class="block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-primary file:text-emerald-900
            hover:file:bg-emerald-500 file:cursor-pointer
            " />
                <button
                    class="w-full text-white font-bold py-2 bg-primary hover:bg-emerald-500 rounded-full my-3">UPDATE</button>
            </div>
        </div>
    </div>

@endsection
