@extends('mastermarket')
@section('title', 'Laptop Macbook')

@section('content')
    <div class="description lg:max-w-6xl max-w-sm mx-auto lg:mt-32 mt-24">
        <div class="grid p-6 lg:p-0 grid-cols-1 lg:grid-cols-4">

            <!-- foto product -->
            <div class="block col-span-3">
                <div class="image-active">
                    <img src="https://9to5mac.com/wp-content/uploads/sites/6/2021/10/MacBook-Pro-2021.jpg?quality=82&strip=all&w=1000"
                        alt="image-product" class="rounded-lg lg:h-128 w-full">
                </div>
                <div class="grid gap-1 grid-cols-3 lg:grid-cols-5 pt-7 rounded-sm overflow-auto">
                    <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                        alt=""
                        class="mx-auto max-h-16 h-16 rounded-sm border border-1 hover:border-primary hover:cursor-pointer">
                    <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                        alt=""
                        class="mx-auto max-h-16 h-16 rounded-sm border border-1 hover:border-primary hover:cursor-pointer">
                    <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                        alt=""
                        class="mx-auto max-h-16 h-16 rounded-sm border border-1 hover:border-primary hover:cursor-pointer">
                    <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                        alt=""
                        class="mx-auto max-h-16 h-16 rounded-sm border border-1 hover:border-primary hover:cursor-pointer">
                    <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png"
                        alt=""
                        class="mx-auto max-h-16 h-16 rounded-sm border border-1 hover:border-primary hover:cursor-pointer">
                </div>
            </div>

            <!-- product description -->
            <div class="lg:w-[18rem] lg:bg-transparent bg-base-100 lg:pl-7 pt-7 lg:pt-0">
                <h2 class="lg:text-2xl text-lg font-bold">Laptop Macbook Pro M2 RAM 16 GB SSD 1 TB</h2>
                <marquee scrollamount="300" scrolldelay="5000" loop="100">
                    <div class="pt-5 lg:text-5xl text-2xl font-bold text-primary">Rp 15.000.000</div>
                </marquee>
                <div class="">
                    <a href=""><button
                            class="px-8 py-2 rounded-full mt-4 border border-primary w-full font-bold">Beli
                            Langsung</button></a>
                    <a href="{{ route('market.create') }}"><button
                            class="px-8 py-2 rounded-full mt-4 font-bold bg-primary w-full hover:text-white hover:bg-emerald-500">Beli
                            Via Rekber</button></a>
                </div>
            </div>
        </div>

        <div class="grid gap-3 lg:p-0 grid-cols-1 lg:grid-cols-4">
            <div class="col-span-3">
                <div class="mt-5">
                    <hr class="bg-slate-200">
                    <h2 class="text-2xl text-primary py-2 text-center font-bold">Deskripsi</h2>
                    <hr class="bg-slate-200">
                </div>
                <div class="">
                    <div class="pt-2">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th>Kondisi</th>
                                    <th>Berat Satuan</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td class="text-slate-400">Baru</td>
                                    <td class="text-slate-400">250 g</td>
                                    <td class="text-primary font-extrabold"><a href="#">Elektronik</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="bg-slate-200">
                    <p class="pt-2">
                        {!! $desc !!}
                    </p>
                </div>
            </div>
        </div>


    </div>
@endsection
