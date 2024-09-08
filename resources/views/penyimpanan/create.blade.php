@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Penyimpanan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('penyimpanan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label for="stok_tersedia">Stok Tersedia</label>
                    <input type="number" class="form-control" id="stok_tersedia" name="stok_tersedia" required>
                </div>
                <div class="form-group">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input type="number" step="0.01" class="form-control" id="harga_satuan" name="harga_satuan" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="kategori1" value="Pakaian" required>
                        <label class="form-check-label" for="kategori1">
                            Pakaian
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="kategori2" value="Sepatu" required>
                        <label class="form-check-label" for="kategori2">
                            Sepatu
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="kategori3" value="Aksesoris" required>
                        <label class="form-check-label" for="kategori3">
                            Aksesoris
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
