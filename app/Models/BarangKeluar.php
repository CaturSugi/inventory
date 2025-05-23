<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluars';
    
    protected $fillable = [
        'barang_id', 
        'jumlah', 
        'tanggal_keluar', 
        'penerima',
    ];
    
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
