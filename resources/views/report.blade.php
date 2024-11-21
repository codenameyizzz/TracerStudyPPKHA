@extends('layouts.app')

@section('title', 'Tracer Study Report')

@section('content')
<section class="report-section">
  <div class="container">
    <h2>Tracer Study Report</h2>
    <p>Pilih tahun angkatan untuk melihat hasil tracer study.</p>
    <div class="year-cards">
      <!-- Card Angkatan 2024 -->
      <div class="year-card">
        <h3>Angkatan 2024</h3>
        <p>Lihat hasil tracer study untuk angkatan 2024.</p>
        <a href="{{ url('/report/2024') }}" class="btn">Lihat Laporan</a>
      </div>
      <!-- Tambahkan card lainnya sesuai kebutuhan -->
    </div>
  </div>
</section>
@endsection