<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\BarangKeluar;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        "namabarang",
        "kodebarang",
        "stok",
        "satuan",
        "lokasi",
    ];

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'namabarang');
    }

    public function stokBarang()
    {
        return $this->hasMany(StokBarang::class, 'namabarang');
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'namabarang');
    }
}
