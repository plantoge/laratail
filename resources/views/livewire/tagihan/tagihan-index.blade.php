<div>
    <div class="card bg-base-100 w-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Tagihan</h2>
            {{-- <p>If a dog chews shoes whose shoes does he choose?</p> --}}
            <div class="">
                <a class="btn btn-sm btn-primary float-right me-3" href="{{url('/tagihan/create')}}" wire:navigate>Buat Tagihan</a>
                <label class="float-left btn-sm input input-bordered flex items-center gap-2">
                    <input type="text" class="grow" wire:model.live="search" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </label>
            </div>

            <table id="myTable" class="table mb-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kuitansi</th>
                        <th>Tanggal</th>
                        <th>Ditujukan</th>
                        <th>Jumlah</th>
                        <th class="text-center">Aksi</th>
                        <!-- Tambahkan kolom lainnya -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tagihan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kuitansi_nomor }}</td>
                            <td>{{ $item->tanggal_tagihan }}</td>
                            <td>{{ $item->kepada }}</td>
                            <td>
                                {{ number_format($item->jumlah, 0, ',', '.') }}
                            </td>
                            <td class="text-center">
                                {{-- <a href="{{url('export-tagihan/' . $item->tagihan_id)}}" target="_blank" class="w-full btn btn-sm btn-warning">Berkas</a> --}}
                                <button type="button" wire:click="Exportpdf({{$item->tagihan_id}})" class="w-full btn btn-sm btn-warning">Berkas</button>
                                <br>
                                <a wire:navigate href="{{ url('/tagihan/' . $item->tagihan_id . '/detail') }}" class="w-full btn btn-sm btn-primary">Detail</a>
                                <br>
                                <button onclick="confirmDelete({{ $item->tagihan_id }})" class="w-full btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $tagihan->links() }}

        </div>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                @this.call('destroy', id);
            }
        }
    </script>
</div>
