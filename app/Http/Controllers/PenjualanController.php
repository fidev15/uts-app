<?php

// app/Http/Controllers/PenjualanController.php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::all();
        return view('penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'tanggal_penjualan' => 'required|date',
            'pelanggan' => 'required',
            'jumlah' => 'required|numeric',
            'harga_satuan' => 'required|numeric',
        ]);

        $total = $request->jumlah * $request->harga_satuan;

        Penjualan::create([
            'nama_barang' => $request->nama_barang,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'pelanggan' => $request->pelanggan,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'total' => $total,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil ditambahkan.');
    }

    public function show(Penjualan $penjualan)
    {
        return view('penjualan.show', compact('penjualan'));
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('penjualan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tanggal_penjualan' => 'required|date',
            'pelanggan' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|numeric',
        ]);

        $penjualan = Penjualan::findOrFail($id);

        $penjualan->update([
            'nama_barang' => $request->nama_barang,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'pelanggan' => $request->pelanggan,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'total' => $request->jumlah * $request->harga_satuan,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil dihapus.');
    }
}
