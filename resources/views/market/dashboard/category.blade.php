@extends('mastercheckout')

@section('title', 'Category')

@section('content')

    <div class="lg:max-w-6xl w-full px-6 lg:px-0 mx-auto lg:mt-32 mt-24">
        <div class="rounded-lg drop-shadow-2xl bg-base-100 pb-7 pt-5 px-12 hover:shadow-xl">
            <div class="overflow-auto">
                <table class="w-full">

                    <!-- head -->
                    <thead class="border-primary border-b-2">
                        <tr>
                            <th class="p-3 whitespace-nowrap tracking-wide">No</th>
                            <th class="p-3 whitespace-nowrap tracking-wide">Nama Kategori</th>
                            <th class="p-3 whitespace-nowrap tracking-wide">Aksi</th>
                        </tr>
                    </thead>
                    <!-- tbody -->
                    @forelse($categories as $category)
                        <tbody class="divide-y">
                            <tr class="hover:bg-base-200 text-center">
                                <td class="p-3 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="p-3 whitespace-nowrap">{{ $category->nama_kategori }}</td>
                                <td class="p-3 whitespace-nowrap flex items-center space-x-1 justify-center">
                                    <label for="modal-edit{{ $category->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="white"
                                            class="w-10 h-10 bg-indigo-700 hover:bg-indigo-500 px-2 py-2 transition delay-300 rounded-lg cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </label>
                                    <!-- modal edit -->
                                    <form action="{{ route('dashboard.admin.category.update', $category->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="checkbox" id="modal-edit{{ $category->id }}" class="modal-toggle">
                                        <div class="modal">
                                            <div class="modal-box">
                                                <label for="modal-edit{{ $category->id }}"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h3 class="text-lg font-bold">Edit Kategori!</h3>
                                                <div class="w-full max-w-md">
                                                    <label class="label">
                                                        <span class="label-text">Nama Kategori</span>
                                                    </label>
                                                    <input name="nama_kategori" type="text" placeholder="Nama Kategori"
                                                        class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full"
                                                        value="{{ $category->nama_kategori }}" />
                                                </div>
                                                <button
                                                    class="w-full text-white font-bold py-2 bg-primary rounded-full hover:bg-emerald-500 mt-3"
                                                    type="submit">SIMPAN</button>
                                            </div>
                                        </div>
                                        </input>
                                    </form>
                                    <!-- end modal edit -->
                                    <label for="delete-modal{{ $category->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="white"
                                            class="w-10 h-10 bg-red-700 hover:bg-red-500 px-2 py-2 transition delay-300 rounded-lg cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </label>
                                    <!-- delete modal -->
                                    {{-- <form action="{{ route('dashboard.admin.category.destroy', $category->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="checkbox" id="delete-modal{{ $category->id }}" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box">
                                                <label for="delete-modal{{ $category->id }}"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <div class="w-full max-w-md">
                                                    <p class="font-bold text-lg">Hapus Kategori ini ?</p>
                                                    <div class="flex space-x-5">
                                                        <label for="delete-modal{{ $category->id }}"
                                                            class="w-full text-black font-bold py-2 bg-gray-300 rounded-full mt-3 outline-0 text-center cursor-pointer">
                                                            CANCEL
                                                        </label>
                                                        <button type="submit"
                                                            class="w-full text-white font-bold py-2 bg-red-500 hover:bg-red-700 rounded-full mt-3">DELETE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form> --}}
                                    <!-- end modal delete -->
                                </td>
                            @empty
                                <td colspan="5">
                                    <h2 class="text-center font-bold my-5">Anda Belum Menambahkan Kategori!</h2>
                                </td>
                            </tr>
                        </tbody>
                    @endforelse
                </table>
            </div>
            <div class="flex justify-end">
                <label label
                    class="rounded-full px-7 py-2 shadow-xl bg-base-300 hover:bg-primary transition delay-150 hover:text-white font-bold tambah-produk cursor-pointer"
                    for="create-modal">Tambah Produk</label>
            </div>
        </div>
        <!-- modal create -->
        <form action="{{ route('dashboard.admin.category.store') }}" method="post">
            @csrf
            <input type="checkbox" id="create-modal" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box">
                    <label for="create-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                    <h3 class="text-lg font-bold">Tambah Category!</h3>
                    <div class="w-full max-w-md">
                        <label class="label">
                            <span class="label-text">Nama Kategori</span>
                        </label>
                        <input type="text" placeholder="Nama Kategori" name="nama_kategori"
                            class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full" />
                    </div>
                    <button
                        class="w-full text-white font-bold py-2 bg-primary hover:bg-emerald-500 rounded-full mt-3">SIMPAN</button>
                </div>
            </div>
        </form>
        <!-- end modal create -->
    </div>
    </div>

@endsection
