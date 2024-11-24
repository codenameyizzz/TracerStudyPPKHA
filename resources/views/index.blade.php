@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Bagian Hero -->
<header class="hero">
    <div class="container">
        <div class="hero-content">
            <h2>Selamat Datang di <br> Tracer Study <br> Institut Teknologi Del</h2>
            <p>Bantu kami meningkatkan kualitas pendidikan dengan berpartisipasi dalam tracer study.</p>
            <a href="{{ url('/questionnaire') }}" class="btn">Mulai Sekarang</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('image/hero-1.png') }}" alt="Ilustrasi Tracer Study">
        </div>
    </div>
    <div class="scroll-down">
        <a href="#info"><i class="fas fa-chevron-down"></i></a>
    </div>
</header>

<!-- Bagian Manfaat dan Tujuan -->
<section class="benefits-section">
    <div class="container">
        <h3>TRACER STUDY</h3>
        <p>Manfaat dan Tujuan</p>
        <div class="content-wrapper">
            <!-- Kolom Teks -->
            <div class="text-content">
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="icon">
                        <img src="{{ asset('image/medal.png') }}" alt="Ikon Akreditasi ">

                        </div>
                        <div class="text">
                            <h4>Akreditasi Perguruan Tinggi</h4>
                            <p>Pengisian Tracer Study digunakan sebagai dasar perhitungan capaian Indikator Kinerja Utama yang mempengaruhi pemeringkatan perguruan tinggi.</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="icon">
                        <img src="{{ asset('image/bookmark.png') }}" alt="Ikon Evaluasi">

                        </div>
                        <div class="text">
                            <h4>Evaluasi Relevansi Kurikulum dan Dunia Kerja</h4>
                            <p>Data Tracer Study digunakan sebagai bahan evaluasi kurikulum pada setiap program studi agar sesuai dengan kebutuhan dunia kerja sekarang.</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="icon">
                        <img src="{{ asset('image/link.png') }}" alt="Ikon Jejaring">

                        </div>
                        <div class="text">
                            <h4>Membangun Jejaring Alumni</h4>
                            <p>Data Tracer Study dapat digunakan untuk mengetahui persebaran alumni dalam rangka membangun jaringan komunitas alumni di Indonesia atau dunia.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kolom Gambar -->
            <div class="left-image">
            <img src="{{ asset('image/Frame 19.png') }}" alt="Manfaan dan Tujuan">
            </div>
        </div>
    </div>
</section>

<section class="survey-section">
    <div class="container">
        <!-- Kolom Gambar -->
        <div class="left-image">
            <img src="{{ asset('image/survei.jpg') }}" alt="Survey Illustration">
        </div>
        <!-- Kolom Teks -->
        <div class="text-content">
            <h3>SURVEY PENILAIAN PENGGUNA LULUSAN</h3>
            <p>Definisi dan Responden</p>
            <p>
                Survei Penilaian Lulusan adalah survei yang ditujukan kepada seluruh pengguna lulusan Institut Teknologi Del. Survei ini bertujuan untuk mengevaluasi kualitas lulusan Institut Teknologi Del dari sudut pandang pengguna, memastikan apakah lulusan yang dihasilkan telah memenuhi ekspektasi pengguna dan kebutuhan dunia kerja.
            </p>
            <div class="highlight-box">
                <h4>Ditujukan Bagi Mitra Institut Teknologi Del</h4>
                <p>
                    Berikan evaluasi dan masukan terkait lulusan Institut Teknologi Del yang bekerja di tempat Anda atau bermitra dengan Anda. Umpan balik Anda akan membantu Institut Teknologi Del dalam mencetak lulusan yang lebih berkualitas dan sesuai dengan kebutuhan dunia kerja di masa depan.
                </p>
                <a href="{{ url('/kuisioner') }}" class="btn">Isi Kuisioner →</a>
            </div>
        </div>
    </div>
</section>



<!-- Bagian Informasi -->
<section class="info-section" id="info">
    <div class="container">
        <h3>Mengapa Tracer Study Penting?</h3>
        <div class="info-grid">
            <div class="info-item">
                <i class="fas fa-graduation-cap"></i>
                <h4>Peningkatan Kurikulum</h4>
                <p>Data alumni membantu kami menyempurnakan kurikulum agar sesuai dengan kebutuhan industri.</p>
            </div>
            <div class="info-item">
                <i class="fas fa-briefcase"></i>
                <h4>Peluang Karir</h4>
                <p>Membantu mahasiswa dan alumni mendapatkan informasi terkini tentang peluang karir.</p>
            </div>
            <div class="info-item">
                <i class="fas fa-chart-line"></i>
                <h4>Evaluasi Kinerja</h4>
                <p>Menilai efektivitas program pendidikan yang telah dijalankan.</p>
            </div>
            <div class="info-item">
                <i class="fas fa-network-wired"></i>
                <h4>Jejaring Alumni</h4>
                <p>Membangun jaringan yang kuat antara alumni untuk saling berbagi dan mendukung.</p>
            </div>
        </div>
    </div>
</section>

<!-- Bagian About -->
<section class="about-section" id="about">
    <div class="container">
        <h3>Tentang Tracer Study</h3>
        <p>Tracer Study adalah survei yang dilakukan kepada alumni untuk mengetahui situasi kerja dan penggunaan kompetensi yang diperoleh selama kuliah. Hasil dari tracer study digunakan untuk evaluasi dan pengembangan kurikulum, serta peningkatan kualitas pendidikan di universitas.</p>
    </div>
</section>

<!-- Bagian Ajakan -->
<section class="cta-section">
    <div class="container">
        <h3>Ayo Berkontribusi dalam Tracer Study</h3>
        <a href="{{ url('/questionnaire') }}" class="btn">Isi Kuisioner</a>
    </div>
</section>
@endsection
