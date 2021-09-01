<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hewans')->insert([
        	'nama_hewan' => 'Domba',
        	'gambar' => 'domba.png',
        ]);
    }
}
