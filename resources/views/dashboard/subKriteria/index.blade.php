@extends('dashboard.layouts.main')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Sub Kriteria</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Sub Kriteria</li>
            </ol>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card text-bg-light mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Sub Kriteria Harga (C1)
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sub_kriterias as $sub_kriteria)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_kriteria->harga }}</td>
                                        <td>{{ $sub_kriteria->nHarga }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group">
                                                <a href="/dashboard/data-sub-kriteria/{{ $sub_kriteria->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card text-bg-light mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Sub Kriteria Ukuran Layar (C2)
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sub_kriteria1s as $sub_kriteria1)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_kriteria1->ukuranLayar }}</td>
                                        <td>{{ $sub_kriteria1->nUkuranLayar }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group">
                                                <a href="/dashboard/data-sub-kriteria1/{{ $sub_kriteria1->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card text-bg-light mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Sub Kriteria Resolusi Layar (C3)
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sub_kriteria2s as $sub_kriteria2)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_kriteria2->resolusiLayar }}</td>
                                        <td>{{ $sub_kriteria2->nResolusiLayar }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group">
                                                <a href="/dashboard/data-sub-kriteria2/{{ $sub_kriteria2->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card text-bg-light mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Sub Kriteria Teknologi Panel (C4)
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sub_kriteria3s as $sub_kriteria3)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_kriteria3->teknologiPanel }}</td>
                                        <td>{{ $sub_kriteria3->nTeknologiPanel }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group">
                                                <a href="/dashboard/data-sub-kriteria3/{{ $sub_kriteria3->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card text-bg-light mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Sub Kriteria Refresh Rate (C5)
                        </div>
                        <div class="card-body">
                            <table id="example4" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sub_kriteria4s as $sub_kriteria4)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_kriteria4->refreshRate }}</td>
                                        <td>{{ $sub_kriteria4->nRefreshRate }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group">
                                                <a href="/dashboard/data-sub-kriteria4/{{ $sub_kriteria4->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card text-bg-light mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Sub Kriteria Response Time (C6)
                        </div>
                        <div class="card-body">
                            <table id="example5" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sub_kriteria5s as $sub_kriteria5)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_kriteria5->responseTime }}</td>
                                        <td>{{ $sub_kriteria5->nResponseTime }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group">
                                                <a href="/dashboard/data-sub-kriteria5/{{ $sub_kriteria5->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card text-bg-light mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Sub Kriteria Color Gamut (C7)
                        </div>
                        <div class="card-body">
                            <table id="example6" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sub_kriteria6s as $sub_kriteria6)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_kriteria6->colorGamut }}</td>
                                        <td>{{ $sub_kriteria6->nColorGamut }}</td>
                                        <td>
                                            <div class="btn-group-sm" role="group">
                                                <a href="/dashboard/data-sub-kriteria6/{{ $sub_kriteria6->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Sub Kriteria</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('table')
    <script>
        $(document).ready(function () {
            $('#example1').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#example2').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#example3').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#example4').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#example5').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#example6').DataTable();
        });
    </script>
@endpush