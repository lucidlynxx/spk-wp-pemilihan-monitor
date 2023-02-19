<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubKriteria3  $subKriteria3
     * @return \Illuminate\Http\Response
     */
    public function show(SubKriteria3 $subKriteria3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria3  $subKriteria3
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria3 $data_sub_kriteria3)
    {
        if (Gate::denies('subkriteria3', $data_sub_kriteria3)) {
            abort(403);
        }

        return view('dashboard.subKriteria.edit3', [
            'title' => 'SPK WP | Ubah Data Sub Kriteria',
            'author' => 'Dzaky Syahrizal',
            'subkriteria' => $data_sub_kriteria3,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria3  $subKriteria3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKriteria3 $data_sub_kriteria3)
    {
        if (Gate::denies('subkriteria3', $data_sub_kriteria3)) {
            abort(403);
        }

        $rules = [
            'teknologiPanel' => 'required|max:255',
            'nTeknologiPanel' => 'required|numeric|integer',
        ];

        if ($request->slug != $data_sub_kriteria3->slug) {
            $rules['slug'] = 'required|unique:kriteria3s';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria3::where('id', $data_sub_kriteria3->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKriteria3  $subKriteria3
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKriteria3 $subKriteria3)
    {
        //
    }
}
