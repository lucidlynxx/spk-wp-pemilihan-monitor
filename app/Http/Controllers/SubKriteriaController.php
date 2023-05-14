<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria;
use App\Http\Requests\UpdateSubKriteriaRequest;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
use App\Models\SubKriteria6;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.subKriteria.index', [
            'title' => 'SPK WP | Data Sub Kriteria',
            'author' => 'Dzaky Syahrizal',
            'sub_kriterias' => SubKriteria::get()->where('user_id', auth()->user()->id),
            'sub_kriteria1s' => SubKriteria1::get()->where('user_id', auth()->user()->id),
            'sub_kriteria2s' => SubKriteria2::get()->where('user_id', auth()->user()->id),
            'sub_kriteria3s' => SubKriteria3::get()->where('user_id', auth()->user()->id),
            'sub_kriteria4s' => SubKriteria4::get()->where('user_id', auth()->user()->id),
            'sub_kriteria5s' => SubKriteria5::get()->where('user_id', auth()->user()->id),
            'sub_kriteria6s' => SubKriteria6::get()->where('user_id', auth()->user()->id),
        ]);
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
     * @param  \App\Http\Requests\StoreSubKriteriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreSubKriteriaRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubKriteria  $subKriteria
     * @return \Illuminate\Http\Response
     */
    public function show(SubKriteria $data_sub_kriterium)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria  $subKriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria $data_sub_kriterium)
    {
        if (Gate::denies('subkriteria', $data_sub_kriterium)) {
            abort(403);
        }

        return view('dashboard.subKriteria.edit', [
            'title' => 'SPK WP | Ubah Data Sub Kriteria',
            'author' => 'Dzaky Syahrizal',
            'subkriteria' => $data_sub_kriterium,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubKriteriaRequest  $request
     * @param  \App\Models\SubKriteria  $subKriteria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteriaRequest $request, SubKriteria $data_sub_kriterium)
    {
        if (Gate::denies('subkriteria', $data_sub_kriterium)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriterium->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriterias'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria::where('id', $data_sub_kriterium->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKriteria  $subKriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubKriteria $subKriteria)
    {
        //
    }
}
