<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

  <!-- Buat bagian tabs di navbarnya -->
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">

      <!-- Logo dan Brand Ranah Salidonya -->
      <a class="navbar-brand" href="{{ route('indexLogin')}}"> 
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
        <div class="offcanvas-header">

          <a class="nav-link" aria-current="page" href="">
            <h5 class="offcanvas-title text-center" id="offcanvasNavbarLabel">Navigation Bar</h5>
          </a>

          <!-- Informasi Pengelolaan Kebun -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="{{ route('index')}}"><i class="fa-solid fa-house fa-xl"></i><b>   Dashboard</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('pengelolaan_perkebunan.indexUser') }}"><i class="fa-solid fa-seedling fa-xl"></i><b>   Informasi Pengelolaan
                  Perkebunan</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="profilePerusahaan.php"><i class="fa-solid fa-building fa-xl"></i><b>   Company Profile</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('informasi_pasar.index') }}"><i class="fa-solid fa-cart-shopping fa-xl"></i><b>   Informasi Pasar</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('peta_persebaran') }}"><i class="fa-solid fa-map-location-dot fa-xl"></i><b>   Peta Persebaran</b></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <b><i class="fa-solid fa-file-pen fa-xl"></i>Pengisian Form</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('pemesanan.create') }}"><i class="fa-solid fa-cart-plus fa-xl"></i><b>   Form Pemesanan</b></a></li>
                <li><a class="dropdown-item" href="{{ route('kerjasama.create') }}"><i class="fa-solid fa-handshake fa-xl"></i><b>   Form Pengajuan Kerjasama</b></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>