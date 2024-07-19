<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();

        return view('penjualan', ['penjualan' => $penjualan]);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function store(Request $request)
    {
        $store = Penjualan::create($request->except(['_token','total','submit']));

        if ($store){
            return redirect('penjualan');
        }else {
            return redirect()->back();
        }
    }
}
