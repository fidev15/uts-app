@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Penjualan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $penjualan->nama_barang) }}" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_penjualan">Tanggal Penjualan</label>
                    <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="{{ old('tanggal_penjualan', $penjualan->tanggal_penjualan->format('Y-m-d')) }}" required>
                </div>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <input type="text" class="form-control" id="pelanggan" name="pelanggan" value="{{ old('pelanggan', $penjualan->pelanggan) }}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah', $penjualan->jumlah) }}" required>
                </div>
                <div class="form-group">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input type="number" step="0.01" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ old('harga_satuan', $penjualan->harga_satuan) }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
