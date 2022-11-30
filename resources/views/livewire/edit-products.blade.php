<div>
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
</div>
