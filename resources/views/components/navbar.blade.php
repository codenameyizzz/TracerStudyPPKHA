<nav>
    <div class="container">
        <div class="logo">
            <h1>Tracer<span>Study</span> IT Del</h1>
        </div>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/questionnaire') }}">Questionnaire</a></li>
            <li><a href="{{ url('/report') }}">Tracer Study Report</a></li>
            <li><a href="{{ url('/#about') }}">About</a></li>
            <li><a href="{{ url('/#contact') }}">Contact</a></li>
            <li><a href="{{ route('admin') }}" class="sign-in-btn">Masuk</a></li>
        </ul>
    </div>
</nav>
