<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Penilaian;

class DataPerhitungan extends Controller
{
    public function index()
    {
        return view('dashboard.perhitungan.index', [
            'title' => 'SPK WP | Data Perhitungan',
            'author' => 'Dzaky Syahrizal',
        ]);
    }

    public function hitung()
    {
        $penilaians = Penilaian::where('user_id', auth()->user()->id)->get();
        $alternatifs = Alternatif::where('user_id', auth()->user()->id)->get();

        if ($penilaians->isEmpty() || $alternatifs->isEmpty()) {
            return view('dashboard.perhitungan.empty', [
                'title' => 'SPK WP | Data Perhitungan',
                'author' => 'Dzaky Syahrizal',
            ]);
        }

        //* Normalisasi Bobot Kriteria W
        $kriterias = Kriteria::where('user_id', auth()->user()->id)->get();
        $totalBobot = $kriterias->sum('bobot');

        foreach ($kriterias as $kriteria) {
            if ($kriteria->jenis == 'cost') {
                $kriteria->w_normalisasi = ($kriteria->bobot / $totalBobot) * -1;
                $kriteria->save();
            } else {
                $kriteria->w_normalisasi = ($kriteria->bobot / $totalBobot) * 1;
                $kriteria->save();
            }
        }

        //* Nilai S
        $w_normalisasi = $kriterias->pluck('w_normalisasi');

        foreach ($penilaians as $penilaian) {
            $penilaian->C1_val = pow($penilaian->C1x, $w_normalisasi[0]);
            $penilaian->save();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->C2_val = pow($penilaian->C2x, $w_normalisasi[1]);
            $penilaian->save();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->C3_val = pow($penilaian->C3x, $w_normalisasi[2]);
            $penilaian->save();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->C4_val = pow($penilaian->C4x, $w_normalisasi[3]);
            $penilaian->save();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->C5_val = pow($penilaian->C5x, $w_normalisasi[4]);
            $penilaian->save();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->C6_val = pow($penilaian->C6x, $w_normalisasi[5]);
            $penilaian->save();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->C7_val = pow($penilaian->C7x, $w_normalisasi[6]);
            $penilaian->save();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->nilai_s = $penilaian->C1_val * $penilaian->C2_val * $penilaian->C3_val * $penilaian->C4_val * $penilaian->C5_val * $penilaian->C6_val * $penilaian->C7_val;
            $penilaian->save();
        }

        $total_nilai_s = $penilaians->sum('nilai_s');

        //* Nilai V
        foreach ($penilaians as $penilaian) {
            $penilaian->nilai_v = $penilaian->nilai_s / $total_nilai_s;
            $penilaian->save();
        }

        return view('dashboard.perhitungan.result', [
            'title' => 'SPK WP | Data Perhitungan',
            'author' => 'Dzaky Syahrizal',
            'penilaians' => $penilaians,
            'kriterias' => $kriterias,
            'total_nilai_s' => $total_nilai_s
        ]);
    }
}
