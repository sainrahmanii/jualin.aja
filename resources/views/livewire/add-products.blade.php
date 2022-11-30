<div>
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

                    <select class="w-full border-2 outline-none border-slate-300 py-2 px-5 rounded-full appearance-none"
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
</div>
