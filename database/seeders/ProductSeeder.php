<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        	'nama' => 'Susu Sapi',
            'harga' => 15000,
            'stok' => 100,
            'hewan_id' => 1,
            'gambar' => 'telur.png'
        ]);
    }
}
