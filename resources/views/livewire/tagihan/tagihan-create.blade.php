<div>
    <form wire:submit.prevent="save">
        <div class="card bg-base-100 w-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Tagihan</h2>
                <div>
                    <a class="btn btn-sm btn-dark float-right me-3" href="{{ url('/tagihan') }}" wire:navigate>Kembali</a>
                </div>
                
                <div class="grid grid-cols-3 gap-3">
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nomor Transaksi</span>
                        </label>
                        <div class="form-control">
                            <select wire:model="transaksi_id" class="select select-sm select-bordered">
                                <option value="">Pilih</option>
                                @foreach ($transaksi as $item)
                                    <option value="{{$item->transaksi_id}}">{{$item->nomor_transaksi}}</option>                                
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <h2 class="card-title mt-5">Surat Pengantar</h2>
                <div class="grid grid-cols-3 gap-3">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kepada</span>
                        </label>
                        <input type="text" wire:model="kepada" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Dari</span>
                        </label>
                        <input type="text" wire:model="dari" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tagihan Mengenai</span>
                        </label>
                        <input type="text" wire:model="tagihan_mengenai" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Bagian</span>
                        </label>
                        <input type="text" wire:model="bagian" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tanggal</span>
                        </label>
                        <input type="date" wire:model="tanggal_tagihan" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Jumlah</span>
                        </label>
                        <input type="number" wire:model="jumlah" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Bank</span>
                        </label>
                        <input type="text" wire:model="nama_bank" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Pemilik Rekening</span>
                        </label>
                        <input type="text" wire:model="nama_rekening" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nomor Rekening</span>
                        </label>
                        <input type="text" wire:model="nomor_rekening" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">NPWP</span>
                        </label>
                        <input type="text" wire:model="npwp" class="input input-bordered input-sm w-full"/>
                    </div>
                </div>

                <h2 class="card-title mt-5">Kuitansi</h2>
                <div class="grid grid-cols-3 gap-3">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nomor</span>
                        </label>
                        <input type="text" wire:model="kuitansi_nomor" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tanggal</span>
                        </label>
                        <input type="date" wire:model="tanggal_kuitansi" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Pembeli</span>
                        </label>
                        <input type="text" wire:model="nama_pembeli" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nominal</span>
                        </label>
                        <input type="text" wire:model="nominal" class="input input-bordered input-sm w-full"/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tujuan</span>
                        </label>
                        <input type="text" wire:model="tujuan" class="input input-bordered input-sm w-full"/>
                    </div>
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-50">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
