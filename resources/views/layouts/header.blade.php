<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color: blue;">
    <div class="container-fluid">
      <img src="/img/logo.png" width="50px"><a class="navbar-brand">SI-Puskesmas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pasienFE') ? 'active' : ''}}" href="{{ url('pasienFE') }}">Pasien</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          @auth

          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button class="btn btn-dark" type="submit">Logout</button>
            </form>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/login">Login</a>
          </li>
          @endauth
        </ul>

        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
</header>
