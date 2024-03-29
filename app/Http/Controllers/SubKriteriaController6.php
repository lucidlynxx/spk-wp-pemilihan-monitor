<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSubKriteria6Request;
use App\Models\SubKriteria6;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController6 extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria6  $subKriteria6
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria6 $data_sub_kriteria6)
    {
        if (Gate::denies('subkriteria6', $data_sub_kriteria6)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Sub Kriteria';
        $subkriteria = $data_sub_kriteria6;

        return view('dashboard.subKriteria.edit6', compact('title', 'subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria6  $subKriteria6
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteria6Request $request, SubKriteria6 $data_sub_kriteria6)
    {
        if (Gate::denies('subkriteria6', $data_sub_kriteria6)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriteria6->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriteria6s'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria6::where('id', $data_sub_kriteria6->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }
}
