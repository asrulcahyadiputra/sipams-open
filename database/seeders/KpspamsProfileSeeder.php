<?php

namespace Database\Seeders;

use App\Models\KpspamsProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KpspamsProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = [
            'nama'          => 'Divoc Global Technology (Demo)',
            'telp'          => '082181420044',
            'email'         => 'demo@demo.com',
            'alamat'        => 'Perumahan Danau Alam Pendidikan Blok F8',
            'provinsi'      => 'Sulawesi Selatan',
            'kota'          => 'Gowa',
            'kecamatan'     => 'Somba Opu',
            'kelurahan'     => 'Mawang'
        ];

        KpspamsProfile::create($profile);
    }
}
