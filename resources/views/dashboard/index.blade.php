@extends('dashboard.layouts.main')

@section('container')
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card text-bg-light mb-4">
      <div class="card-body">
        <h5 class="card-title">Weighted Product</h5>
        <p>Metode Weighted Product adalah salah satu metode analisis keputusan multikriteria yang digunakan untuk
          menyelesaikan masalah dalam pemilihan alternatif terbaik dari beberapa kriteria yang diberikan. Metode ini
          mempertimbangkan nilai bobot (weight) pada tiap-tiap kriteria yang digunakan dalam pengambilan keputusan.
        </p>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-chart-bar me-1"></i>
        Bar Chart Perbandingan setiap monitor
      </div>
      <div class="card-body"><canvas id="myBarChart" width="100%" height="33"></canvas></div>
      <div class="card-footer small text-muted">{{ $formattedUpdatedAt }}
      </div>
    </div>
  </div>
</main>

<script>
  let dataNilaiV = @json($dataNilaiV);
  let dataNamaAlternatif = @json($dataNamaAlternatif); 
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="js/chart-bar-demo.js"></script>
@endsection