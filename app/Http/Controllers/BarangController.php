<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::orderBy('id', 'asc')->get();
        // $barang = Barang::latest()->get();
        return view('layout.page.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.page.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namabarang' => 'required',
            'kodebarang' => 'required',
            'stok' => 'required|integer',
            'satuan' => 'required',
            'lokasi' => 'required',
        ]);

        // dd($request->all());

        Barang::create($request->all());
        return redirect()->back()->with('success', 'Data barang masuk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        // dd($stok);
        return view('layout.page.barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('layout.page.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'namabarang' => 'required',
            'kodebarang' => 'required',
            'stok' => 'required|integer',
            'satuan' => 'required',
            'lokasi' => 'required',
        ]);

        $barang->update($request->all());

        return redirect('/barang')->with('success', 'Data barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Data barang masuk berhasil dihapus.');
    }
}
