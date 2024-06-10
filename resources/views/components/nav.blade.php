<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="register">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    
                @endguest

                @Auth
                <li class="nav-item">
                        <a class="nav-link" href="{{route('article.form')}}">Articoli</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Ciao, {{ Auth::user()->name }} </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    </li>

                    <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">
                        @csrf</form>
                @endAuth
            </ul>
            @guest
            <form class="d-flex" role="search" method="POST" action="login">
                <input class="form-control me-2" type="email" placeholder="indirizzo e-mail" name="email">
                <input class="form-control me-2" type="password" placeholder="Password" name="password">
                <button class="btn btn-outline-success mx-2" type="submit">Accedi</button>
                {{-- <button class="btn btn-outline-success mx-2" type="submit">Registrati</button> --}}
                @csrf
            </form>
            @endguest
        </div>
    </div>
</nav>
