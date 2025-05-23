<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     $barang = Barang::orderBy('id', 'asc')->get();
    //     $masuk = BarangMasuk::with('barang')->orderBy('id', 'asc')->get();
    //     $keluar = BarangKeluar::with('barang')->orderBy('id', 'asc')->get();

    //     $totalBarang = Barang::count();
    //     $totalMasuk = BarangMasuk::sum('jumlah');
    //     $totalKeluar = BarangKeluar::sum('jumlah');
    //     $barangHabis = Barang::where('stok', '<=', 10)->get();
    //     $barangTerbaru = Barang::latest()->take(5)->get();

    //     // Ambil data 12 bulan terakhir
    //     $labels = [];
    //     $masukData = [];
    //     $keluarData = [];

    //     for ($i = 11; $i >= 0; $i--) {
    //         $bulan = Carbon::now()->subMonths($i)->format('Y-m');
    //         $labels[] = Carbon::now()->subMonths($i)->format('M Y');

    //         $masuk = BarangMasuk::where('tanggal_masuk', 'like', "$bulan%")->sum('jumlah');
    //         $keluar = BarangKeluar::where('tanggal_keluar', 'like', "$bulan%")->sum('jumlah');

    //         $masukData[] = $masuk;
    //         $keluarData[] = $keluar;
    //     }

    //     return view('layout.page.dashboard.index', compact(
    //         'totalBarang', 'totalMasuk', 'totalKeluar',
    //         'barangHabis', 'barangTerbaru',
    //         'labels', 'masukData', 'keluarData',
    //         'barang','masuk','keluar',
    //     ));
    // }

    public function index()
    {
        $barang = Barang::orderBy('id', 'asc')->get();
        $masuk = BarangMasuk::with('barang')->orderBy('id', 'asc')->get();
        $keluar = BarangKeluar::with('barang')->orderBy('id', 'asc')->get();

        $totalBarang = Barang::count();
        $totalMasuk = BarangMasuk::sum('jumlah');
        $totalKeluar = BarangKeluar::sum('jumlah');
        $barangHabis = Barang::where('stok', '<=', 10)->get();
        $barangTerbaru = Barang::latest()->take(5)->get();

        $labels = [];
        $masukData = [];
        $keluarData = [];

        for ($i = 11; $i >= 0; $i--) {
            $bulan = Carbon::now()->subMonths($i)->format('Y-m');
            $labels[] = Carbon::now()->subMonths($i)->format('M Y');

            $jumlahMasukBulanIni = BarangMasuk::where('tanggal_masuk', 'like', "$bulan%")->sum('jumlah');
            $jumlahKeluarBulanIni = BarangKeluar::where('tanggal_keluar', 'like', "$bulan%")->sum('jumlah');

            $masukData[] = $jumlahMasukBulanIni;
            $keluarData[] = $jumlahKeluarBulanIni;
        }

        return view('layout.page.dashboard.index', compact(
            'totalBarang', 'totalMasuk', 'totalKeluar',
            'barangHabis', 'barangTerbaru',
            'labels', 'masukData', 'keluarData',
            'barang','masuk','keluar',
        ));
    }

    public function store()
    {
        abort(404); // atau hapus method ini jika tidak digunakan
    }
}
