<div>
    <div class="card bg-base-100 w-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Produk</h2>
            {{-- <p>If a dog chews shoes whose shoes does he choose?</p> --}}
            <div class="">
                <a class="btn btn-sm btn-dark float-right me-3" href="{{ url('/produk') }}" wire:navigate>Kembali</a>
            </div>

            <form wire:submit="save">
                <div class="">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama</span>
                        </label>
                        <input type="text" wire:model="nama" placeholder="Nama" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Harga</span>
                        </label>
                        <input type="text" wire:model="harga" placeholder="Harga" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-50">Simpan</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
</div>
