@extends('layouts.app')

@section('title', 'Kuisioner Tracer Study - Bekerja')

@section('content')
<section class="questionnaire-section">
    <div class="container">
        <h2>Form Kuisioner - Melanjutkan Pendidikan</h2>
        <form action="{{ route('questionnaire.submit') }}" method="post">
            @csrf
            <div class="question-card">
                <h3>Dalam berapa bulan Anda mendapatkan pekerjaan pertama?</h3>
                <input type="number" name="pekerjaan_pertama" required>
            </div>
            <div class="question-card">
                <h3>Berapa rata-rata pendapatan Anda per bulan?</h3>
                <input type="number" name="pendapatan" required>
            </div>
            <!-- Tambahkan pertanyaan lainnya sesuai kebutuhan -->
            <button type="submit">Kirim</button>
        </form>
    </div>
</section>
@endsection
