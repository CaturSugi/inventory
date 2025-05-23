<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::truncate();

        Barang::insert([
            [
                'namabarang' => 'Kertas A4',
                'kodebarang' => 'KRT-A4',
                'stok' => 100,
                'satuan' => 'Lembar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namabarang' => 'Pulpen Biru',
                'kodebarang' => 'PLP-BIRU',
                'stok' => 50,
                'satuan' => 'Buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namabarang' => 'Pensil 2B',
                'kodebarang' => 'PNS-2B',
                'stok' => 75,
                'satuan' => 'Buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namabarang' => 'Penghapus',
                'kodebarang' => 'PGH-1',
                'stok' => 30,
                'satuan' => 'Buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namabarang' => 'Buku Tulis',
                'kodebarang' => 'BKT-1',
                'stok' => 20,
                'satuan' => 'Lembar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
