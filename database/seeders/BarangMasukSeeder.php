<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BarangMasuk;

class BarangMasukSeeder extends Seeder
{
    public function run(): void
    {
        BarangMasuk::truncate();

        BarangMasuk::insert([
            [
                // 'stokbarang_id' => 1,
                'barang_id' => 1,
                'jumlah' => 500,
                'tanggal_masuk' => now()->subDays(2),
                'penerima' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'stokbarang_id' => 2,
                'barang_id' => 2,
                'jumlah' => 150,
                'tanggal_masuk' => now()->subDay(),
                'penerima' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'stokbarang_id' => 3,
                'barang_id' => 3,
                'jumlah' => 200,
                'tanggal_masuk' => now(),
                'penerima' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'stokbarang_id' => 4,
                'barang_id' => 4,
                'jumlah' => 300,
                'tanggal_masuk' => now(),
                'penerima' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'stokbarang_id' => 5,
                'barang_id' => 5,
                'jumlah' => 100,
                'tanggal_masuk' => now(),
                'penerima' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
