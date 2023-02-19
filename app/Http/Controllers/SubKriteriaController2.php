<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController2 extends Controller
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
     * @param  \App\Models\SubKriteria2  $subKriteria2
     * @return \Illuminate\Http\Response
     */
    public function show(SubKriteria2 $data_sub_kriteria2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria2  $subKriteria2
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria2 $data_sub_kriteria2)
    {
        if (Gate::denies('subkriteria2', $data_sub_kriteria2)) {
            abort(403);
        }

        return view('dashboard.subKriteria.edit2', [
            'title' => 'SPK WP | Ubah Data Sub Kriteria',
            'author' => 'Dzaky Syahrizal',
            'subkriteria' => $data_sub_kriteria2,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria2  $subKriteria2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKriteria2 $data_sub_kriteria2)
    {
        if (Gate::denies('subkriteria2', $data_sub_kriteria2)) {
            abort(403);
        }

        $rules = [
            'resolusiLayar' => 'required|max:255',
            'nResolusiLayar' => 'required|numeric|integer',
        ];

        if ($request->slug != $data_sub_kriteria2->slug) {
            $rules['slug'] = 'required|unique:sub_kriteria2s';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria2::where('id', $data_sub_kriteria2->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKriteria2  $subKriteria2
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKriteria2 $subKriteria2)
    {
        //
    }
}
