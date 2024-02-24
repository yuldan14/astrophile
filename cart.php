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
                        <th width="90px"><input type="checkbox" name="cart-all" id="cart-all" onclick="checkAll(this)" onclick="updateTotal()">Pilih Semua</th>
                        <th colspan="2">Nama Produk</th>
                        <th>Ukuran</th>
                        <th width="200px">Jumlah</th>
                        <th>Total Harga</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="cart" class="cart-checkbox" onclick="checkIfAllChecked()" onclick="updateTotal()"></td>
                        <td id="foto-barang">
                            <img src="img/Group 6.png" alt="">
                        </td>
                        <td>Kaos Astrophile</td>
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
                            <input type="number" value="0" id="input" readonly onchange="updateTotal()" />
                            <button id="plus">+</button>
                        </td>
                        <td><input type="text" name="total-harga" id="total-harga" value="34000" readonly></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="cart" class="cart-checkbox" onclick="checkIfAllChecked()" onclick="updateTotal()"></td>
                        <td id="foto-barang">
                            <img src="img/Group 6.png" alt="">
                        </td>
                        <td>Kaos Astrophile</td>
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
                            <input type="number" value="0" id="input" readonly onchange="updateTotal()" />
                            <button id="plus">+</button>
                        </td>
                        <td><input type="text" name="total-harga" id="total-harga" value="34000" readonly></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="cart" class="cart-checkbox" onclick="checkIfAllChecked()" onclick="updateTotal()"></td>
                        <td id="foto-barang">
                            <img src="img/Group 6.png" alt="">
                        </td>
                        <td>Kaos Astrophile</td>
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
                            <input type="number" value="0" id="input" readonly onchange="updateTotal()" />
                            <button id="plus">+</button>
                        </td>
                        <td><input type="text" name="total-harga" id="total-harga" value="34000" readonly></td>
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
                            <div class="total-item">
                                <input type="text" name="total-item" id="total-item" value="0"> Item
                            </div>
                            <div class="total-harga">
                                Total Rp. <input type="text" name="total" id="total" value="0">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Checkout</button>
                        <div class="popup">
                            <p>Anda belum memilih produk apapun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        function updateTotal() {
            var total = 0;
            var totalItem = 0;
            var rows = document.querySelectorAll('.cart-table tr:not(:first-child)');

            rows.forEach(function(row) {
                var checkbox = row.querySelector('.cart-checkbox');
                var input = row.querySelector('#input');
                var harga = row.querySelector('#total-harga');

                if (checkbox.checked) {
                    total += parseInt(input.value) * parseInt(harga.value);
                    totalItem += parseInt(input.value);
                }
            });

            document.getElementById('total').value = total;
            document.getElementById('total-item').value = totalItem;
        }

        const minusButtons = document.querySelectorAll('#minus');
        const plusButtons = document.querySelectorAll('#plus');
        const inputs = document.querySelectorAll('#input');

        minusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var input = this.parentNode.querySelector('input[type=number]');
                var value = parseInt(input.value);
                if (value > 0) {
                    input.value = value - 1;
                    updateTotal();
                }
            });
        });

        plusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var input = this.parentNode.querySelector('input[type=number]');
                var value = parseInt(input.value);
                input.value = value + 1;
                updateTotal();
            });
        });

        document.querySelectorAll('.cart-checkbox').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                updateTotal();
                checkIfAllChecked();
            });
        });

        // Fungsi untuk memeriksa apakah semua kotak centang telah dicentang atau tidak
        function checkIfAllChecked() {
            var checkboxes = document.querySelectorAll('.cart-checkbox');
            var selectAllCheckbox = document.getElementById('cart-all');
            var totalItem = 0;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    totalItem += parseInt(checkbox.parentNode.parentNode.querySelector('#input').value);
                }
            });

            document.getElementById('total-item').value = totalItem;

            // Periksa apakah semua kotak centang dicentang atau tidak
            var allChecked = true;
            checkboxes.forEach(checkbox => {
                if (!checkbox.checked) {
                    allChecked = false;
                }
            });

            // Update nilai kotak centang 'Pilih Semua'
            selectAllCheckbox.checked = allChecked;
            updateTotal();
        }

        // Fungsi untuk memeriksa atau membatalkan semua kotak centang saat kotak centang 'Pilih Semua' diperiksa atau dibatalkan
        function checkAll(source) {
            var checkboxes = document.querySelectorAll('.cart-checkbox');

            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });

            if (!source.checked) {
                document.getElementById('total').value = 0;
                document.getElementById('total-item').value = 0;
            }

            updateTotal();
            checkIfAllChecked();
        }
        // Validasi saat tombol checkout ditekan
        document.querySelector('.btn-primary').addEventListener('click', function() {
            var totalItem = parseInt(document.getElementById('total-item').value);
            var popup = document.querySelector(".popup")
            if (totalItem === 0) {
                popup.style.display = "block";
                setTimeout(function() {
                    popup.style.display = "none";
                    setTimeout(function(){
                        popup.classList.add('fadeOut');
                    }, 3000);
                }, 3000);
                // Atau gunakan popup lain seperti modal Bootstrap
            } else {
                // Lakukan checkout
                window.location.href = "checkout.php";
            }
        });
    </script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- feather icon -->
    <script>
        feather.replace();
    </script>
</body>

</html>