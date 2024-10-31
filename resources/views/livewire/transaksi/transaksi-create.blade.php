<div>
    <form wire:submit.prevent="save">
        <div class="card bg-base-100 w-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Transaksi</h2>
                <div>
                    <button class="btn btn-sm btn-secondary float-right" type="button" wire:click="addItem">Tambah Item</button>
                    <a class="btn btn-sm btn-dark float-right me-3" href="{{ url('/transaksi') }}" wire:navigate>Kembali</a>
                </div>

                <div class="grid grid-cols-3 gap-0">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">User</span>
                        </label>
                        <input type="text" value="{{ Auth::user()->name }}" class="input input-bordered input-md w-full max-w-xs" readonly />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nomor Transaksi</span>
                        </label>
                        <input type="text" wire:model="nomor_transaksi" class="input input-bordered input-md w-full max-w-xs" readonly />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Cara Bayar</span>
                        </label>
                        <div class="form-control">
                            <select wire:model="payment" class="select select-md select-bordered">
                                <option value="">Pilih</option>
                                <option value="Cash">Cash</option>
                                <option value="Transfer">Transfer</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h3 class="font-bold mb-3">Item Transaksi</h3>
                    @foreach($rows as $index => $item)
                        <div class="grid grid-cols-4 gap-4 mb-2">
                            <div class="form-control">
                                <select wire:model="rows.{{ $index }}.product_id" wire:change="updatePrice($event.target.value, {{ $index }})" class="select select-sm select-bordered">
                                    <option value="">Pilih Produk</option>
                                    @foreach($produk as $barang)
                                        <option value="{{ $barang->produk_id }}">{{ $barang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control">
                                <input type="number" wire:model="rows.{{ $index }}.price" class="input input-sm input-bordered" min="1" readonly />
                            </div>
                            <div class="form-control">
                                <input type="number" wire:model="rows.{{ $index }}.kuantitas" class="input input-sm input-bordered" min="1" wire:change="updateTotalPrice($event.target.value)" />
                            </div>
                            <div class="form-control">
                                <button type="button" wire:click="removeItem({{ $index }})" class="btn btn-sm btn-danger">Hapus</button>
                            </div>
                        </div>
                    @endforeach
                        <div class="grid grid-cols-1 gap-3 mb-2">
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Total</span>
                                </label>
                                <input type="text" wire:model="total_harga" class="input input-bordered input-sm w-full max-w-xs" readonly />
                            </div>
                        </div>
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-50">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
