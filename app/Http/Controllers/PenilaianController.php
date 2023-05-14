<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Http\Requests\StorePenilaianRequest;
use App\Http\Requests\UpdatePenilaianRequest;
use App\Models\Alternatif;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
use App\Models\SubKriteria6;
use Illuminate\Support\Facades\Gate;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.penilaian.index', [
            'title' => 'SPK WP | Data Penilaian',
            'author' => 'Dzaky Syahrizal',
            'penilaians' => Penilaian::get()->where('user_id', auth()->user()->id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.penilaian.create', [
            'title' => 'SPK WP | Data Penilaian',
            'author' => 'Dzaky Syahrizal',
            'alternatifs' => Alternatif::get()->where('user_id', auth()->user()->id),
            'C1s' => SubKriteria::get()->where('user_id', auth()->user()->id),
            'C2s' => SubKriteria1::get()->where('user_id', auth()->user()->id),
            'C3s' => SubKriteria2::get()->where('user_id', auth()->user()->id),
            'C4s' => SubKriteria3::get()->where('user_id', auth()->user()->id),
            'C5s' => SubKriteria4::get()->where('user_id', auth()->user()->id),
            'C6s' => SubKriteria5::get()->where('user_id', auth()->user()->id),
            'C7s' => SubKriteria6::get()->where('user_id', auth()->user()->id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenilaianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenilaianRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['user_id'] = auth()->user()->id;

        Penilaian::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Penilaian telah ditambahkan.');

        return redirect('/dashboard/data-penilaian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function show(Penilaian $data_penilaian)
    {
        // if (Gate::denies('penilaian', $data_penilaian)) {
        //     abort(403);
        // }

        // return view('dashboard.penilaian.show', [
        //     'title' => 'SPK WP | Detail Data Penilaian',
        //     'author' => 'Dzaky Syahrizal',
        //     'penilaian' => $data_penilaian
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaian $data_penilaian)
    {
        if (Gate::denies('penilaian', $data_penilaian)) {
            abort(403);
        }

        return view('dashboard.penilaian.edit', [
            'title' => 'SPK WP | Ubah Data Penilaian',
            'author' => 'Dzaky Syahrizal',
            'penilaian' => $data_penilaian,
            'alternatifs' => Alternatif::get()->where('user_id', auth()->user()->id),
            'C1s' => SubKriteria::get()->where('user_id', auth()->user()->id),
            'C2s' => SubKriteria1::get()->where('user_id', auth()->user()->id),
            'C3s' => SubKriteria2::get()->where('user_id', auth()->user()->id),
            'C4s' => SubKriteria3::get()->where('user_id', auth()->user()->id),
            'C5s' => SubKriteria4::get()->where('user_id', auth()->user()->id),
            'C6s' => SubKriteria5::get()->where('user_id', auth()->user()->id),
            'C7s' => SubKriteria6::get()->where('user_id', auth()->user()->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenilaianRequest  $request
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenilaianRequest $request, Penilaian $data_penilaian)
    {
        if (Gate::denies('penilaian', $data_penilaian)) {
            abort(403);
        }

        $validatedData = $request->validated();

        $validatedData['user_id'] = auth()->user()->id;

        Penilaian::where('id', $data_penilaian->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Penilaian telah diubah.');

        return redirect('/dashboard/data-penilaian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penilaian $penilaian)
    {
        //
    }
}
