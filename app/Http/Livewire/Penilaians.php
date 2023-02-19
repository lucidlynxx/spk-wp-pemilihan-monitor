<?php

namespace App\Http\Livewire;

use App\Models\Penilaian;
use Livewire\Component;

class Penilaians extends Component
{
    public $penilaians, $alternatif_id, $C1_id, $C2_id, $C3_id, $C4_id, $C5_id, $C6_id, $C7_id, $penilaian_id;

    public $updateMode = false;

    public function render()
    {
        $this->penilaians = Penilaian::all();

        return view('livewire.penilaians', [
            'penilaians' => $this->penilaians
        ]);
    }

    private function resetInputFields()
    {
        $this->alternatif_id = '';
        $this->C1_id = '';
        $this->C2_id = '';
        $this->C3_id = '';
        $this->C4_id = '';
        $this->C5_id = '';
        $this->C6_id = '';
        $this->C7_id = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'alternatif_id' => 'required',
            'C1_id' => 'required',
            'C2_id' => 'required',
            'C3_id' => 'required',
            'C4_id' => 'required',
            'C5_id' => 'required',
            'C6_id' => 'required',
            'C7_id' => 'required',
        ]);

        Penilaian::create($validatedDate);

        $this->resetInputFields();

        $this->emit('penialaianStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $penilaian = Penilaian::where('id', $id)->first();
        $this->penilaian_id = $id;
        $this->alternatif_id = $penilaian->alternatif_id;
        $this->C1_id = $penilaian->C1_id;
        $this->C2_id = $penilaian->C2_id;
        $this->C3_id = $penilaian->C3_id;
        $this->C4_id = $penilaian->C4_id;
        $this->C5_id = $penilaian->C5_id;
        $this->C6_id = $penilaian->C6_id;
        $this->C7_id = $penilaian->C7_id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'alternatif_id' => 'required',
            'C1_id' => 'required',
            'C2_id' => 'required',
            'C3_id' => 'required',
            'C4_id' => 'required',
            'C5_id' => 'required',
            'C6_id' => 'required',
            'C7_id' => 'required',
        ]);

        if ($this->penilaian_id) {
            $penilaian = Penilaian::find($this->penilaian_id);
            $penilaian->update([
                'alternatif_id' => $this->alternatif_id,
                'C1_id' => $this->C1_id,
                'C2_id' => $this->C2_id,
                'C3_id' => $this->C3_id,
                'C4_id' => $this->C4_id,
                'C5_id' => $this->C5_id,
                'C6_id' => $this->C6_id,
                'C7_id' => $this->C7_id,
            ]);
            $this->updateMode = false;
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            Penilaian::where('id', $id)->delete();
        }
    }
}
