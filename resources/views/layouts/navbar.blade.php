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
      <a class="navbar-brand" href="profilePerusahaan.php">
        <img src="assets/LogoNavbar.png" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
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
          <img src="IconUser.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
          <a class="nav-link" aria-current="page" href="userProfile.php">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">User Profile</h5>
          </a>

          <!-- Informasi Pengelolaan Kebun -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="dashboardRanahSalido.php"><img src="dashboard.png"
                  alt="Logo" width="30" height="25" class="d-inline-block align-text-bottom"><b>Dashboard</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="infoPengelolaanPerkebunan.php"><img src="weed.png"
                  alt="Logo" width="35" height="30" class="d-inline-block align-text-bottom"><b>Informasi Pengelolaan
                  Perkebunan</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="profilePerusahaan.php"><img src="office.png" alt="Logo" width="30" height="30"
                  class="d-inline-block align-text-bottom"><b>Company Profile</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="informasiPasar.php"><img src="stocks.png" alt="Logo"
                  width="35" height="30" class="d-inline-block align-text-bottom"><b>Informasi Pasar</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('peta_persebaran') }}"><img src="stocks.png"
                  alt="Logo" width="35" height="30" class="d-inline-block align-text-bottom"><b>Peta Persebaran</b></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <b><img src="contract.png" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-bottom">Pengisian Form</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="formPemesanan.php"><img src="cart.png" alt="Logo" width="25"
                      height="25" class="d-inline-block align-text-bottom"><b>Form Pemesanan</b></a></li>
                <li><a class="dropdown-item" href="formPengajuanKerjasama.php"><img src="deal.png" alt="Logo" width="30"
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