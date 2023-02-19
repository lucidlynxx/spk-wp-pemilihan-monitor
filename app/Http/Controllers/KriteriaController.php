<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Http\Requests\StoreKriteriaRequest;
use App\Http\Requests\UpdateKriteriaRequest;
use Illuminate\Support\Facades\Gate;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kriteria.index', [
            'title' => 'SPK WP | Data Kriteria',
            'author' => 'Dzaky Syahrizal',
            'kriterias' => Kriteria::get()->where('user_id', auth()->user()->id)
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
     * @param  \App\Http\Requests\StoreKriteriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKriteriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $data_kriterium)
    {
        if (Gate::denies('kriteria', $data_kriterium)) {
            abort(403);
        }

        return view('dashboard.kriteria.edit', [
            'title' => 'SPK WP | Ubah Data Kriteria',
            'author' => 'Dzaky Syahrizal',
            'kriteria' => $data_kriterium,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKriteriaRequest  $request
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKriteriaRequest $request, Kriteria $data_kriterium)
    {
        if (Gate::denies('kriteria', $data_kriterium)) {
            abort(403);
        }

        $rules = [
            'kodeKriteria' => 'required|max:255',
            'namaKriteria' => 'required',
            'bobot' => 'required|numeric|integer',
            'jenis' => 'required',
        ];

        if ($request->slug != $data_kriterium->slug) {
            $rules['slug'] = 'required|unique:kriterias';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        Kriteria::where('id', $data_kriterium->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Kriteria telah diubah.');

        return redirect('/dashboard/data-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriteria $kriteria)
    {
        //
    }
}
