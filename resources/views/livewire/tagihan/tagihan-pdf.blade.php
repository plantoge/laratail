<!DOCTYPE html>
<html>
<head>
    <title>Tagihan</title>
    <style>
        /* Tambahkan style untuk PDF jika perlu */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Surat Tagihan</h1>
    <p>Detail Tagihan:</p>
    <table>
        <tr>
            <th>Nama</th>
            <th>Jumlah</th>
        </tr>
        <tr>
            <td>{{$tagihan->nama }}</td>
            <td>{{$tagihan->jumlah }}</td>
        </tr>
    </table>
</body>
</html>
