<?php

namespace Tests\Feature;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DataPerhitunganTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_user_can_access_data_perhitungan()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/dashboard/data-perhitungan');

        $response->assertStatus(200);
        $response->assertSee('Data Perhitungan');
    }

    public function test_auth_user_can_access_data_perhitungan_with_value()
    {
        $user = User::factory()->create();

        Kriteria::create([
            'user_id' => $user->id,
            'kodeKriteria' => 'C1',
            'slug' => 'C1',
            'namaKriteria' => 'Harga',
            'bobot' => '4',
            'jenis' => 'cost'
        ]);

        Kriteria::create([
            'user_id' => $user->id,
            'kodeKriteria' => 'C2',
            'slug' => 'C2',
            'namaKriteria' => 'Ukuran Layar',
            'bobot' => '3',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => $user->id,
            'kodeKriteria' => 'C3',
            'slug' => 'C3',
            'namaKriteria' => 'Resolusi Layar',
            'bobot' => '5',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => $user->id,
            'kodeKriteria' => 'C4',
            'slug' => 'C4',
            'namaKriteria' => 'Teknologi Panel',
            'bobot' => '5',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => $user->id,
            'kodeKriteria' => 'C5',
            'slug' => 'C5',
            'namaKriteria' => 'Refresh Rate',
            'bobot' => '3',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => $user->id,
            'kodeKriteria' => 'C6',
            'slug' => 'C6',
            'namaKriteria' => 'Response Time',
            'bobot' => '3',
            'jenis' => 'benefit'
        ]);

        Kriteria::create([
            'user_id' => $user->id,
            'kodeKriteria' => 'C7',
            'slug' => 'C7',
            'namaKriteria' => 'Color Gamut',
            'bobot' => '4',
            'jenis' => 'benefit'
        ]);

        $alternatif = Alternatif::create([
            'user_id' => $user->id,
            'kodeAlternatif' => 'A1',
            'slug' => 'a-1',
            'namaAlternatif' => 'MSI OPTIX MAG274QRF'
        ]);

        $penilaians = Penilaian::create([
            'user_id' => $user->id,
            'alternatif_id' => $alternatif->id,
            'slug' => 'aboggoba',
            'C1x' => 3,
            'C2x' => 2,
            'C3x' => 4,
            'C4x' => 5,
            'C5x' => 2,
            'C6x' => 4,
            'C7x' => 4,
        ]);

        $response = $this->actingAs($user)->get('/dashboard/data-perhitungan/hitung');

        $response->assertStatus(200);

        $response->assertSee(2.4730);

        $this->assertDatabaseHas('penilaians', [
            'user_id' => $user->id,
            'alternatif_id' => $alternatif->id,
            'slug' => 'aboggoba',
            'C1x' => 3,
            'C2x' => 2,
            'C3x' => 4,
            'C4x' => 5,
            'C5x' => 2,
            'C6x' => 4,
            'C7x' => 4,
            'C1_val' => 0.84979734455119,
            'C2_val' => 1.0800597388923,
            'C3_val' => 1.2926846475689,
            'C4_val' => 1.34722114225,
            'C5_val' => 1.0800597388923,
            'C6_val' => 1.1665290395761,
            'C7_val' => 1.2279878584104,
            'nilai_s' => 2.4730450762156,
            'nilai_v' => 1,
        ]);
    }
}
