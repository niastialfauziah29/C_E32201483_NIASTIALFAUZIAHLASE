<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('detail_profile')->insert([
            'address' => 'Kabupaten Probolinggo',
            'nomor_tlp' => '082245813865',
            'ttl' => '2002-05-29',
            'foto' => 'picture.png',
        ]);
    }
}