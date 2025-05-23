<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BarangKeluar;

class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarangKeluar::truncate();

        BarangKeluar::insert([
            [
                'barang_id' => 1,
                'jumlah' => 30,
                'tanggal_keluar' => now()->subDays(1),
                'penerima' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 2,
                'jumlah' => 20,
                'tanggal_keluar' => now()->subDays(2),
                'penerima' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 3,
                'jumlah' => 15,
                'tanggal_keluar' => now()->subDays(3),
                'penerima' => 'Alice Johnson',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 4,
                'jumlah' => 10,
                'tanggal_keluar' => now()->subDays(4),
                'penerima' => 'Bob Brown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 5,
                'jumlah' => 5,
                'tanggal_keluar' => now()->subDays(5),
                'penerima' => 'Charlie Davis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
