<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Bar</title>
</head>

<body>

  <!-- Buat bagian tabs di navbarnya -->
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">

      <!-- Logo dan Brand Ranah Salidonya -->
      <a class="navbar-brand" href="">
      <img src="{{ asset('assets/LogoNavbar.png') }}" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
        <b>Ranah Salido</b>
      </a>

      <!-- Sidebar Homenya -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!-- Headernya Sidebar -->
        <div class="offcanvas-header mt-5" >
          <img src="{{ asset('assets/IconUser.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
          <a class="nav-link" aria-current="page" href="{{ route('login') }}">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">User Profile</h5>
          </a>

          <!-- Informasi Pengelolaan Kebun -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-house"></i><b> Dashboard</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('pengelolaan_perkebunan.index') }}"><img src="{{ asset('assets/weed.png') }}"
                  alt="Logo" width="35" height="30" class="d-inline-block align-text-bottom"><b>Informasi Pengelolaan
                  Perkebunan</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="profilePerusahaan.php"><img src="{{ asset('assets/office.png') }}" alt="Logo" width="30" height="30"
                  class="d-inline-block align-text-bottom"><b>Company Profile</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('informasi_pasar.index') }}"><img src="{{ asset('assets/cart.png') }}" alt="Logo"
                  width="35" height="30" class="d-inline-block align-text-bottom"><b>Informasi Pasar</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('peta_persebaran') }}"><img src="{{ asset('assets/favicon.ico') }}"
                  alt="Logo" width="35" height="30" class="d-inline-block align-text-bottom"><b>Peta Persebaran</b></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <b><img src="{{ asset('assets/contract.png') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-bottom">Pengisian Form</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('pemesanan.create') }}"><img src="{{ asset('assets/cart.png') }}" alt="Logo" width="25"
                      height="25" class="d-inline-block align-text-bottom"><b>Form Pemesanan</b></a></li>
                <li><a class="dropdown-item" href="formPengajuanKerjasama.php"><img src="{{ asset('assets/deal.png') }}" alt="Logo" width="30"
                      height="30" class="d-inline-block align-text-bottom"><b>Form Pengajuan Kerjasama</b></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>