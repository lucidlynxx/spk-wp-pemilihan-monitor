@extends('dashboard.layouts.main')

@section('container')
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
      <div class="col-lg-6">
        <div class="card text-bg-light mb-4">
          <div class="card-body">
            <h5 class="card-title">Weighted Product</h5>
            <p>Sistem Pendukung Keputusan pemilihan monitor komputer menggunakan metode
              Weighted Product memberikan
              bantuan kepada pengguna dalam memilih monitor yang sesuai dengan preferensi dan kriteria yang telah
              ditetapkan. Sistem ini memanfaatkan metode Weighted Product untuk menghitung bobot dan menentukan
              peringkat monitor berdasarkan nilai v tertinggi. Dengan menggabungkan bobot kriteria dan perhitungan
              nilai
              v, sistem ini dapat memberikan
              rekomendasi monitor komputer terbaik berdasarkan hasil perhitungan nilai v tertinggi.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-chart-pie me-1"></i>
            Pie Chart Perbandingan nilai bobot setiap kriteria
          </div>
          <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
          <div class="card-footer small text-muted">{{ $formattedUpdatedAtKriteria }}</div>
        </div>
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
  let dataKriteriaNama = @json($dataKriteriaNama);
  let dataKriteriaBobot = @json($dataKriteriaBobot);
  let dataNilaiV = @json($dataNilaiV);
  let dataNamaAlternatif = @json($dataNamaAlternatif); 
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="js/chart-bar-demo.js"></script>
<script src="js/chart-pie-demo.js"></script>
@endsection