@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Penyimpanan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Penyimpanan Form</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('penyimpanan.update', $penyimpanan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $penyimpanan->nama_barang }}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $penyimpanan->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="stok_tersedia">Stok Tersedia</label>
                    <input type="number" class="form-control" id="stok_tersedia" name="stok_tersedia" value="{{ $penyimpanan->stok_tersedia }}" required>
                </div>
                <div class="form-group">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input type="number" step="0.01" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ $penyimpanan->harga_satuan }}" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $penyimpanan->kategori }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
