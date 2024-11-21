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
            <img src="{{ asset('public/image/hero-1.png') }}" alt="Ilustrasi Tracer Study">
        </div>
    </div>
    <div class="scroll-down">
        <a href="#info"><i class="fas fa-chevron-down"></i></a>
    </div>
</header>

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
