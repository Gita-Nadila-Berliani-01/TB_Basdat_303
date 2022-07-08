<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'obat_id' => 1,
                'kategori_id' => 1,
            ],
            [
                'obat_id' => 1,
                'kategori_id' => 2,
            ],
        ];
        foreach ($data as $metode_pembayaran) {
         DB::table('metode_pembayaran')->insert($metode_pembayaran);
        }
    }
}
