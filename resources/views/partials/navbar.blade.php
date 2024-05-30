<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Tentang Saya' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Blog' ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    @guest
                        <a class="nav-link" href="/login">Login</a>
                    @endguest

                    <!-- Jika pengguna sudah login -->
                    @auth
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    @endauth
                </li>

            </ul>
        </div>
    </div>
</nav>
