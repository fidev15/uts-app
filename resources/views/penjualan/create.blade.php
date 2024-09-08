@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Penjualan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('penjualan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_penjualan">Tanggal Penjualan</label>
                    <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" required>
                </div>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <input type="text" class="form-control" id="pelanggan" name="pelanggan" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <div class="form-group">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input type="number" step="0.01" class="form-control" id="harga_satuan" name="harga_satuan" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
