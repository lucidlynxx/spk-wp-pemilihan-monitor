<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Alternatif;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
use App\Models\SubKriteria6;
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

        Kriteria::create([
            'user_id' => '1',
            'kodeKriteria' => 'C1',
            'slug' => 'C1',
            'namaKriteria' => 'Harga',
            'bobot' => '4',
            'jenis' => 'cost'
        ]);

        Kriteria::create([
            'user_id' => '1',
            'kodeKriteria' => 'C2',
            'slug' => 'C2',
            'namaKriteria' => 'Ukuran Layar',
            'bobot' => '3',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => '1',
            'kodeKriteria' => 'C3',
            'slug' => 'C3',
            'namaKriteria' => 'Resolusi Layar',
            'bobot' => '5',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => '1',
            'kodeKriteria' => 'C4',
            'slug' => 'C4',
            'namaKriteria' => 'Teknologi Panel',
            'bobot' => '5',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => '1',
            'kodeKriteria' => 'C5',
            'slug' => 'C5',
            'namaKriteria' => 'Refresh Rate',
            'bobot' => '3',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => '1',
            'kodeKriteria' => 'C6',
            'slug' => 'C6',
            'namaKriteria' => 'Response Time',
            'bobot' => '3',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => '1',
            'kodeKriteria' => 'C7',
            'slug' => 'C7',
            'namaKriteria' => 'Color Gamut',
            'bobot' => '4',
            'jenis' => 'benefit'
        ]);

        SubKriteria::create([
            'user_id' => '1',
            'harga' => 'Rp 1.5 juta - Rp 3 juta',
            'slug' => 'Rp-1.5-juta---Rp-3-juta',
            'nHarga' => '1'
        ]);

        SubKriteria::create([
            'user_id' => '1',
            'harga' => 'Rp 3 juta - Rp 6 juta',
            'slug' => 'Rp-3-juta---Rp-6-juta',
            'nHarga' => '2'
        ]);

        SubKriteria::create([
            'user_id' => '1',
            'harga' => 'Rp 6 juta - Rp 9 juta',
            'slug' => 'Rp-6-juta---Rp-9-juta',
            'nHarga' => '3'
        ]);

        SubKriteria::create([
            'user_id' => '1',
            'harga' => 'Rp 9 juta - Rp 12 juta',
            'slug' => 'Rp-9-juta---Rp-12-juta',
            'nHarga' => '4'
        ]);

        SubKriteria::create([
            'user_id' => '1',
            'harga' => 'Rp 12 juta - Rp 15 juta',
            'slug' => 'Rp-12-juta---Rp-15-juta',
            'nHarga' => '5'
        ]);

        SubKriteria1::create([
            'user_id' => '1',
            'ukuranLayar' => '18.5 inch - 24.6 inch',
            'slug' => '18.5-inch---24.6-inch',
            'nUkuranLayar' => '1'
        ]);

        SubKriteria1::create([
            'user_id' => '1',
            'ukuranLayar' => '25 inch - 30.7 inch',
            'slug' => '25-inch---30.7-inch',
            'nUkuranLayar' => '2'
        ]);

        SubKriteria1::create([
            'user_id' => '1',
            'ukuranLayar' => '31 inch - 36.8 inch',
            'slug' => '31-inch---36.8-inch',
            'nUkuranLayar' => '3'
        ]);

        SubKriteria1::create([
            'user_id' => '1',
            'ukuranLayar' => '37 inch - 42.9 inch',
            'slug' => '37-inch---42.9-inch',
            'nUkuranLayar' => '4'
        ]);

        SubKriteria1::create([
            'user_id' => '1',
            'ukuranLayar' => '43 inch - 49 inch',
            'slug' => '43-inch---49-inch',
            'nUkuranLayar' => '5'
        ]);

        SubKriteria2::create([
            'user_id' => '1',
            'resolusiLayar' => '720p/768p (HD)',
            'slug' => '720p-768p-(HD)',
            'nResolusiLayar' => '1'
        ]);

        SubKriteria2::create([
            'user_id' => '1',
            'resolusiLayar' => '900p (HD+)',
            'slug' => '900p-(HD+)',
            'nResolusiLayar' => '2'
        ]);

        SubKriteria2::create([
            'user_id' => '1',
            'resolusiLayar' => '1080p (FHD)',
            'slug' => '1080p-(FHD)',
            'nResolusiLayar' => '3'
        ]);

        SubKriteria2::create([
            'user_id' => '1',
            'resolusiLayar' => '1440p (QHD/WQHD/2K)',
            'slug' => '1440p-(QHD-WQHD-2K)',
            'nResolusiLayar' => '4'
        ]);

        SubKriteria2::create([
            'user_id' => '1',
            'resolusiLayar' => '2160p (Ultra HD/4K)',
            'slug' => '2160p-(Ultra-HD-4K)',
            'nResolusiLayar' => '5'
        ]);

        SubKriteria3::create([
            'user_id' => '1',
            'teknologiPanel' => 'TN (Twisted Nematic)',
            'slug' => 'TN-(Twisted-Nematic)',
            'nteknologiPanel' => '1'
        ]);

        SubKriteria3::create([
            'user_id' => '1',
            'teknologiPanel' => 'PLS (Plane to Line Switching)',
            'slug' => 'PLS-(Plane-to-Line-Switching)',
            'nteknologiPanel' => '2'
        ]);

        SubKriteria3::create([
            'user_id' => '1',
            'teknologiPanel' => 'VA (Vertical Alignment)',
            'slug' => 'VA-(Vertical-Alignment)',
            'nteknologiPanel' => '3'
        ]);

        SubKriteria3::create([
            'user_id' => '1',
            'teknologiPanel' => 'SVA (Super Vertical Alignment)',
            'slug' => 'SVA-(Super-Vertical-Alignment)',
            'nteknologiPanel' => '4'
        ]);

        SubKriteria3::create([
            'user_id' => '1',
            'teknologiPanel' => 'IPS (In Plane Switching)',
            'slug' => 'IPS-(In-Plane-Switching)',
            'nteknologiPanel' => '5'
        ]);

        SubKriteria4::create([
            'user_id' => '1',
            'refreshRate' => '60 Hz - 75 Hz',
            'slug' => '60-Hz---75-Hz',
            'nRefreshRate' => '1'
        ]);

        SubKriteria4::create([
            'user_id' => '1',
            'refreshRate' => '144 Hz - 165 Hz',
            'slug' => '144-Hz---165-Hz',
            'nRefreshRate' => '2'
        ]);

        SubKriteria4::create([
            'user_id' => '1',
            'refreshRate' => '166 Hz - 240 Hz',
            'slug' => '166-Hz---240-Hz',
            'nRefreshRate' => '3'
        ]);

        SubKriteria4::create([
            'user_id' => '1',
            'refreshRate' => '241 Hz - 300 Hz',
            'slug' => '241-Hz---300-Hz',
            'nRefreshRate' => '4'
        ]);

        SubKriteria4::create([
            'user_id' => '1',
            'refreshRate' => '301 Hz - 360 Hz',
            'slug' => '301-Hz---360-Hz',
            'nRefreshRate' => '5'
        ]);

        SubKriteria5::create([
            'user_id' => '1',
            'responseTime' => '6 ms - 5 ms',
            'slug' => '6-ms---5-ms',
            'nResponseTime' => '1'
        ]);

        SubKriteria5::create([
            'user_id' => '1',
            'responseTime' => '4 ms - 3 ms',
            'slug' => '4-ms---3-ms',
            'nResponseTime' => '2'
        ]);

        SubKriteria5::create([
            'user_id' => '1',
            'responseTime' => '2 ms',
            'slug' => '2-ms',
            'nResponseTime' => '3'
        ]);

        SubKriteria5::create([
            'user_id' => '1',
            'responseTime' => '1 ms',
            'slug' => '1-ms',
            'nResponseTime' => '4'
        ]);

        SubKriteria5::create([
            'user_id' => '1',
            'responseTime' => '0.5 ms',
            'slug' => '0.5-ms',
            'nResponseTime' => '5'
        ]);

        SubKriteria6::create([
            'user_id' => '1',
            'colorGamut' => 'NTSC 72%',
            'slug' => 'NTSC-72',
            'nColorGamut' => '1'
        ]);

        SubKriteria6::create([
            'user_id' => '1',
            'colorGamut' => 'sRGB 90% - 100%',
            'slug' => 'sRGB-90---100',
            'nColorGamut' => '2'
        ]);

        SubKriteria6::create([
            'user_id' => '1',
            'colorGamut' => 'AdobeRGB 90% - 100%',
            'slug' => 'AdobeRGB-90---100',
            'nColorGamut' => '3'
        ]);

        SubKriteria6::create([
            'user_id' => '1',
            'colorGamut' => 'DCI-P3 90% - 100%',
            'slug' => 'DCI-P3-90---100',
            'nColorGamut' => '4'
        ]);

        SubKriteria6::create([
            'user_id' => '1',
            'colorGamut' => 'Rec. 2020',
            'slug' => 'Rec.-2020',
            'nColorGamut' => '5'
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
