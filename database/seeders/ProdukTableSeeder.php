<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk = array(
            [
                'id_kategori' => 3,
                'kode_produk' => 'P000001',
                'nama_produk' => 'Minyak Goreng Sania',
                'harga_beli' => '22000',
                'harga_jual' => '25000',
                'stok' => 100,
                'satuan' => 'Liter',
            ],
            [
                'id_kategori' => 3,
                'kode_produk' => 'P000002',
                'nama_produk' => 'Beras Fortune',
                'harga_beli' => '55000',
                'harga_jual' => '60000',
                'stok' => 50,
                'satuan' => 'Sak',
            ],
            [
                'id_kategori' => 1,
                'kode_produk' => 'P000003',
                'nama_produk' => 'Kecap Bango',
                'harga_beli' => '3000',
                'harga_jual' => '5000',
                'stok' => 200,
                'satuan' => 'Pcs',
            ],
            [
                'id_kategori' => 1,
                'kode_produk' => 'P000004',
                'nama_produk' => 'Gula',
                'harga_beli' => '12000',
                'harga_jual' => '15000',
                'stok' => 150,
                'satuan' => 'Kg',
            ],
        );

        DB::table('produk')->insert($produk);
    }
}
