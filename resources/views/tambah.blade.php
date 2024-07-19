<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tambah Data Penjualan</h1>
        <form method="POST" action="/penjualan/store">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang </label>
                <input type="text" name="nama_barang" class="form-control">
            </div>
            <div class="mb-3">
                <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
                <input type="date" name="tanggal_penjualan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="pelanggan" class="form-label">Pelanggan </label>
                <input type="text" name="pelanggan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah </label>
                <input type="number" name="jumlah" class="form-control">
            </div>
            <div class="mb-3">
                <label for="harga_satuan" class="form-label">Harga Satuan </label>
                <input type="number" name="harga_satuan" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <a href="./penjualan" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</body>
</html>