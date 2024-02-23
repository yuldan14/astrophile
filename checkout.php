<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Astrophile | Cart</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Jumlah Cart -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="shortcut icon" href="img/astrophile.png" type="image/x-icon" />
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
    <!-- nav -->
    <nav>
        <div class="logo">ASTRO<span>PHILE</span></div>
        <div class="navbar">
            <div class="menu">
                <ul>
                    <li><a href="index.php">BERANDA</a></li>
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

    <!-- Checkout -->
    <div class="cart-container">
        <!-- Informasi Pembayaran -->
        <div class="checkout-page">
            <div class="checkout-head">
                <h2>INFORMASI PEMBAYARAN</h2>
            </div>
            <!-- Alamat -->
            <div class="alamat">
                <div class="info-alamat">
                    <a id="alamat" href="cart.php">
                        Alamat Pengiriman
                        <br>
                        Yuldan Nur Addinsyah | (+62)857-0179-6316 <br>Jalan Sufyan Tsauri, Majenang, Cilacap
                    </a>
                </div>
                <div class="arrow-kanan">
                    <a href="cart.php">
                        <i data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Info-pembelian -->
            <ul>
                <li>
                    <div class="info-pembelian">
                        <div class="foto-barang">
                            <img src="img/Group 6.png" alt="">
                        </div>
                        <div class="keterangan-barang">
                            <div class="nama-barang">Kaos Astrophile</div>
                            <div class="variasi">Variasi : L</div>
                            <div class="harga-dan-jumlah">
                                <div class="harga-checkout">
                                    Rp. 34.000
                                </div>
                                <div class="jumlah">
                                    x 2
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- kanan -->
        <div class="cart-right">
            <div class="payment">
                <div class="payment-head">
                    <h3>METODE PEMBAYARAN</h3>
                </div>
                <div class="payment-method">
                    <p><input type="radio" name="payment" id="payment" value="creditcard"> Kartu Kredit</p>
                    <p><input type="radio" name="payment" id="payment" value="dana"> DANA</p>
                    <p><input type="radio" name="payment" id="payment" value="shoppe"> Shoppe</p>
                </div>
                <div class="checkout">
                    <button class="btn btn-primary" type="submit">Checkout</button>
                </div>

            </div>
        </div>
    </div>



    <script>
        const minusButton = document.getElementById('minus');
        const plusButton = document.getElementById('plus');
        const inputField = document.getElementById('input');

        minusButton.addEventListener('click', () => {
            let value = parseInt(inputField.value);
            if (value > 0) {
                inputField.value = value - 1;
            }
        });

        plusButton.addEventListener('click', () => {
            let value = parseInt(inputField.value);
            inputField.value = value + 1;
        });


        // Checkbox
        function checkAll(source) {
            var checkboxes = document.querySelectorAll('.cart-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
        }

        function checkIfAllChecked() {
            var checkboxes = document.querySelectorAll('.cart-checkbox');
            var selectAllCheckbox = document.getElementById('cart-all');
            var allChecked = true;
            checkboxes.forEach(checkbox => {
                if (!checkbox.checked) {
                    allChecked = false;
                }
            });
            selectAllCheckbox.checked = allChecked;
        }
    </script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- feather icon -->
    <script>
        feather.replace();
    </script>
</body>

</html>