<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Penilaian;
use App\Models\Alternatif;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dzaky Syahrizal',
            'username' => 'jumpinJackFlash',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        Alternatif::create([
            'user_id' => '1',
            'kodeAlternatif' => 'A1',
            'slug' => 'A1',
            'namaAlternatif' => 'Viewsonic Elite XG270'
        ]);
        Alternatif::create([
            'user_id' => '1',
            'kodeAlternatif' => 'A2',
            'slug' => 'A2',
            'namaAlternatif' => 'Philips 325M2CR2'
        ]);
        Alternatif::create([
            'user_id' => '1',
            'kodeAlternatif' => 'A3',
            'slug' => 'A3',
            'namaAlternatif' => 'LG 27UL500-W'
        ]);
        Alternatif::create([
            'user_id' => '1',
            'kodeAlternatif' => 'A4',
            'slug' => 'A4',
            'namaAlternatif' => 'Dell P2422H'
        ]);
        Alternatif::create([
            'user_id' => '1',
            'kodeAlternatif' => 'A5',
            'slug' => 'A5',
            'namaAlternatif' => 'MSI Optix G273'
        ]);
        Alternatif::create([
            'user_id' => '1',
            'kodeAlternatif' => 'A6',
            'slug' => 'A6',
            'namaAlternatif' => 'Samsung Odyssey G5'
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '1',
            'slug' => 'Viewsonic-Elite-XG270',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '3',
            'C4x' => '5',
            'C5x' => '3',
            'C6x' => '4',
            'C7x' => '2',
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '2',
            'slug' => 'Philips-325M2CR2',
            'C1x' => '2',
            'C2x' => '3',
            'C3x' => '4',
            'C4x' => '3',
            'C5x' => '2',
            'C6x' => '4',
            'C7x' => '3',
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '3',
            'slug' => 'LG-27UL500-W',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '5',
            'C4x' => '5',
            'C5x' => '1',
            'C6x' => '1',
            'C7x' => '2',
        ]);
        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '4',
            'slug' => 'Dell-P2422H',
            'C1x' => '2',
            'C2x' => '1',
            'C3x' => '3',
            'C4x' => '5',
            'C5x' => '1',
            'C6x' => '1',
            'C7x' => '2',
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '5',
            'slug' => 'MSI-Optix-G273',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '3',
            'C4x' => '5',
            'C5x' => '2',
            'C6x' => '4',
            'C7x' => '4',
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '6',
            'slug' => 'Samsung-Odyssey-G5',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '3',
            'C4x' => '3',
            'C5x' => '2',
            'C6x' => '4',
            'C7x' => '1',
        ]);

        // User::factory(1)->create();
    }
}
