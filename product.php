<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astrophile | Beranda</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/astrophile.png" type="image/x-icon" />
  <!-- feather icon -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    @font-face {
      font-family: NunitoSans;
      src: url(NunitoSans.ttf);
    }
  </style>
</head>

<body>
  <nav>
    <div class="logo">ASTRO<span>PHILE</span></div>
    <div class="navbar">
      <div class="menu">
        <ul>
          <li><a href="index.php">BERANDA</a></li>
          <li><a href="product.php" style="color:#002d64;">PRODUK</a></li>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i data-feather="search"></i></button>
          </form>
        </ul>
      </div>
      <div class="extra-menu">
        <div class="cart">
          <a href="cart.php"><img src="img/cart.png" alt="" /></a>
        </div>
        <!-- Belum Login -->
        <!-- <div class="login">
          <a href="login.php
          ">LOGIN</a>
        </div> -->
        <!-- Sudah Login -->
        <div class="profil">
          <nav class="navbar navbar-expand-lg navbar-dark bg-white">
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <button class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                    <i data-feather="user"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" id="dropdown">
                    <li><a class="dropdown-item" href="profil.php">Profil Saya</a></li>
                    <li><a class="dropdown-item" href="pesanan.php">Pesanan Saya</a></li>
                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </nav>
  <div class="hero-product">
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- feather icon -->
  <script>
    feather.replace();
  </script>
</body>

</html>