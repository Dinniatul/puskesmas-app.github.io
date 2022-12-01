<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:black">
  <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-center" style="background-color:black">
    <img src="/img/logo.png" width="60px" class="fixed-top mt-1">  SI-Puskesmas</div>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <marquee class="text-white"><h2 class="text-red"><b>SISTEM INFORMASI PUSKESMAS PADANG PASIR</b></h2></marquee>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="POST">
        @csrf
         <button class="btn text-white" type="submit">Logout</button>
      </form>
     
    </div>
  </div>
</header>