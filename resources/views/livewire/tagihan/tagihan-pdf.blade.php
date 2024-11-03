<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
            <th>Kepada</th>
            <th>Dari</th>
        </tr>
        <tr>
            <td>{{$tagihan->kepada }}</td>
            <td>{{$tagihan->dari }}</td>
        </tr>
    </table>
</body>
</html>
