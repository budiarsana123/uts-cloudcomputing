<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mobil')->insert([
            'nama_mobil' => 'toyota rush GR sport',
            'harga_mobil' => 238000000,
            'tahun_mobil' => '2023',
            'warna_mobil' => 'ungu',
        ]);
    }
}
