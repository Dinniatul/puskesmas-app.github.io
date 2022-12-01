<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse" style="background-color: #AFEEEE">
  <div class="position-sticky pt-3">
    <div>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel pb-2 d-flex">
        <div class="image mt-2">
          <img src="/img/kp.png" style="width: 200px">
        </div>
      </div>
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted text-uppercase">
        <span class="text-white">Menu</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}} " href="/dashboard">
            <img src="/img/ds.png" width="20px" class="mb-2">
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dokter') ? 'active' : ''}}" aria-current="page" href="{{ url('dokter') }}">
            <img src="/img/medical-team.png" width="20px" class="mb-2">
            Dokter
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('pasien') ? 'active' : ''}}" href="{{ url('pasien')}}">
            <img src="/img/patient.png" width="20px" class="mb-2">
            Pasien
          </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted text-uppercase">
          <span class="text-white">Kategori Poli</span>
        </h6>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('polianak') ? 'active' : ''}}" aria-current="page" href="{{ url('polianak') }}">
            <img src="/img/children.png" width="20px" class="mb-2">
            Anak
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('poliumum') ? 'active' : ''}}" aria-current="page" href="{{ url('poliumum') }}">
            <img src="/img/family.png" width="20px" class="mb-2">
            Umum
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('polilansia') ? 'active' : ''}}" aria-current="page" href="{{ url('polilansia') }}">
            <img src="/img/parents.png" width="20px" class="mb-2">  Lansia
          </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted text-uppercase">
          <span class="text-white">Kategori Surat</span>
        </h6>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('sakit') ? 'active' : ''}}" aria-current="page" href="{{ url('sakit') }}">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Sakit
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('sehat') ? 'active' : ''}}" aria-current="page" href="{{ url('sehat') }}">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Sehat
          </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted text-uppercase">
          <span class="text-white">Laporan</span>
        </h6>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('laporan_pasien') ? 'active' : ''}}" aria-current="page" href="{{ url('laporan_pasien') }}">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Pasien
          </a>
          <li class="nav-item">
          <a class="nav-link {{ Request::is('laporan_dokter') ? 'active' : ''}}" aria-current="page" href="{{ url('laporan_dokter') }}">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Dokter
          </a>
        </li>
      </div>
    </nav>