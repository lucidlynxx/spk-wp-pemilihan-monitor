@extends('dashboard.layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Penilaian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Penilaian</li>
        </ol>
        <div class="card text-bg-light mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Detail Data Penilaian
            </div>
            <div class="d-flex justify-content-start">
                <div class="ms-3 mt-3">
                    <a href="/dashboard/data-penilaian" class="btn btn-success btn-sm"><i class="bi bi-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Kode Alternatif {{ $penilaian->alternatif->kodeAlternatif }}</td>
                            <td>{{ $penilaian->alternatif->namaAlternatif }}</td>
                        </tr>
                        <tr>
                            <td>Harga (C1)</td>
                            <td>{{ $penilaian->subKriteria->harga }}</td>
                        </tr>
                        <tr>
                            <td>Ukuran Layar (C2)</td>
                            <td>{{ $penilaian->subKriteria1->ukuranLayar }}</td>
                        </tr>
                        <tr>
                            <td>Resolusi Layar (C3)</td>
                            <td>{{ $penilaian->subKriteria2->resolusiLayar }}</td>
                        </tr>
                        <tr>
                            <td>Teknologi Panel (C4)</td>
                            <td>{{ $penilaian->subKriteria3->teknologiPanel }}</td>
                        </tr>
                        <tr>
                            <td>Refresh Rate (C5)</td>
                            <td>{{ $penilaian->subKriteria4->refreshRate }}</td>
                        </tr>
                        <tr>
                            <td>Response Time (C6)</td>
                            <td>{{ $penilaian->subKriteria5->responseTime }}</td>
                        </tr>
                        <tr>
                            <td>Color Gamut (C7)</td>
                            <td>{{ $penilaian->subKriteria6->colorGamut }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection