<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = array(
            [
                'nama' => 'Alpha',
                'alamat' => 'Ketapang',
                'telepon' => '081234567899',
            ],
            [
                'nama' => 'Angger',
                'alamat' => 'Pilang',
                'telepon' => '089876543211',
            ],
            [
                'nama' => 'Ilyas',
                'alamat' => 'Kademangan',
                'telepon' => '081234987655',
            ],
        );

        DB::table('supplier')->insert($supplier);
    }
}
