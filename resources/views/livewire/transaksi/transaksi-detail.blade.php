<div>
    <div class="card bg-base-100 w-100 shadow-xl">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h2 class="card-title">Transaksi</h2>
                <a class="btn btn-sm btn-warning float-right me-3" href="{{ url('/transaksi') }}" wire:navigate>Kembali</a>
            </div>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <tbody>
                        <!-- row 1 -->
                        <tr class="bg-base-200">
                            <td>Nomor Transaksi</td>
                            <td>{{ $nomor_transaksi }}</td>
                        </tr>
                        <tr class="bg-base-200">
                            <td>Cara Bayar</td>
                            <td>{{ $payment }}</td>
                        </tr>
                        <tr class="bg-base-200">
                            <td>Total Seluruh</td>
                            <td>{{ number_format($total_harga, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2 class="card-title mt-6">Item</h2>

            <div class="overflow-x-auto">
                <table class="table table-xs">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Kuantitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td>{{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{$item->kuantitas}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

</div>
