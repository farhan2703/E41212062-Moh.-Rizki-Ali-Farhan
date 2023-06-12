<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

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
        FacadesDB::table('detail_profile')->insert([
            'address' => 'Probolinggo',
            'nomor_tlp' => '082331600262',
            'ttl' => '2003-03-27',
            'foto' => 'foto_profil.png'
        ]);
    }
}
