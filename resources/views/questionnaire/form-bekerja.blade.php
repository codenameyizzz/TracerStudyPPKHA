@extends('layouts.app')

@section('title', 'Kuisioner Tracer Study - Bekerja')

@section('content')
<section class="questionnaire-section">
  <div class="container">
    <h2>Form Kuisioner - Bekerja</h2>
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
      <div class="question-card">
        <h3>Dimana lokasi tempat Anda bekerja?</h3>

        <label>Provinsi</label>
        <input type="text" name="Provinsi" required>

        <label>Kabupaten</label>
        <input type="text" name="Kabupaten" required>
      </div>
      <div class="question-card">
        <h3>Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</h3>
        <div>
          <label>
            <input type="radio" name="jenis_perusahaan" value="Intansi pemerintah" required>
            Instansi Pemerintah
          </label>
        </div>
        <div>
          <label>
            <input type="radio" name="jenis_perusahaan" value="Organisasi non-profit/Lembaga Swadaya Masyarakat"
              required>
            Organisasi non-profit/Lembaga Swadaya Masyarakat
          </label>
        </div>
        <div>
          <label>
            <input type="radio" name="jenis_perusahaan" value="Perusahaan swasta" required>
            Perusahaan Swasta
          </label>
        </div>
        <div>
          <label>
            <input type="radio" name="jenis_perusahaan" value="Wiraswasta/perusahaan sendiri" required>
            Wiraswasta/Perusahaan Sendiri
          </label>
        </div>
        <div>
          <label>
            <input type="radio" name="jenis_perusahaan" value="BUMN/BUMD" required>
            BUMN/BUMD
          </label>
        </div>
        <div>
          <label>
            <input type="radio" name="jenis_perusahaan" value="Institusi/Organisasi Multilateral" required>
            Institusi/Organisasi Multilateral
          </label>
        </div>
        <div>
          <label>
            <input type="radio" name="jenis_perusahaan" value="Lainnya" id="jenis_perusahaan_lainnya" required>
            Lainnya
          </label>
          <input type="text" name="jenis_perusahaan_lainnya_text" id="jenis_perusahaan_lainnya_input"
            style="display:none;" placeholder="Tuliskan lainnya...">
        </div>
      </div>
      <div class="question-card">
        <h3>Apa nama perusahaan/kantor tempat Anda bekerja?</h3>
        <input type="text" name="company" required>
      </div>
      <div class="question-card">
        <h3>Apa tingkat tempat kerja Anda?</h3>
        <select name="tingkat_tempat_kerja" required>
          <option value="lokal">Lokal/Wilayah/Wiraswasta tidak berbadan hukum</option>
          <option value="nasional">Nasional/Wiraswasta berbadan hukum</option>
          <option value="multinasional">Multinasional/Internasional</option>
        </select>
      </div>

      <!-- Tambahkan pertanyaan lainnya sesuai kebutuhan -->

      <button type="submit">Kirim</button>
    </form>
  </div>
</section>
@endsection