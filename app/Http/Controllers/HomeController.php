<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Penilaian;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'SPK WP | Dashboard';

        $dataPenilaians = Penilaian::where('user_id', auth()->user()->id)->get()->sortBy('nilai_v');

        $dataKriterias = Kriteria::where('user_id', auth()->user()->id)->get();

        $formattedUpdatedAtKriteria = $dataKriterias->first()->getFormattedUpdatedAt();
        $dataKriteriaNama = $dataKriterias->pluck('namaKriteria');
        $dataKriteriaBobot = $dataKriterias->pluck('bobot');

        if ($dataPenilaians->isEmpty()) {
            $formattedUpdatedAt = 'Data Kosong';
            $dataNilaiV = null;
            $dataNamaAlternatif = null;
        } else {
            $formattedUpdatedAt = $dataPenilaians->first()->getFormattedUpdatedAt();
            $dataNilaiV = $dataPenilaians->pluck('nilai_v');
            $dataNamaAlternatif = $dataPenilaians->pluck('alternatif.namaAlternatif');
        }

        return view('dashboard.index', compact(
            'title',
            'dataKriteriaNama',
            'dataKriteriaBobot',
            'formattedUpdatedAtKriteria',
            'dataNamaAlternatif',
            'dataNilaiV',
            'formattedUpdatedAt',
        ));
    }

    public function cover()
    {
        $title = 'SPK WP | Welcome';

        return view('cover', compact('title'));
    }
}
