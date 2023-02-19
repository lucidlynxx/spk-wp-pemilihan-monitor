<?php

namespace App\Http\Livewire;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
use App\Models\SubKriteria6;
use App\Models\User;
use Livewire\Component;

class UserAlert extends Component
{
    public $userId;

    public function render()
    {
        return view('livewire.user-alert');
    }

    public function destroy($userId)
    {
        User::find($userId)->delete();
        Kriteria::where('user_id', $userId)->delete();
        SubKriteria::where('user_id', $userId)->delete();
        SubKriteria1::where('user_id', $userId)->delete();
        SubKriteria2::where('user_id', $userId)->delete();
        SubKriteria3::where('user_id', $userId)->delete();
        SubKriteria4::where('user_id', $userId)->delete();
        SubKriteria5::where('user_id', $userId)->delete();
        SubKriteria6::where('user_id', $userId)->delete();
        Alternatif::where('user_id', $userId)->delete();
        Penilaian::where('user_id', $userId)->delete();

        return redirect('/dashboard/data-user');
    }
}
