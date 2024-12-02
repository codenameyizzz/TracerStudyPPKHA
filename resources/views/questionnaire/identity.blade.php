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

                <label for="tahun_lulus">Tahun Lulus</label>
                <select id="tahun_lulus" name="tahun_lulus" required>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>

                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Alamat Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Nomor Telephone</label>
                <input type="tel" id="phone" name="phone" required>


                <label for="status">Status Anda Saat Ini</label>
                <div class="radio-group">
                    <input type="radio" id="status_bekerja" name="status" value="Bekerja" required>
                    <label for="status_bekerja">Bekerja (full-time / part-time)</label>

                    <input type="radio" id="status_belum_bekerja" name="status" value="Belum memungkinkan bekerja"
                        required>
                    <label for="status_belum_bekerja">Belum memungkinkan bekerja</label>

                    <input type="radio" id="status_wiraswasta" name="status" value="Wiraswasta" required>
                    <label for="status_wiraswasta">Wiraswasta</label>

                    <input type="radio" id="status_melanjutkan_pendidikan" name="status" value="Melanjutkan Pendidikan"
                        required>
                    <label for="status_melanjutkan_pendidikan">Melanjutkan Pendidikan</label>

                    <input type="radio" id="status_mencari_kerja" name="status"
                        value="Tidak kerja tetapi sedang mencari kerja" required>
                    <label for="status_mencari_kerja">Tidak kerja tetapi sedang mencari kerja</label>
                </div>
            </div>

            <!-- Tombol Kirim -->
            <div class="submit-button">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</section>
@endsection