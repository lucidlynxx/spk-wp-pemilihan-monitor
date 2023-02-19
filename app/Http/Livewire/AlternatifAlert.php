<?php

namespace App\Http\Livewire;

use App\Models\Alternatif;
use App\Models\Penilaian;
use Livewire\Component;

class AlternatifAlert extends Component
{
    public $alternatifId;

    public function render()
    {
        return view('livewire.alternatif-alert');
    }

    public function destroy($alternatifId)
    {
        Alternatif::find($alternatifId)->delete();
        Penilaian::where('alternatif_id', $alternatifId)->delete();

        return redirect('/dashboard/data-alternatif');
    }
}
