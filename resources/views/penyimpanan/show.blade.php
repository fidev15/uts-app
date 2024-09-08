@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Penyimpanan Details</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Penyimpanan Information</h6>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nama Barang</dt>
                <dd class="col-sm-9">{{ $penyimpanan->nama_barang }}</dd>

                <dt class="col-sm-3">Deskripsi</dt>
                <dd class="col-sm-9">{{ $penyimpanan->deskripsi }}</dd>

                <dt class="col-sm-3">Stok Tersedia</dt>
                <dd class="col-sm-9">{{ $penyimpanan->stok_tersedia }}</dd>

                <dt class="col-sm-3">Harga Satuan</dt>
                <dd class="col-sm-9">{{ $penyimpanan->harga_satuan }}</dd>

                <dt class="col-sm-3">Kategori</dt>
                <dd class="col-sm-9">{{ $penyimpanan->kategori }}</dd>
            </dl>
            <a href="{{ route('penyimpanan.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
