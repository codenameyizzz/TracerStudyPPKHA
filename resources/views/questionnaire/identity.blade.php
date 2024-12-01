@extends('layouts.app')

@section('title', 'Kuisioner Tracer Study')

@section('content')
<section class="questionnaire-section">
    <div class="container">
        <h2>Kuisioner Tracer Study</h2>
        <form action="{{ route('questionnaire.storeStatus') }}" method="post">
            @csrf
            <!-- Pertanyaan Identitas -->
            <div class="question-card">
                <h3>Identitas</h3>
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required>
                <label for="email">Tahun Lulus</label>
                <input type="number" id="number" name="number" required>

                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Alamat Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Nomor Telephone</label>
                <input type="tel" id="phone" name="phone" required>


                <label for="status">Status Anda Saat Ini</label>
                <select id="status" name="status" required>
                    <option value="Bekerja">Bekerja (full-time / part-time)</option>
                    <option value="Belum memungkinkan bekerja">Belum memungkinkan bekerja</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Melanjutkan Pendidikan">Melanjutkan Pendidikan</option>
                    <option value="Tidak kerja tetapi sedang mencari kerja">Tidak kerja tetapi sedang mencari kerja
                    </option>
                </select>
            </div>

            <!-- Tombol Kirim -->
            <div class="submit-button">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</section>
@endsection