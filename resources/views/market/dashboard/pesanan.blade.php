@extends('mastercheckout')

@section('title', 'Pesanan')

@section('content')

<div class="lg:max-w-6xl w-full px-6 lg:px-0 mx-auto lg:mt-32 mt-24">
  <h2 class="text-lg text-center">Selamat {{ $salam }}, <span class="font-bold">{{ Auth::user()->name }}</span></h2>
  <h1 class="text-center text-xl mb-5">Kirim Pesanan Kamu Sekarang!</h1>
  <div class="rounded-lg drop-shadow-2xl bg-base-100 pb-7 pt-5 px-12 hover:shadow-xl">
    <div class="overflow-auto">
      <table class="w-full">

        <!-- head -->
        <thead class="border-primary border-b-2">
          <tr>
            <th class="p-3 whitespace-nowrap tracking-wide">No</th>
            <th class="p-3 whitespace-nowrap tracking-wide">Nama Produk</th>
            <th class="p-3 whitespace-nowrap tracking-wide">Harga Produk</th>
            <th class="p-3 whitespace-nowrap tracking-wide">Nama Penerima</th>
            <th class="p-3 whitespace-nowrap tracking-wide">Gambar Produk</th>
            <th class="p-3 whitespace-nowrap tracking-wide">Status</th>
            <th class="p-3 whitespace-nowrap tracking-wide">Aksi</th>
          </tr>
        </thead>
        <!-- tbody -->
        <tbody class="divide-y">
          <tr class="hover:bg-base-200 text-center">
            <td class="p-3 whitespace-nowrap">1</td>
            <td class="p-3 whitespace-nowrap">Mie Instan</td>
            <td class="p-3 whitespace-nowrap">Rp 25.000</td>
            <td class="p-3 whitespace-nowrap">El-Rahmani</td>
            <td class="p-3 whitespace-nowrap"><img src="{{ asset('assets/images/market.png') }}" alt="gambar produk" class="w-32 mx-auto"></td>
            <td class="p-3 whitespace-nowrap">
              <!-- <span class="bg-cyan-500 inline-block my-auto items-center justify-center px-3 py-1 text-md leading-none font-bold text-white rounded-full">ON DELIVERY</span> -->
              <span class="bg-amber-400 inline-block my-auto items-center justify-center px-3 py-1 text-md leading-none font-bold text-white rounded-full">PENDING</span>
              <!-- <span class="bg-emerald-500 inline-block my-auto items-center justify-center px-3 py-1 text-md leading-none font-bold text-white rounded-full">SUCCESS</span> -->
              <!-- <span class="bg-red-500 inline-block my-auto items-center justify-center px-3 py-1 text-md leading-none font-bold text-white rounded-full">FAILED</span> -->
            </td>
            <td class="p-3 whitespace-nowrap justify-center">
              <label for="show-modal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 cursor-pointer bg-teal-900 hover:bg-teal-500 px-2 py-2 transition delay-300 rounded-lg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </label>
              <label for="edit-modal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 bg-indigo-900 hover:bg-indigo-500 px-2 py-2 transition delay-300 rounded-lg cursor-pointer mt-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
              </label>
              <!-- <label for="delete-modal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 bg-red-900 hover:bg-red-500 px-2 py-2 transition delay-300 rounded-lg cursor-pointer">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
              </label> -->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

    <!-- modal show -->
    <input type="checkbox" id="show-modal" class="modal-toggle" />
    <div class="modal">
      <div class="modal-box">
        <label for="show-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <div class="w-full">
          <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP854/mbp14-silver2.png" alt="image-produk" class="w-28 max-w-28 mx-auto">
            <div class="flex justify-between mt-5">
              <h3 class="font-bold text-sm">Nama Produk :</h3>
              <h1 class="text-sm font-bold text-gray-500">Laptop Mackbook Pro M2</h1>
            </div>
            <div class="flex justify-between mt-1">
              <h3 class="font-bold text-sm">Harga Produk :</h3>
              <h1 class="text-sm font-bold text-gray-500">Rp 25.000.000</h1>
            </div>
            <hr class="mt-2 bg-gray-700">
            <h2 class="font-bold text-center">Identitas Pemesan</h2>
            <hr class="bg-gray-700">
            <div class="flex justify-between mt-1">
              <h3 class="font-bold text-sm">Nama Pemesan :</h3>
              <h1 class="text-sm font-bold text-gray-500">El-Rahmani</h1>
            </div>
            <div class="flex justify-between mt-1">
              <h3 class="font-bold text-sm">WhatsApp :</h3>
              <h1 class="text-sm font-bold text-gray-500 hover:underline hover:text-cyan-500"><a href="https://wa.me/085722993202" target="blank">085722993202</a></h1>
            </div>
            <div class="mt-1">
              <h3 class="font-bold text-sm">Alamat :</h3>
              <h1 class="text-sm font-bold text-gray-500 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime perspiciatis tenetur laudantium quasi ad rerum atque facilis dolor quis pariatur.</h1>
            </div>
        </div>
      </div>
    </div>
    <!-- end modal show -->

    <!-- modal edit -->
    <input type="checkbox" id="edit-modal" class="modal-toggle" />
    <div class="modal">
      <div class="modal-box">
        <label for="edit-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="text-lg font-bold">Edit Status Pengiriman Produk Kamu!</h3>
        <div class="w-full max-w-md">
          <button class="w-full text-white font-bold py-2 bg-amber-400 hover:bg-amber-600 rounded-full mt-3">PENDING</button>
          <button class="w-full text-white font-bold py-2 bg-cyan-500 hover:bg-cyan-700 rounded-full mt-3">ON DELIVERY</button>
          <button class="w-full text-white font-bold py-2 bg-emerald-500 hover:bg-emerald-700 rounded-full mt-3">SUCCESS</button>
          <button class="w-full text-white font-bold py-2 bg-red-500 hover:bg-red-700 rounded-full mt-3">FAILED</button>
        </div>
      </div>
    </div>
    <!-- end modal edit -->

</div>

@endsection
