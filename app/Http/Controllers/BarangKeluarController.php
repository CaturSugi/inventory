<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluar = BarangKeluar::latest()->get();
        $barangs = Barang::all();
        return view('layout.page.barangkeluar.index', compact('keluar', 'barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('layout.page.barangkeluar.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
            'tanggal_keluar' => 'required|date',
            'penerima' => 'required|string|max:255',
        ]);

        $barang = Barang::find($request->barang_id);
        if ($barang->stok < $request->jumlah) {
            return back()->with('error', 'Stok tidak cukup');
        }

        // dd($request->all());

        BarangKeluar::create($request->all());
        $barang->stok -= $request->jumlah;
        $barang->save();

        return redirect()->back()->with('success', 'Data barang keluar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangKeluar $keluar)
    {
        return view('layout.page.barangkeluar.show', compact('keluar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangKeluar $keluar)
    {
        $barangs = Barang::all();
        return view('layout.page.barangkeluar.edit', compact('keluar', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangKeluar $barangKeluar)
    {
        //
    }
}
