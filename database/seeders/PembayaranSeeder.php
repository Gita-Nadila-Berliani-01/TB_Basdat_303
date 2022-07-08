<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'metode_pembayaran' => 'OVO' ],
            [ 'metode_pembayaran' => 'COD' ],
        ];
        foreach ($data as $Pembayaran) {
            Pembayaran::create($Pembayaran);
        }
    }
}
