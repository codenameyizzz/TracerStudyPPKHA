@extends('layouts.app')

@section('title', 'Kuisioner Tracer Study - Wiraswasta')

@section('content')
<style>
    .questionnaire-section {
        text-align: left; /* Mengatur teks menjadi rata kiri */
    }
    .question-card {
        margin-bottom: 20px; /* Menambahkan jarak antar pertanyaan */
    }
    input[type="radio"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    display: inline-block;
    width: 16px;
    height: 16px;
    margin: 0 5px;
    border: 2px solid #007BFF;
    border-radius: 50%;
    outline: none;
    cursor: pointer;
    transition: background-color 0.2s ease, border-color 0.2s ease;
}

input[type="radio"]:checked {
    background-color: #007BFF;
    border-color: #0056b3;
}

</style>

<section class="questionnaire-section">
    <div class="container">
        <h2>Form Kuisioner - Tracer Study</h2>
        <form action="{{ route('questionnaire.submit') }}" method="post">
            @csrf

            <!-- Pertanyaan Wiraswasta -->
            <div class="question-card" id="wiraswasta_section" style="display: none;">
                <h3> Dalam berapa bulan setelah lulus Anda memulai wiraswasta?</h3>
                <input type="number" name="bulan_setelah_lulus" required>
                
                <h3>Bila berwiraswasta, apa posisi/jabatan Anda saat ini?</h3>
                <select name="posisi_wiraswasta" required>
                    <option value="Founder">Founder</option>
                    <option value="Co-Founder">Co-Founder</option>
                    <option value="Staff">Staff</option>
                    <option value="Freelance/Kerja Lepas">Freelance/Kerja Lepas</option>
                </select>
            </div>

            <!-- Pertanyaan Sumber Dana -->
            <div class="question-card">
                <h3>Sebutkan sumber dana dalam pembiayaan kuliah?</h3>
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
            <div class="question-card" style="display: flex; gap: 20px;">
  <!-- Kolom Kiri -->
  <div style="flex: 1;">
    <h3>Pada saat lulus, pada tingkat mana kompetensi di bawah ini Anda kuasai?</h3>
    @foreach (['Etika', 'Keahlian Berdasarkan Bidang Ilmu', 'Bahasa Inggris', 'Penggunaan Teknologi Informasi', 'Komunikasi', 'Kerjasama Tim', 'Pengelolaan Waktu'] as $kompetensi)
    <div style="margin-bottom: 15px;">
      <label style="font-weight: bold;">{{ $kompetensi }}</label>
      <div style="display: flex; gap: 10px; margin-top: 5px;">
        @for ($i = 1; $i <= 5; $i++)
        <label style="font-weight: normal;">
          <input type="radio" name="kompetensi_lulus_{{ strtolower(str_replace(' ', '_', $kompetensi)) }}" value="{{ $i }}" required> {{ $i }}
        </label>
        @endfor
      </div>
    </div>
    @endforeach
  </div>

  <!-- Kolom Kanan -->
  <div style="flex: 1;">
    <h3>Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (Skala 1-5)</h3>
    @foreach (['Etika', 'Keahlian Berdasarkan Bidang Ilmu', 'Bahasa Inggris', 'Penggunaan Teknologi Informasi', 'Komunikasi', 'Kerjasama Tim', 'Pengembangan'] as $kompetensi)
    <div style="margin-bottom: 15px;">
      <label style="font-weight: bold;">{{ $kompetensi }}</label>
      <div style="display: flex; gap: 10px; margin-top: 5px;">
        @for ($i = 1; $i <= 5; $i++)
        <label style="font-weight: normal;">
          <input type="radio" name="kompetensi_pekerjaan_{{ strtolower(str_replace(' ', '_', $kompetensi)) }}" value="{{ $i }}" required> {{ $i }}
        </label>
        @endfor
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="question-card">
  <h3>Menurut Anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi Anda?</h3>
  @foreach (['Perkuliahan', 'Demonstrasi', 'Partisipasi dalam Proyek Riset', 'Magang', 'Praktikum', 'Kerja Lapangan', 'Diskusi'] as $metode)
  <div style="margin-bottom: 15px;">
    <label style="font-weight: bold;">{{ $metode }}</label>
    <div style="display: flex; gap: 15px; margin-top: 5px;">
      @foreach (['Sangat Besar', 'Besar', 'Cukup Besar', 'Kurang Besar', 'Tidak Sama Sekali'] as $opsi)
      <label style="font-weight: normal;">
        <input type="radio" name="metode_{{ strtolower(str_replace(' ', '_', $metode)) }}" value="{{ $opsi }}" required> {{ $opsi }}
      </label>
      @endforeach
    </div>
  </div>
  @endforeach
