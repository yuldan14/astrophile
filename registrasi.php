<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astrophile | Registrasi</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <link rel="shortcut icon" href="img/astrophile.png" type="image/x-icon" />
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    @font-face {
      font-family: NunitoSans;
      src: url(NunitoSans.ttf);
    }
  </style>
</head>

<body>
  <div class="container-login">
    <div class="left">
      <div class="image"></div>
    </div>

    <div class="right">
      <form action="index.php">
        <h1>BUAT <span>AKUN</span></h1>
        <div class="form">
          <div class="email" id="form">
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" required>
          </div>
          <div class="notelepon" id="form">
            <label for="phone">No Telepon</label>
            <input id="phone" type="tel" name="phone" required />
          </div>
          <div class="user" id="form">
            <label for="username">Username</label>
            <input type="text" placeholder="Username" name="username" required />
          </div>
          <div class="password" id="form">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" required />
          </div>
          <div class="tanggal-lahir" id="form">
            <label for="">Tanggal Lahir</label>
            <table>
              <tr>
                <td>
                  <select name="tanggallahir">
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                    ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
                <td>
                  <select name="bulan">
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                    ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
                <td>
                  <select name="tahun">
                    <?php
                    for ($i = 1990; $i <= 2018; $i++) {
                    ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
              </tr>

            </table>
          </div>

        </div>
        <div class="button">
          <button type="submit">SIGN UP</button>
        </div>
        <div class="registrasi">
          <p>Sudah memiliki akun? <a href="login.php"> Masuk ke akun</a></p>
        </div>
      </form>
    </div>

    <script>
      feather.replace();
    </script>
    <script>
      const phoneInputField = document.querySelector("#phone");
      const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });
    </script>
</body>

</html>