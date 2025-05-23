<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuks';
    
    protected $fillable = [
        'barang_id',
        'jumlah',
        'tanggal_masuk',
        'penerima',
    ];
    
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
