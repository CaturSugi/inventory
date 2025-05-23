<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{

    public function index()
    {
        // Ambil semua data BarangMasuk beserta relasi Barang
        $masuk = BarangMasuk::with('barang')->orderBy('id', 'asc')->get();

        // Ambil semua barang untuk kebutuhan lain (misal dropdown)
        $barangs = Barang::all();

        return view('layout.page.barangmasuk.index', compact('masuk', 'barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
            'tanggal_masuk' => 'required|date',
            'penerima' => 'required|string|max:255',
        ]);

        BarangMasuk::create($request->all());

        $barang = Barang::find($request->barang_id);
        $barang->stok += $request->jumlah;
        $barang->save();

        return redirect()->route('barangmasuk.index')->with('success', 'Data barang masuk berhasil ditambahkan.');
    }

    public function create()
    {
        $barangs = Barang::all();
        
        return view('layout.page.barangmasuk.create', compact('barangs'));
    }



    public function show(BarangMasuk $masuk)
    {
        // dd($stok);
        return view('layout.page.barangmasuk.show', compact('masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangMasuk $masuk)
    {
        return view('layout.page.barangmasuk.edit', compact('masuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangMasuk $masuk)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
            'tanggal_masuk' => 'required|date',
            'penerima' => 'required|string|max:255',
        ]);

        // Jika barang_id berubah, update stok barang lama dan baru
        if ($masuk->barang_id != $request->barang_id) {
            // Kurangi stok barang lama
            $barangLama = Barang::find($masuk->barang_id);
            if ($barangLama) {
                $barangLama->stok -= $masuk->jumlah;
                $barangLama->save();
            }
            // Tambah stok barang baru
            $barangBaru = Barang::find($request->barang_id);
            if ($barangBaru) {
                $barangBaru->stok += $request->jumlah;
                $barangBaru->save();
            }
        } else {
            // Jika barang sama, update stok sesuai perubahan jumlah
            $barang = Barang::find($masuk->barang_id);
            if ($barang) {
                $barang->stok = $barang->stok - $masuk->jumlah + $request->jumlah;
                $barang->save();
            }
        }

        $masuk->update($request->all());

        return redirect()->route('barangmasuk.index')->with('success', 'Data barang masuk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        $masuk = BarangMasuk::find($id);
        $masuk->delete();
        return redirect()->route('barangmasuk.index')->with('success', 'Data barang masuk berhasil dihapus.');
    }
}
