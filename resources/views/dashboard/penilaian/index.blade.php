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
                    Daftar Penilaian
                </div>
                <div class="d-flex justify-content-start">
                    <div class="ms-3 mt-3">
                        <a href="/dashboard/data-penilaian/create" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Tambah Penilaian</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Alternatif</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($penilaians as $penilaian)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penilaian->alternatif->namaAlternatif }}</td>
                                <td>
                                    <div class="btn-group-sm" role="group">
                                        {{-- <a href="/dashboard/data-penilaian/{{ $penilaian->slug }}" class="btn btn-info"><i class="bi bi-eye"></i> Lihat</a> --}}
                                        <a href="/dashboard/data-penilaian/{{ $penilaian->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i> Ubah</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Alternatif</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

{{-- @push('modalPenilaian')
    <script>
        //button create post event
        $('body').on('click', '#btn-edit-penilaian', function () {

            let penilaian_id = $(this).data('id');

            //fetch detail post with ajax
            $.ajax({
                url: `/data-penilaian/${penilaian_id}`,
                type: "GET",
                cache: false,
                success:function(response){

                    //fill data to form
                    $('#alternatif-edit').val(response.data.alternatif_id);
                    $('#harga-edit').val(response.data.C1_id);
                    $('#ukuranLayar-edit').val(response.data.C2_id);
                    $('#resolusiLayar-edit').val(response.data.C3_id);
                    $('#teknologiPanel-edit').val(response.data.C4_id);
                    $('#refreshRate-edit').val(response.data.C5_id);
                    $('#responseTime-edit').val(response.data.C6_id);
                    $('#colorGamut-edit').val(response.data.C7_id);

                    //open modal
                    $('#modal-edit').modal('show');
                }
            });
            $('#modal-edit').modal('show');
        });

        console.log($('#alternatif-edit'));
    </script>
@endpush --}}