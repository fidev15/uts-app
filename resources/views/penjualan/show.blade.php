@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Penjualan Details</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Penjualan Information</h6>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nama Barang</dt>
                <dd class="col-sm-9">{{ $penjualan->nama_barang }}</dd>

                <dt class="col-sm-3">Tanggal Penjualan</dt>
                <dd class="col-sm-9">{{ $penjualan->tanggal_penjualan }}</dd>

                <dt class="col-sm-3">Pelanggan</dt>
                <dd class="col-sm-9">{{ $penjualan->pelanggan }}</dd>

                <dt class="col-sm-3">Jumlah</dt>
                <dd class="col-sm-9">{{ $penjualan->jumlah }}</dd>

                <dt class="col-sm-3">Harga Satuan</dt>
                <dd class="col-sm-9">{{ $penjualan->harga_satuan }}</dd>

                <dt class="col-sm-3">Total</dt>
                <dd class="col-sm-9">{{ $penjualan->total }}</dd>
            </dl>
            <a href="{{ route('penjualan.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
