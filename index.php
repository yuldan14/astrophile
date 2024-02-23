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
          <li><a href="index.php" style="color:#002d64;">BERANDA</a></li>
          <li><a href="product.php">PRODUK</a></li>
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
  <section id="hero">
    <div class="hero">
      <div class="text">
        <h2>Welcome to Astro<span>phile</span></h2>
        <h5>Astrophile menyediakan berbagai macam aksesoris astronomi</h5>
        <div class="button"><a href="#kategori">Beli Sekarang</a></div>
      </div>
      <div class="slide-container">
        <div class="slider">
          <div class="slide">
            <img src="img/Group 5.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="kategori">
    <div class="kategori-head">
      <h2>KATEGORI</h2>
    </div>
    <div class="container">
      <div class="produk" id="kaos">
        <div class="text">
          <h3>Kaos</h3>
          <div class="button">
            <a href="">Beli Sekarang</a>
          </div>
        </div>
        <div class="foto">
          <img src="img/Group 6.png" alt="" />
        </div>
      </div>
      <div class="produk" id="kemeja">
        <div class="text">
          <h3>Kemeja</h3>
          <div class="button">
            <a href="">Beli Sekarang</a>
          </div>
        </div>
        <div class="foto">
          <img src="img/kemeja.png" alt="" />
        </div>
      </div>
      <div class="produk" id="sandal">
        <div class="text">
          <h3>Sandal</h3>
          <div class="button">
            <a href="">Beli Sekarang</a>
          </div>
        </div>
        <div class="foto">
          <img src="img/sandal.png" alt="" />
        </div>
      </div>
      <div class="produk" id="ganci">
        <div class="text">
          <h3>Gantungan Kunci</h3>
          <div class="button">
            <a href="">Beli Sekarang</a>
          </div>
        </div>
        <div class="foto">
          <img src="img/Ganci.png" alt="" />
        </div>
      </div>
      <div class="produk" id="kalung">
        <div class="text">
          <h3>Kalung</h3>
          <div class="button">
            <a href="">Beli Sekarang</a>
          </div>
        </div>
        <div class="foto">
          <img src="img/Kalung.png" alt="" />
        </div>
      </div>
      <div class="produk" id="gelang">
        <div class="text">
          <h3>Gelang</h3>
          <div class="button">
            <a href="">Beli Sekarang</a>
          </div>
        </div>
        <div class="foto">
          <img src="img/gelang.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section id="latest">
    <div class="latest-head">
      <h2>PRODUK TERBARU</h2>
      <p><a href="product.php">Lihat Semua Produk  <i data-feather="arrow-right"></i> </a></p>
    </div>
    <div class="produk-container">
      <div class="product">
        <div class="foto-produk-terbaru">
          <img src="img/kemeja.png" alt="">
        </div>
        <div class="rating"><i data-feather="star"></i>5.0</div>
        <div class="nama">Kaos Astrophile</div>
        <div class="harga">Rp 123,000</div>
        <div class="beli">
          <a href="info-produk.php">INFO</a>
        </div>
      </div>
      <div class="product">
        <div class="foto-produk-terbaru">
          <img src="img/kemeja.png" alt="">
        </div>
        <div class="rating"><i data-feather="star"></i>5.0</div>
        <div class="nama">Kaos Astrophile</div>
        <div class="harga">Rp 123,000</div>
      </div>
      <div class="product">
        <div class="foto-produk-terbaru">
          <img src="img/kemeja.png" alt="">
        </div>
        <div class="rating"><i data-feather="star"></i>5.0</div>
        <div class="nama">Kaos Astrophile</div>
        <div class="harga">Rp 123,000</div>
      </div>
      <div class="product">
        <div class="foto-produk-terbaru">
          <img src="img/kemeja.png" alt="">
        </div>
        <div class="rating"><i data-feather="star"></i>5.0</div>
        <div class="nama">Kaos Astrophile</div>
        <div class="harga">Rp 123,000</div>
      </div>
    </div>
  </section>
  <footer>
    <div class="contact" id="foot">
      <h3>Kontak Kami</h3>
      <p id="text">Astrophile Official Store</p>
      <p id="text">Tasikmalaya</p>
      <p id="text">+62 85718726354</p>
      <p id="text">example@domain.com</p>
    </div>
    <div class="informasi" id="foot">
      <h3>Informasi</h3>
      <p id="text"><a href="#">Dukungan Produk</a></p>
      <p id="text"><a href="#">Checkout</a></p>
      <p id="text"><a href="#">Lisensi</a></p>
      <p id="text"><a href="#">Afiliasi</a></p>
    </div>
    <div class="cs" id="foot">
      <h3>Customer Service</h3>
      <p id="text"><a href="#">Pusat Bantuan</a></p>
      <p id="text"><a href="#">Tukarkan Voucher</a></p>
      <p id="text"><a href="#">Kontak Kami</a></p>
      <p id="text"><a href="#">Afiliasi</a></p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slider = document.querySelector('.slider');
      const slides = document.querySelectorAll('.slide');

      let slideIndex = 0;
      let autoSlideInterval;

      // Fungsi untuk menjalankan auto-slide setiap 5 detik
      function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
          nextSlide();
        }, 2000);
      }

      // Fungsi untuk menghentikan auto-slide
      function stopAutoSlide() {
        clearInterval(autoSlideInterval);
      }

      // Fungsi untuk menampilkan slide tertentu
      function showSlide(index) {
        if (index >= slides.length) {
          slideIndex = 0;
        } else if (index < 0) {
          slideIndex = slides.length - 1;
        } else {
          slideIndex = index;
        }

        const newTranslate = -slideIndex * 100;
        slider.style.transform = `translateX(${newTranslate}%)`;
      }

      // Fungsi untuk menampilkan slide berikutnya
      function nextSlide() {
        showSlide(slideIndex + 1);
      }

      // Fungsi untuk menampilkan slide sebelumnya
      function prevSlide() {
        showSlide(slideIndex - 1);
      }

      // Menambahkan event listener untuk tombol next
      nextBtn.addEventListener('click', () => {
        stopAutoSlide();
        nextSlide();
      });

      // Menambahkan event listener untuk tombol prev
      prevBtn.addEventListener('click', () => {
        stopAutoSlide();
        prevSlide();
      });

      // Menambahkan event listener untuk memulai auto-slide saat hover di atas slider
      slider.addEventListener('mouseenter', stopAutoSlide);
      slider.addEventListener('mouseleave', startAutoSlide);

      // Mulai auto-slide pertama kali
      startAutoSlide();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- feather icon -->
  <script>
    feather.replace();
  </script>
</body>

</html>