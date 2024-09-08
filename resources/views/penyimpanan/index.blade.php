<!-- resources/views/penyimpanan/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Penyimpanan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('penyimpanan.create') }}" class="btn btn-primary mb-4">Tambah Data</a>
        </div>
        <div class="card-body">
            <!-- Display validation errors and success messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Deskripsi</th>
                            <th>Stok Tersedia</th>
                            <th>Harga Satuan</th>
                            <th>Kategori</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyimpanan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->stok_tersedia }}</td>
                                <td>{{ number_format($item->harga_satuan, 2) }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>
                                    <a href="{{ route('penyimpanan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('penyimpanan.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete(event);">
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
