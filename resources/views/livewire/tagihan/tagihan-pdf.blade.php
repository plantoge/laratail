<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen Tagihan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 100%;
            margin: auto;
            /* border: 1px solid #000; */
            /* padding: 20px; */
        }
        h1, h2 {
            text-align: center;
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        td {
            padding: 8px;
            vertical-align: top;
        }
        .right-align {
            text-align: right;
        }
        .signature-section td {
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .page-break {
            page-break-after: always;
        }
        .title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <!-- Surat Pengantar Tagihan -->
    <div class="container">
        <div class="title">SURAT PENGANTAR TAGIHAN</div>
        <table>
            <tr><td>Kepada</td><td>: {{$tagihan->kepada}}</td></tr>
            <tr><td>Dari</td><td>: {{$tagihan->dari}}</td></tr>
            <tr><td>Tagihan Mengenai</td><td>: {{$tagihan->tagihan_mengenai}}</td></tr>
            <tr><td>Bagian</td><td>: {{$tagihan->bagian}}</td></tr>
            <tr><td>Tanggal</td><td>: {{$tagihan->tanggal}}</td></tr>
            <tr><td>Jumlah</td><td>: Rp. {{number_format($tagihan->jumlah, 0, '.', ',')}}</td></tr>
            <tr><td>Rekening Pada</td><td>: {{$tagihan->nama_bank}}</td></tr>
            <tr><td></td><td>A/C No. {{$tagihan->nomor_rekening}} a/n {{$tagihan->nama_rekening}}</td></tr>
            <tr><td>NPWP</td><td>: {{$tagihan->npwp}}</td></tr>
        </table>
        <p>Lampiran-lampiran:</p>
        <ul>
            <li>Bukti Penagihan: 1. Kwitansi No. TPC12/010123</li>
            <li>2. Rekapitulasi</li>
            <li>3. Faktur</li>
        </ul>
        <table class="signature-section">
            <tr>
                <td>Nama: ……………………………………</td>
                <td class="right-align">Jakarta, {{date('j F Y')}}</td>
            </tr>
            <tr>
                <td>Tanggal: ……………………………………</td>
                <td class="right-align">Yang menyerahkan tagihan:</td>
            </tr>
            <tr>
                <td>( …………………..………………………… )</td>
                <td class="right-align">( …………………………………… )</td>
            </tr>
        </table>
    </div>

    <div class="page-break"></div>

    <!-- Kwitansi -->
    <div class="container">
        <div class="title">KWITANSI</div>
        <table>
            <tr><td>NO</td><td>: {{$tagihan->kuitansi->kuitansi_nomor}}</td></tr>
            <tr><td>Sudah terima dari</td><td>: {{$tagihan->kuitansi->nama_pembeli}}</td></tr>
            <tr><td>Uang Sejumlah</td><td>: {{ucwords(terbilang($tagihan->kuitansi->nominal))}} Rupiah</td></tr>
            <tr><td>Untuk pembayaran</td><td>: {{$tagihan->kuitansi->tujuan}}</td></tr>
        </table>
        <p class="right-align">Jakarta, {{date('j F Y')}}</p>
        <p>Pembayaran dengan Cek / Bilyet Giro dianggap Sah jika sudah dapat diuangkan</p>
        <table>
            <tr>
                <td>Jumlah</td>
                <td class="right-align">Rp. {{number_format($tagihan->jumlah, 0, '.', ',')}}</td>
            </tr>
            <tr>
                <td colspan="2" class="right-align" style="padding-top: 15vh">( …………………………… )</td>
            </tr>
        </table>
    </div>

    <div class="page-break"></div>

    <!-- Invoice Penjualan -->
    <div class="container">
        <div class="title">INVOICE PENJUALAN</div>
        <table>
            <tr><td>No. Invoice</td><td>: {{$transaksi->nomor_transaksi}}</td></tr>
            <tr><td>Tanggal</td><td>: {{$transaksi->created_at, 'j F Y'}}</td></tr>
        </table>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach ($item as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->kuantitas}}</td>
                    <td>{{number_format($item->harga, 0, ',', '.')}}</td>
                    <td>{{number_format($item->harga * $item->kuantitas, 0, ',', '.')}}</td>
                </tr>
                @php
                    $total += $item->harga * $item->kuantitas;
                @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="right-align">Total</td>
                    <td>Rp. {{number_format($total, 0, ',', '.')}}</td>
                </tr>
            </tfoot>
        </table>
    </div>

</body>
</html>
