@extends('layouts.app')

@section('title', 'Kuisioner Tracer Study')

@section('content')
<section class="questionnaire-section">
    <div class="container">
        <h2>User Survey</h2>
        <form action="{{ route('questionnaire.submit') }}" method="post">
            @csrf
            <!-- Segmen 1 -->
            <div class="question-card">
                <h3>1. Identitas Pengisi</h3>
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required>

                <label for="name">Jabatan:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>


            <!-- Segmen 2 -->
            <div class="question-card">
                <h3>2. Informasi Umum</h3>
                
            </div>

            <!-- Segmen 3 -->
            <div class="question-card">
                <h3>3. Identitas Lulusan</h3>

            </div>

            <!-- Segmen 4 -->
            <div class="question-card">
                <h3>4. Informasi Kualifikasi Alumni</h3>

            </div>

            <!-- Tambahkan pertanyaan lainnya sesuai kebutuhan -->

            <div class="submit-button">
                <button type="submit" class="btn">Kirim Kuisioner</button>
            </div>
        </form>
    </div>
</section>
@endsection
