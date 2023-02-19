<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController4 extends Controller
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
     * @param  \App\Models\SubKriteria4  $subKriteria4
     * @return \Illuminate\Http\Response
     */
    public function show(SubKriteria4 $subKriteria4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria4  $subKriteria4
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria4 $data_sub_kriteria4)
    {
        if (Gate::denies('subkriteria4', $data_sub_kriteria4)) {
            abort(403);
        }

        return view('dashboard.subKriteria.edit4', [
            'title' => 'SPK WP | Ubah Data Sub Kriteria',
            'author' => 'Dzaky Syahrizal',
            'subkriteria' => $data_sub_kriteria4,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria4  $subKriteria4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKriteria4 $data_sub_kriteria4)
    {
        if (Gate::denies('subkriteria4', $data_sub_kriteria4)) {
            abort(403);
        }

        $rules = [
            'refreshRate' => 'required|max:255',
            'nRefreshRate' => 'required|numeric|integer',
        ];

        if ($request->slug != $data_sub_kriteria4->slug) {
            $rules['slug'] = 'required|unique:kriteria4s';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria4::where('id', $data_sub_kriteria4->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKriteria4  $subKriteria4
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKriteria4 $subKriteria4)
    {
        //
    }
}
