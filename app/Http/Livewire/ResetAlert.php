<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Penilaian;
use App\Models\Alternatif;

class ResetAlert extends Component
{
    public function render()
    {
        return view('livewire.reset-alert');
    }

    public function deleteAll()
    {
        Alternatif::truncate();
        Penilaian::truncate();

        return redirect('/dashboard/data-alternatif');
    }
}
