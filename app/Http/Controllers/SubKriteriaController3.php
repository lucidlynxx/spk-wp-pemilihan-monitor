<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSubKriteria3Request;
use App\Models\SubKriteria3;
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
    // public function store(Request $request)
    // {
    //     //
    // }

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

        $title = 'SPK WP | Ubah Data Sub Kriteria';
        $subkriteria = $data_sub_kriteria3;

        return view('dashboard.subKriteria.edit3', compact('title', 'subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria3  $subKriteria3
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteria3Request $request, SubKriteria3 $data_sub_kriteria3)
    {
        if (Gate::denies('subkriteria3', $data_sub_kriteria3)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriteria3->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriteria3s'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

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
