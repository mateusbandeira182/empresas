<header>
    <nav class="navbar bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" @auth href="{{ route('user.panel') }}" @endauth>Empresas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#appNavbar" aria-controls="appNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="appNavbar" aria-labelledby="appNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="appNavbarLabel">Empresas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ config('app.host') }}">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company.create') }}">Cadastrar empresa</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile.edit') }}" class="nav-link">Perfil</a>
                        </li>
                    </ul>
                    <hr>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-primary btn-sm">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
