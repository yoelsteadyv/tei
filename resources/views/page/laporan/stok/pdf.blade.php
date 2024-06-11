<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEI | STOK PDF</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .section {
            margin: 5px;
        }

        .card-body {
            padding: 10px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="card">
            <h1 style="text-align: center;">LAPORAN STOK TEI</h1>
            <h5 style="text-align: center">Tanggal Cetak : <?php echo date('d-m-Y'); ?></h5>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Barang</th>
                            <th>Jumlah Masuk</th>
                            <th>Jumlah Keluar</th>
                            <th>Total Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->masuk }}</td>
                                <td>{{ $item->keluar }}</td>
                                <td>{{ $item->masuk - $item->keluar }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>
