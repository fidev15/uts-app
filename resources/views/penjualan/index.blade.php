@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Penjualan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('penjualan.create') }}" class="btn btn-primary mb-4">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Penjualan</th>
                            <th>Pelanggan</th>
                            <th>Jumlah</th>
                            <th>Harga Satuan</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualans as $penjualan)
                            <tr>
                                <td>{{ $penjualan->id }}</td>
                                <td>{{ $penjualan->nama_barang }}</td>
                                <td>{{ \Carbon\Carbon::parse($penjualan->tanggal_penjualan)->format('d-m-Y') }}</td>
                                <td>{{ $penjualan->pelanggan }}</td>
                                <td>{{ $penjualan->jumlah }}</td>
                                <td>{{ number_format($penjualan->harga_satuan, 2) }}</td>
                                <td>{{ number_format($penjualan->total, 2) }}</td>
                                <td>
                                    <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete(event);">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent form submission
        const form = event.target;
        if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
            form.submit(); // Submit the form if confirmed
        }
    }
</script>
@endsection
@endsection
