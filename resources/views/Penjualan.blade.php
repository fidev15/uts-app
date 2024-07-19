<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Penjualan</h1>
        <a href="/penjualan/tambah" class="btn btn-primary">Tambah Data</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Penjualan</th>
                    <th>Pelanggan</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->tanggal_penjualan }}</td>
                        <td>{{ $item->pelanggan }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga_satuan }}</td>
                        <td>{{ $item->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
