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
            <li>
                @auth
                    <!-- If the user is authenticated, show a logout form or link -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link" style="display: inline; padding: 0; border: none; background: none;">
                            Keluar
                        </button>
                    </form>
                @else
                    <!-- If the user is not authenticated, show the login link -->
                    <a href="{{ route('login') }}" class="sign-in-btn">Masuk</a>
                @endauth
            </li>
        </ul>
    </div>
</nav>
