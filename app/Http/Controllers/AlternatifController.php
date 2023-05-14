<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Http\Requests\StoreAlternatifRequest;
use App\Http\Requests\UpdateAlternatifRequest;
// use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Gate;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.alternatif.index', [
            'title' => 'SPK WP | Data Alternatif',
            'author' => 'Dzaky Syahrizal',
            'alternatifs' => Alternatif::get()->where('user_id', auth()->user()->id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alternatif.create', [
            'title' => 'SPK WP | Data Alternatif',
            'author' => 'Dzaky Syahrizal',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlternatifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlternatifRequest $request)
    {
        // $request->slug = SlugService::createSlug(Alternatif::class, 'slug', $request->kodeAlternatif);
        $validatedData = $request->validated();

        $validatedData['user_id'] = auth()->user()->id;

        Alternatif::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Alternatif telah ditambahkan.');

        return redirect('/dashboard/data-alternatif');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $data_alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $data_alternatif)
    {
        if (Gate::denies('alternatif', $data_alternatif)) {
            abort(403);
        }

        return view('dashboard.alternatif.edit', [
            'title' => 'SPK WP | Ubah Data Alternatif',
            'author' => 'Dzaky Syahrizal',
            'alternatif' => $data_alternatif,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlternatifRequest  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlternatifRequest $request, Alternatif $data_alternatif)
    {
        if (Gate::denies('alternatif', $data_alternatif)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_alternatif->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:alternatifs'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        Alternatif::where('id', $data_alternatif->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Alternatif telah diubah.');

        return redirect('/dashboard/data-alternatif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif $alternatif)
    {
        //
    }
}
