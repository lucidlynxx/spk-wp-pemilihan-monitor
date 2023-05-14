<?php

namespace App\Http\Controllers;

use App\Services\WeightedProductService;

class DataPerhitungan extends Controller
{
    public function index()
    {
        return view('dashboard.perhitungan.index', [
            'title' => 'SPK WP | Data Perhitungan',
            'author' => 'Dzaky Syahrizal',
        ]);
    }

    public function hitung(WeightedProductService $weightedProduct)
    {
        $alternatifs = $weightedProduct->getAllAlternatifs();

        list($penilaians, $kriterias) = $weightedProduct->calculate();
        $total_nilai_s = $penilaians->sum('nilai_s');

        if ($penilaians->isEmpty() || $alternatifs->isEmpty()) {
            return view('dashboard.perhitungan.empty', [
                'title' => 'SPK WP | Data Perhitungan',
                'author' => 'Dzaky Syahrizal',
            ]);
        } else {
            return view('dashboard.perhitungan.result', [
                'title' => 'SPK WP | Data Perhitungan',
                'author' => 'Dzaky Syahrizal',
                'penilaians' => $penilaians,
                'kriterias' => $kriterias,
                'total_nilai_s' => $total_nilai_s
            ]);
        }
    }
}
