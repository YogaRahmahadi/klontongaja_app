<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = array(
            [
                'nama_kategori' => 'Bahan Masak',
            ],
            [
                'nama_kategori' => 'Peralatan Mandi & Cuci',
            ],
            [
                'nama_kategori' => 'Sembako',
            ],
        );

        DB::table('kategori')->insert($kategori);
    }
}
