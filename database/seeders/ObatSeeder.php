<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obat::create([
            'tanggal'=> '24-06-2022',
            'nama'=> 'Gita Nadila',
            'nama_obat'=> 'Decolsin',
            'jumlah'=> '1 tablet',
            'total_harga'=> 'Rp. 5000',
            'metode_pembayaran'=> 'OVO'
        ]);
    }
}
