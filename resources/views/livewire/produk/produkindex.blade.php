<div>
    <div class="card bg-base-100 w-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Produk</h2>
            {{-- <p>If a dog chews shoes whose shoes does he choose?</p> --}}
            <div class="">
                <a class="btn btn-sm btn-primary float-right me-3" href="{{url('/produk/create')}}" wire:navigate>Tambah</a>
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
                        <th>Nama</th>
                        <th class="text-right">Harga</th>
                        <th class="text-right"></th>
                        <!-- Tambahkan kolom lainnya -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td class="text-right">
                                {{ number_format($item->harga, 0, ',', '.') }}
                            </td>
                            <td class="text-right">
                                <a wire:navigate href="{{ url('/produk/' . $item->produk_id . '/edit') }}" class="btn btn-sm btn-primary">Ubah</a>
                                <button onclick="confirmDelete({{ $item->produk_id }})" class="btn btn-sm btn-warning">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $produk->links() }}

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
