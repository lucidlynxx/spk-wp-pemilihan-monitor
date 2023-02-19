<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController5 extends Controller
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
     * @param  \App\Models\SubKriteria5  $subKriteria5
     * @return \Illuminate\Http\Response
     */
    public function show(SubKriteria5 $subKriteria5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria5  $subKriteria5
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria5 $data_sub_kriteria5)
    {
        if (Gate::denies('subkriteria5', $data_sub_kriteria5)) {
            abort(403);
        }

        return view('dashboard.subKriteria.edit5', [
            'title' => 'SPK WP | Ubah Data Sub Kriteria',
            'author' => 'Dzaky Syahrizal',
            'subkriteria' => $data_sub_kriteria5,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria5  $subKriteria5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKriteria5 $data_sub_kriteria5)
    {
        if (Gate::denies('subkriteria5', $data_sub_kriteria5)) {
            abort(403);
        }

        $rules = [
            'responseTime' => 'required|max:255',
            'nResponseTime' => 'required|numeric|integer',
        ];

        if ($request->slug != $data_sub_kriteria5->slug) {
            $rules['slug'] = 'required|unique:kriteria5s';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria5::where('id', $data_sub_kriteria5->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKriteria5  $subKriteria5
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKriteria5 $subKriteria5)
    {
        //
    }
}
