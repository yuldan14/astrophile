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
    <!-- cart -->
    <div class="cart-container">
        <!-- Kiri -->
        <div class="cart-left">
            <div class="cart-head">
                <h1>KERANJANG BELANJA</h1>
            </div>
            <div class="cart-table">
                <table class="table table-striped">
                    <tr>
                        <th width="90px"><input type="checkbox" name="cart-all" id="cart-all" onclick="checkAll(this)">Pilih Semua</th>
                        <th colspan="2">Nama Produk</th>
                        <th>Ukuran</th>
                        <th width="200px">Jumlah</th>
                        <th>Total Harga</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="cart" class="cart-checkbox" onclick="checkIfAllChecked()"></td>
                        <td id="foto-barang">
                            <img src="img/Group 6.png" alt="">
                        </td>                        <td>Kaos Astrophile</td>
                        <td>
                            <select name="size" id="size">
                                <option value="S">Ukuran - S</option>
                                <option value="M">Ukurna - M</option>
                                <option value="L">Ukuran - L</option>
                            </select>
                        </td>
                        <td id="jumlah">
                            <!-- tombol jumlah -->
                            <button id="minus">−</button>
                            <input type="number" value="0" id="input" readonly />
                            <button id="plus">+</button>
                        </td>
                        <td>120000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="cart" class="cart-checkbox" onclick="checkIfAllChecked()"></td>
                        <td id="foto-barang">
                            <img src="img/Group 6.png" alt="">
                        </td>                        <td>Kaos Astrophile</td>
                        <td>
                            <select name="size" id="size">
                                <option value="S">Ukuran - S</option>
                                <option value="M">Ukurna - M</option>
                                <option value="L">Ukuran - L</option>
                            </select>
                        </td>
                        <td id="jumlah">
                            <!-- tombol jumlah -->
                            <button id="minus">−</button>
                            <input type="number" value="0" id="input" readonly />
                            <button id="plus">+</button>
                        </td>
                        <td>120000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="cart" class="cart-checkbox" onclick="checkIfAllChecked()"></td>
                        <td id="foto-barang">
                            <img src="img/Group 6.png" alt="">
                        </td>                        <td>Kaos Astrophile</td>
                        <td>
                            <select name="size" id="size">
                                <option value="S">Ukuran - S</option>
                                <option value="M">Ukurna - M</option>
                                <option value="L">Ukuran - L</option>
                            </select>
                        </td>
                        <td id="jumlah">
                            <!-- tombol jumlah -->
                            <button id="minus">−</button>
                            <input type="number" value="0" id="input" readonly />
                            <button id="plus">+</button>
                        </td>
                        <td>120000</td>
                    </tr>
                </table>
            </div>
            <div class="cart-foot">
                <div class="left-foot">
                    <div id="kembali"><a href="product.php"><i data-feather="arrow-left"></i></a></div>
                    <div><a href="product.php">Kembali</a></div>
                </div>
                <div class="right-foot">
                    <div class="checkout">
                        <div class="jumlah-checkout">
                            2 Item
                        </div>
                        <button class="btn btn-primary" type="submit"><a href="checkout.php">Checkout</a></button>
                    </div>
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