<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriObatSeeder extends Seeder
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
        foreach ($data as $kategori_obat) {
         DB::table('kategori_obat')->insert($kategori_obat);
        }
    }
}
