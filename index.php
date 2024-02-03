<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Astrophile | Beranda</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="img/astrophile.png" type="image/x-icon" />
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
            <li><a href="#home"></a>HOME</li>
            <li><a href="#home"></a>PRODUCT</li>
            <li><a href="#home"></a>ABOUT ME</li>
            <li><a href="#home"></a>CONTACT</li>
          </ul>
        </div>
        <div class="extra-menu">
          <div class="cart">
            <img src="img/cart.png" alt="" />
          </div>
          <div class="login">
            <a href="login.php
          ">LOGIN</a>
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
    <footer></footer>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
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
  </body>
</html>
