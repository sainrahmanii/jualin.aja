@extends('mastercheckout')

@section('title', 'Produk')

@section('content')

    <div class="lg:max-w-6xl w-full px-6 lg:px-0 mx-auto lg:mt-32 mt-24">
        <h2 class="text-xl text-center">Selamat {{ $salam }}, <span class="font-bold">{{ Auth::user()->name }}</span>
        </h2>
        <h1 class="text-center text-xl mb-5">Kelola Produk Kamu Sekarang!</h1>
        <div class="rounded-lg drop-shadow-2xl bg-base-100 pb-7 pt-5 px-12 hover:shadow-xl">
            <div class="overflow-auto">
                <table class="w-full">

                    <!-- head -->
                    <thead class="border-primary border-b-2">
                        <tr>
                            <th class="p-3 whitespace-nowrap tracking-wide">No</th>
                            <th class="p-3 whitespace-nowrap tracking-wide">Nama Produk</th>
                            <th class="p-3 whitespace-nowrap tracking-wide">Harga Produk</th>
                            <th class="p-3 whitespace-nowrap tracking-wide">Gambar Produk</th>
                            <th class="p-3 whitespace-nowrap tracking-wide">Aksi</th>
                        </tr>
                    </thead>
                    <!-- tbody -->
                    @forelse ($products as $item)
                        <tbody class="divide-y">
                            <tr class="hover:bg-base-200 text-center">
                                <td class="p-3 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="p-3 whitespace-nowrap">{{ $item->nama_produk }}</td>
                                <td class="p-3 whitespace-nowrap">Rp {{ number_format($item->harga_produk) }}</td>
                                <td class="p-3 whitespace-nowrap">
                                    <img src="{{ Storage::url('public/photo_product/') . $item->photo_products }}"
                                        alt="gambar produk" class="w-32 mx-auto">
                                </td>
                                <td class="p-3 whitespace-nowrap flex items-center space-x-1 justify-center">
                                    <label for="show-modal{{ $item->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="white"
                                            class="w-10 h-10 cursor-pointer bg-teal-900 hover:bg-teal-500 px-2 py-2 transition delay-300 rounded-lg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </label>

                                    <label for="edit-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="white"
                                            class="w-10 h-10 bg-indigo-900 hover:bg-indigo-500 px-2 py-2 transition delay-300 rounded-lg cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </label>

                                    <label for="delete-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="white"
                                            class="w-10 h-10 bg-red-900 hover:bg-red-500 px-2 py-2 transition delay-300 rounded-lg cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </label>
                                </td>
                            @empty
                                <td colspan="5">
                                    <h2 class="text-center font-bold my-5">Produk Tidak Ada</h2>
                                </td>
                            </tr>
                        </tbody>
                    @endforelse
                </table>

            </div>
            <div class="flex justify-end">
                <label
                    class="rounded-full px-7 py-2 shadow-xl bg-base-300 hover:bg-primary transition delay-150 hover:text-white font-bold cursor-pointer"
                    for="create-modal">
                    Tambah Produk
                </label>
            </div>
        </div>
        <!-- modal create -->
        <input type="checkbox" id="create-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <label for="create-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold">Tambah Produk Kamu!</h3>
                <div class="w-full max-w-md">
                    <form action="{{ route('dashboard.produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="number" value="{{ Auth()->user()->id }}" name="user_id" hidden>
                        <label class="label">
                            <span class="label-text">Nama Produk</span>
                        </label>
                        <input type="text" placeholder="Nama Produk" name="nama_produk"
                            class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" required />
                        <label class="label">
                            <span class="label-text">Harga Produk</span>
                        </label>
                        <input type="number" placeholder="Harga Produk" name="harga_produk"
                            class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" min="10000"
                            required />
                        <label class="label">
                            <span class="label-text">Berat Produk</span>
                        </label>
                        <input type="number" placeholder="Berat Produk" name="berat"
                            class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" required />
                        <label class="label">
                            <span class="label-text">Deskripsi Produk</span>
                        </label>
                        <input type="text" placeholder="Deskripsi Produk" name="deskripsi_produk"
                            class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" min="75"
                            required />
                        <label class="label">
                            <span class="label-text">Pilih Kategori</span>
                        </label>

                        <select
                            class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full appearance-none"
                            name="category_id" required>
                            <option class="bg-base-100" disabled selected>Pilih Kategori</option>
                            @foreach ($categories as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>

                        <label class="label">
                            <span class="label-text">Foto Produk</span>
                        </label>
                        <input type="file" name="photo_products" placeholder="pilih foto" accept="image/*" multiple
                            class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-primary file:text-emerald-900
                                hover:file:bg-emerald-500 file:cursor-pointer
                            "
                            required />
                        <button class="w-full text-white font-bold py-2 bg-primary hover:bg-emerald-500 rounded-full mt-3"
                            type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal create -->

        <!-- modal edit -->
        <input type="checkbox" id="edit-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <label for="edit-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold">Edit Produk Kamu!</h3>
                <div class="w-full max-w-md">
                    <label class="label">
                        <span class="label-text">Nama Produk</span>
                    </label>
                    <input type="text" placeholder="Nama Produk"
                        class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" />
                    <label class="label">
                        <span class="label-text">Harga Produk</span>
                    </label>
                    <input type="number" placeholder="Harga Produk"
                        class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" min="10000" />
                    <label class="label">
                        <span class="label-text">Deskripsi Produk</span>
                    </label>
                    <input type="text" placeholder="Deskripsi Produk"
                        class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" min="75" />
                    <label class="label">
                        <span class="label-text">Foto Produk</span>
                    </label>
                    <input type="file" placeholder="pilih foto"
                        class="block w-full text-sm text-slate-500
              file:mr-4 file:py-2 file:px-4
              file:rounded-full file:border-0
              file:text-sm file:font-semibold
              file:bg-primary file:text-emerald-900
              hover:file:bg-emerald-500 file:cursor-pointer
            " />
                </div>
                <button
                    class="w-full text-white font-bold py-2 bg-primary rounded-full hover:bg-emerald-500 mt-3">SIMPAN</button>
            </div>
        </div>
        <!-- end modal edit -->

        <!-- delete modal -->
        <input type="checkbox" id="delete-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <label for="delete-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <div class="w-full max-w-md">
                    <p class="font-bold text-lg">Apakah anda yakin menghapus produk ini ?</p>
                    <div class="flex space-x-5">
                        <label for="delete-modal"
                            class="w-full text-black font-bold py-2 bg-gray-300 rounded-full mt-3 outline-0 text-center cursor-pointer">
                            CANCEL
                        </label>
                        <button
                            class="w-full text-white font-bold py-2 bg-red-500 hover:bg-red-700 rounded-full mt-3">DELETE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal delete -->
    </div>

@endsection
