<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController1 extends Controller
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
     * @param  \App\Models\SubKriteria1  $subKriteria1
     * @return \Illuminate\Http\Response
     */
    public function show(SubKriteria1 $subKriteria1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria1  $subKriteria1
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria1 $data_sub_kriteria1)
    {
        if (Gate::denies('subkriteria1', $data_sub_kriteria1)) {
            abort(403);
        }

        return view('dashboard.subKriteria.edit1', [
            'title' => 'SPK WP | Ubah Data Sub Kriteria',
            'author' => 'Dzaky Syahrizal',
            'subkriteria' => $data_sub_kriteria1,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria1  $subKriteria1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKriteria1 $data_sub_kriteria1)
    {
        if (Gate::denies('subkriteria1', $data_sub_kriteria1)) {
            abort(403);
        }

        $rules = [
            'ukuranLayar' => 'required|max:255',
            'nUkuranLayar' => 'required|numeric|integer',
        ];

        if ($request->slug != $data_sub_kriteria1->slug) {
            $rules['slug'] = 'required|unique:sub_kriteria1s';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria1::where('id', $data_sub_kriteria1->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKriteria1  $subKriteria1
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKriteria1 $subKriteria1)
    {
        //
    }
}
