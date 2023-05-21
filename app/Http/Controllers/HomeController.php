<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Penilaian;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'SPK WP | Dashboard';

        $dataPenilaians = Penilaian::where('user_id', auth()->user()->id)->get();

        if ($dataPenilaians->isEmpty()) {
            $formattedUpdatedAt = 'Data Kosong';
            $dataNilaiV = null;
            $dataNamaAlternatif = null;
            return view('dashboard.index', compact('title', 'formattedUpdatedAt', 'dataNilaiV', 'dataNamaAlternatif'));
        }

        $dataWaktuUpdate = $dataPenilaians->pluck('updated_at');

        $WaktuUpdate = $dataWaktuUpdate[0];

        if ($WaktuUpdate->isToday()) {
            $formattedUpdatedAt = 'Updated today at ' . $WaktuUpdate->format('h:i A');
        } elseif ($WaktuUpdate->isYesterday()) {
            $formattedUpdatedAt = 'Updated yesterday at ' . $WaktuUpdate->format('h:i A');
        } else {
            $formattedUpdatedAt = 'Updated on ' . $WaktuUpdate->format('F j, Y') . ' at ' . $WaktuUpdate->format('h:i A');
        }

        $dataNilaiV = $dataPenilaians->pluck('nilai_v');

        $dataNamaAlternatif = Alternatif::where('user_id', auth()->user()->id)->pluck('namaAlternatif');

        return view('dashboard.index', compact('title', 'formattedUpdatedAt', 'dataNilaiV', 'dataNamaAlternatif'));
    }

    public function cover()
    {
        $title = 'SPK WP | Welcome';

        return view('cover', compact('title'));
    }
}
