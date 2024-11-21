@extends('layouts.app')

@section('title', 'Kuisioner Tracer Study')

@section('content')
<section class="questionnaire-section">
    <div class="container">
        <h2>Kuisioner Tracer Study</h2>
        <form action="{{ route('questionnaire.submit') }}" method="post">
            @csrf
            <!-- Pertanyaan 1 -->
            <div class="question-card">
                <h3>1. Informasi Pribadi</h3>
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <!-- Tambahkan pertanyaan lainnya sesuai kebutuhan -->

            <div class="submit-button">
                <button type="submit" class="btn">Kirim Kuisioner</button>
            </div>
        </form>
    </div>
</section>
@endsection
