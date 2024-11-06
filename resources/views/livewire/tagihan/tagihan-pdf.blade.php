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
            <tr><td>Kepada</td><td>: Bank Indonesia</td></tr>
            <tr><td>Dari</td><td>: The Bankers</td></tr>
            <tr><td>Tagihan Mengenai</td><td>: Biaya Pesanan minum</td></tr>
            <tr><td>Bagian</td><td>: DR</td></tr>
            <tr><td>Tanggal</td><td>: 08-09 Februari 2023</td></tr>
            <tr><td>Jumlah</td><td>: Rp. 528.000,-</td></tr>
            <tr><td>Rekening Pada</td><td>: Bank BCA Kcp City Center</td></tr>
            <tr><td></td><td>A/C No. 546-077-0990 a/n PT. GEMILANG ABADI SELALU</td></tr>
            <tr><td>NPWP</td><td>: 62.108.432.6-071.000</td></tr>
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
                <td class="right-align">Jakarta, 28 Februari 2023</td>
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
            <tr><td>NO</td><td>: TPC12/010123</td></tr>
            <tr><td>Sudah terima dari</td><td>: Bank Indonesia</td></tr>
            <tr><td>Uang Sejumlah</td><td>: Lima Ratus Dua Puluh Delapan Ribu Rupiah</td></tr>
            <tr><td>Untuk pembayaran</td><td>: Biaya Pesanan Snack periode tanggal 08-09 Februari 2023</td></tr>
        </table>
        <p class="right-align">Jakarta, 28 Februari 2023</p>
        <p>Pembayaran dengan Cek / Bilyet Giro dianggap Sah jika sudah dapat diuangkan</p>
        <table>
            <tr>
                <td>Jumlah</td>
                <td class="right-align">Rp. 528.000,-</td>
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
            <tr><td>No. Invoice</td><td>: TPC12/010123</td></tr>
            <tr><td>Tanggal</td><td>: 28 Februari 2023</td></tr>
            <tr><td>Tagihan Kepada</td><td>: DR</td></tr>
        </table>
        <table border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>No. Ttk</th>
                    <th>Tenant</th>
                    <th>Qty</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>08 Februari 2023</td>
                    <td>B000024</td>
                    <td>The Bankers</td>
                    <td>8</td>
                    <td>Rp. 256.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>09 Februari 2023</td>
                    <td>B000026</td>
                    <td>The Banker</td>
                    <td>7</td>
                    <td>Rp. 224.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="right-align">Total</td>
                    <td>Rp. 480.000</td>
                </tr>
                <tr>
                    <td colspan="5" class="right-align">Pajak Restoran</td>
                    <td>Rp. 48.000</td>
                </tr>
                <tr>
                    <td colspan="5" class="right-align"><strong>Grand Total</strong></td>
                    <td><strong>Rp. 528.000</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>

</body>
</html>
