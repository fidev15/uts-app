<?php

namespace App\Http\Controllers;

use App\Models\Penyimpanan;
use Illuminate\Http\Request;

class PenyimpananController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $penyimpanan = Penyimpanan::all(); 
        return view('penyimpanan.index', compact('penyimpanan'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('penyimpanan.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
            'stok_tersedia' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'kategori' => 'nullable|string|max:255',
        ]);

        Penyimpanan::create($request->all());

        return redirect()->route('penyimpanan.index')
                         ->with('success', 'Penyimpanan created successfully.');
    }

    // Display the specified resource.
    public function show(Penyimpanan $penyimpanan)
    {
        return view('penyimpanan.show', compact('penyimpanan'));
    }

    // Show the form for editing the specified resource.
    public function edit(Penyimpanan $penyimpanan)
    {
        return view('penyimpanan.edit', compact('penyimpanan'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Penyimpanan $penyimpanan)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
            'stok_tersedia' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'kategori' => 'nullable|string|max:255',
        ]);

        $penyimpanan->update($request->all());

        return redirect()->route('penyimpanan.index')
                         ->with('success', 'Penyimpanan updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Penyimpanan $penyimpanan)
    {
        $penyimpanan->delete();

        return redirect()->route('penyimpanan.index')
                         ->with('success', 'Penyimpanan deleted successfully.');
    }
}