</div>

            <!-- Waktu Mencari Pekerjaan -->
            <div class="question-card">
                <h3> Kapan Anda mulai mencari pekerjaan?</h3>
                <select name="waktu_mencari_pekerjaan" required>
                    <option value="Kira-kira bulan sebelum lulus">Kira-kira bulan sebelum lulus</option>
                    <option value="Kira-kira bulan sesudah lulus">Kira-kira bulan sesudah lulus</option>
                    <option value="Saya tidak mencari kerja">Saya tidak mencari kerja</option>
                </select>
            </div>

            <!-- Cara Mencari Pekerjaan -->
            <div class="question-card">
                <h3> Bagaimana Anda mencari pekerjaan tersebut? (Jawaban bisa lebih dari satu)</h3>
                @foreach([
                    "Melalui iklan di koran/majalah, brosur",
                    "Melamar ke perusahaan tanpa mengetahui lowongan yang ada",
                    "Pergi ke bursa/pameran kerja",
                    "Mencari lewat internet/iklan online/milis",
                    "Dihubungi oleh perusahaan",
                    "Menghubungi Kemenakertrans",
                    "Menghubungi agen tenaga kerja komersial/swasta",
                    "Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas",
                    "Menghubungi kantor kemahasiswaan/hubungan alumni",
                    "Membangun jejaring (network) sejak masih kuliah",
                    "Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)",
                    "Membangun bisnis sendiri",
                    "Melalui penempatan kerja atau magang",
                    "Bekerja di tempat yang sama dengan tempat kerja semasa kuliah",
                    "Lainnya"
                ] as $cara)
                    <label><input type="checkbox" name="cara_mencari_pekerjaan[]" value="{{ $cara }}"> {{ $cara }}</label><br>
                @endforeach
            </div>

            <!-- Jumlah Perusahaan yang Dilamar -->
            <div class="question-card">
                <h3> Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau e-mail) sebelum Anda memperoleh pekerjaan pertama?</h3>
                <input type="number" name="jumlah_perusahaan_dilamar" required>
            </div>

            <!-- Jumlah Respon yang Diterima -->
            <div class="question-card">
                <h3> Berapa banyak perusahaan/instansi/institusi yang merespons lamaran Anda?</h3>
                <input type="number" name="jumlah_respons" required>
            </div>

            <!-- Jumlah Wawancara yang Diundang -->
            <div class="question-card">
                <h3> Berapa banyak perusahaan/instansi/institusi yang mengundang Anda untuk wawancara?</h3>
                <input type="number" name="jumlah_undangan_wawancara" required>
            </div>

            <!-- Apakah Aktif Mencari Pekerjaan -->
            <div class="question-card">
                <h3> Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir?</h3>
                <select name="aktif_mencari_pekerjaan" required>
                    <option value="Tidak">Tidak</option>
                    <option value="Tidak, tapi saya sedang menunggu hasil lamaran kerja">Tidak, tapi saya sedang menunggu hasil lamaran kerja</option>
                    <option value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan">Ya, saya akan mulai bekerja dalam 2 minggu ke depan</option>
                    <option value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Pertanyaan 19 -->
<div class="question-card">
    <h3>Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya?</h3>
    @foreach ([ 
        'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.',
        'Saya belum mendapatkan pekerjaan yang lebih sesuai.',
        'Di pekerjaan ini saya memeroleh prospek karir yang baik.',
        'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.',
        'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.',
        'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.',
        'Pekerjaan saya saat ini lebih aman/terjamin/secure.',
        'Pekerjaan saya saat ini lebih menarik.',
        'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.',
        'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.',
        'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.',
        'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.',
        'Lainnya'
    ] as $alasan_kerja)
    <div>
        <label>
            <input type="radio" 
                   name="alasan_kerja[]" 
                   value="{{ $alasan_kerja }}" 
                   id="{{ $alasan_kerja === 'Lainnya' ? 'option_lainnya_19' : '' }}" 
                   required>
            {{ $alasan_kerja }}
        </label>
    </div>
    @endforeach

    <!-- Input untuk jawaban "Lainnya" -->
    <div id="input_lainnya_container_19" style="display: none; margin-top: 10px;">
        <input type="text" 
               name="alasan_kerja_lainnya" 
               id="input_lainnya_19" 
               placeholder="Tuliskan jawaban Anda..." 
               style="width: 100%; padding: 8px;">
    </div>
</div>
      
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const radioButtons = document.querySelectorAll('input[type="radio"]');
        
        // Loop untuk semua radio button
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function () {
                const parentDiv = this.closest('.question-card'); // Mendapatkan div yang mengandung pertanyaan
                const inputLainnyaContainer = parentDiv.querySelector('[id^="input_lainnya_container"]');
                const inputLainnya = parentDiv.querySelector('[id^="input_lainnya"]');

                // Cek apakah opsi yang dipilih adalah "Lainnya"
                if (this.value === 'Lainnya') {
                    inputLainnyaContainer.style.display = 'block'; // Tampilkan input teks
                    inputLainnya.required = true; // Jadikan input teks wajib
                } else {
                    inputLainnyaContainer.style.display = 'none'; // Sembunyikan input teks
                    inputLainnya.value = ''; // Hapus nilai input jika opsi lain dipilih
                    inputLainnya.required = false; // Hapus keharusan input teks
                }
            });
        });
    });
</script>
            <button type="submit">Kirim</button>
        </form>
    </div>
</section>

<script>
    document.querySelector('#status_saat_ini').addEventListener('change', function () {
        var wiraswastaSection = document.getElementById('wiraswasta_section');
        if (this.value === 'Wiraswasta') {
            wiraswastaSection.style.display = 'block';
        } else {
            wiraswastaSection.style.display = 'none';
        }
    });
</script>

@endsection