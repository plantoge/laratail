<div>
    <form wire:submit="save">
        <div class="card bg-base-100 w-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Transaksi</h2>
                {{-- <p>If a dog chews shoes whose shoes does he choose?</p> --}}
                <div class="">
                    <a class="btn btn-sm btn-dark float-right me-3" href="{{ url('/transaksi') }}" wire:navigate>Kembali</a>
                </div>

                    <div class="grid grid-cols-3 gap-0">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                            <input type="text" wire:model="nama" placeholder="Nama" class="input input-bordered input-md w-full max-w-xs"
                                required />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Harga</span>
                            </label>
                            <input type="text" wire:model="harga" placeholder="Harga" class="input input-bordered input-md w-full max-w-xs"
                                required />
                        </div>
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-50">Simpan</button>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </form>
</div>
