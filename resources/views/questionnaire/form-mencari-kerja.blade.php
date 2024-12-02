@extends('layouts.app')

@section('title', 'Kuisioner Tracer Study - Bekerja')

@section('content')
<section class="questionnaire-section">
    <div class="container">
        <h2>Form Kuisioner - Mencari Pekerjaan</h2>
        <form action="{{ route('questionnaire.submit') }}" method="post">
            @csrf


            <!-- Pertanyaan Sumber Dana -->
            <div class="question-card">
                <h3>1. Sebutkan sumber dana dalam pembiayaan kuliah?</h3>
                <select name="sumber_dana" required>
                    <option value="Biaya Sendiri/Keluarga">Biaya Sendiri/Keluarga</option>
                    <option value="Beasiswa ADIK">Beasiswa ADIK</option>
                    <option value="Beasiswa BIDIKMISI">Beasiswa BIDIKMISI</option>
                    <option value="Beasiswa PPA">Beasiswa PPA</option>
                    <option value="Beasiswa AFIRMASI">Beasiswa AFIRMASI</option>
                    <option value="Beasiswa Perusahaan/Swasta">Beasiswa Perusahaan/Swasta</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Kompetensi yang Dikuasai Saat Lulus -->
            <div class="question-card">
                <h3>2. Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?</h3>
                @foreach(['Etika', 'Keahlian Berdasarkan Bidang Ilmu', 'Bahasa Inggris', 'Penggunaan Teknologi Informasi', 'Komunikasi', 'Kerjasama Tim', 'Pengembangan'] as $kompetensi)
                    <label for="kompetensi_{{ $kompetensi }}">{{ $kompetensi }}:</label>
                    <select name="kompetensi_{{ $kompetensi }}" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                @endforeach
            </div>

            <!-- Kompetensi yang Diperlukan dalam Pekerjaan -->
            <div class="question-card">
                <h3>3. Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?</h3>
                @foreach(['Etika', 'Keahlian Berdasarkan Bidang Ilmu', 'Bahasa Inggris', 'Penggunaan Teknologi Informasi', 'Komunikasi', 'Kerjasama Tim', 'Pengembangan'] as $kompetensi)
                    <label for="kompetensi_pada_pekerjaan_{{ $kompetensi }}">{{ $kompetensi }}:</label>
                    <select name="kompetensi_pada_pekerjaan_{{ $kompetensi }}" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                @endforeach
            </div>

            <!-- Penekanan Metode Pembelajaran -->
            <div class="question-card">
                <h3>4. Menurut Anda seberapa besar penekanan pada metode pembelajaran berikut dilaksanakan di program studi Anda?</h3>
                @foreach(['Perkuliahan', 'Demonstrasi', 'Partisipasi dalam Proyek Riset', 'Magang', 'Praktikum', 'Kerja Lapangan', 'Diskusi'] as $metode)
                    <label for="penekanan_{{ $metode }}">{{ $metode }}:</label>
                    <select name="penekanan_{{ $metode }}" required>
                        <option value="Sangat Besar">Sangat Besar</option>
                        <option value="Besar">Besar</option>
                        <option value="Cukup Besar">Cukup Besar</option>
                        <option value="Kurang Besar">Kurang Besar</option>
                        <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                    </select>
                @endforeach
            </div>

            <!-- Waktu Mencari Pekerjaan -->
            <div class="question-card">
                <h3>5. Kapan Anda mulai mencari pekerjaan?</h3>
                <select name="waktu_mencari_pekerjaan" required>
                    <option value="Kira-kira bulan sebelum lulus">Kira-kira bulan sebelum lulus</option>
                    <option value="Kira-kira bulan sesudah lulus">Kira-kira bulan sesudah lulus</option>
                    <option value="Saya tidak mencari kerja">Saya tidak mencari kerja</option>
                </select>
            </div>

            <!-- Cara Mencari Pekerjaan -->
            <div class="question-card">
                <h3>6. Bagaimana Anda mencari pekerjaan tersebut? (Jawaban bisa lebih dari satu)</h3>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Melalui iklan di koran/majalah, brosur"> Melalui iklan di koran/majalah, brosur</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Melamar ke perusahaan tanpa mengetahui lowongan yang ada"> Melamar ke perusahaan tanpa mengetahui lowongan yang ada</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Pergi ke bursa/pameran kerja"> Pergi ke bursa/pameran kerja</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Mencari lewat internet/iklan online/milis"> Mencari lewat internet/iklan online/milis</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Dihubungi oleh perusahaan"> Dihubungi oleh perusahaan</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Menghubungi Kemenakertrans"> Menghubungi Kemenakertrans</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Menghubungi agen tenaga kerja komersial/swasta"> Menghubungi agen tenaga kerja komersial/swasta</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas"> Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Menghubungi kantor kemahasiswaan/hubungan alumni"> Menghubungi kantor kemahasiswaan/hubungan alumni</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Membangun jejaring (network) sejak masih kuliah"> Membangun jejaring (network) sejak masih kuliah</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)"> Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Membangun bisnis sendiri"> Membangun bisnis sendiri</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Melalui penempatan kerja atau magang"> Melalui penempatan kerja atau magang</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah"> Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</label><br>
                <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="Lainnya"> Lainnya</label><br>
            </div>

            <!-- Jumlah Perusahaan yang Dilamar -->
            <div class="question-card">
                <h3>7. Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau e-mail) sebelum Anda memperoleh pekerjaan pertama?</h3>
                <input type="number" name="jumlah_perusahaan_dilamar" required>
            </div>

            <!-- Jumlah Respon yang Diterima -->
            <div class="question-card">
                <h3>8. Berapa banyak perusahaan/instansi/institusi yang merespons lamaran Anda?</h3>
                <input type="number" name="jumlah_respons" required>
            </div>

            <!-- Jumlah Wawancara yang Diundang -->
            <div class="question-card">
                <h3>9. Berapa banyak perusahaan/instansi/institusi yang mengundang Anda untuk wawancara?</h3>
                <input type="number" name="jumlah_undangan_wawancara" required>
            </div>

            <!-- Apakah Aktif Mencari Pekerjaan -->
            <div class="question-card">
                <h3>10. Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir?</h3>
                <select name="aktif_mencari_pekerjaan" required>
                    <option value="Tidak">Tidak</option>
                    <option value="Tidak, tapi saya sedang menunggu hasil lamaran kerja">Tidak, tapi saya sedang menunggu hasil lamaran kerja</option>
                    <option value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan">Ya, saya akan mulai bekerja dalam 2 minggu ke depan</option>
                    <option value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Alasan Pekerjaan Tidak Sesuai dengan Pendidikan -->
            <div class="question-card">
                <h3>11. Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya? (Jawaban bisa lebih dari satu)</h3>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya"> Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Saya belum mendapatkan pekerjaan yang lebih sesuai"> Saya belum mendapatkan pekerjaan yang lebih sesuai</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Di pekerjaan ini saya memperoleh prospek karir yang baik"> Di pekerjaan ini saya memperoleh prospek karir yang baik</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya"> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya"> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini"> Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Pekerjaan saya saat ini lebih aman/terjamin/secure"> Pekerjaan saya saat ini lebih aman/terjamin/secure</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Pekerjaan saya saat ini lebih menarik"> Pekerjaan saya saat ini lebih menarik</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll."> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya"> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya"> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya"> Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya</label><br>
                <label><input type="checkbox" name="alasan_pekerjaan_tidak_sesuai[]" value="Lainnya"> Lainnya</label><br>
            </div>

            <button type="submit">Kirim</button>
        </form>
    </div>
</section>

<script>
    document.querySelector('[name="status_saat_ini"]').addEventListener('change', function () {
        var studiLanjutSection = document.getElementById('studi_lanjut_section');
        if (this.value === 'Melanjutkan Pendidikan') {
            studiLanjutSection.style.display = 'block';
        } else {
            studiLanjutSection.style.display = 'none';
        }
    });
</script>

@endsection
