<nav class="navbar navbar-expand-lg rounded mb-4 px-3"
     style="background-color: #87CEEB;">
    <a class="navbar-brand fw-bold text-dark" href="{{ route('home') }}">Libsys</a>

    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->routeIs('home') ? 'fw-bold' : '' }}"
                   href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->routeIs('books.*') ? 'fw-bold' : '' }}"
                   href="{{ route('books.index') }}">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->routeIs('teachers.*') ? 'fw-bold' : '' }}"
                   href="{{ route('teachers.index') }}">Teachers</a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto align-items-lg-center">
            @guest
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('login') }}">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
                </li>
            @endguest

            {{-- SCREENSHOT 18, bahagi 1: link na mabibigo (405) --}}
           @auth
    <li class="nav-item">
        <span class="navbar-text text-dark me-3">{{ Auth::user()->name }}</span>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-light btn-sm">Log out</button>
        </form>
    </li>
@endauth
        </ul>
    </div>
</nav>