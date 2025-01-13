<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-sm flex">
        <div class="me-5">
            <a class="navbar-brand" href="{{ route('view.article') }}">Blog App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('article*') ? 'text-primary' : '' }}"
                        href="{{ route('view.article') }}">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('news*') ? 'text-primary' : '' }}"
                        href="{{ route('view.news') }}">News</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form action="{{ route('api.logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link bg-danger text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
