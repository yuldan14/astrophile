<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Astrophile | Login</title>
    <link rel="stylesheet" href="style.css" />
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
          <h1 class="astro">ASTRO<span>PHILE</span></h1>
          <div class="form">
            <div class="user" id="form">
              <label for="username"><i data-feather="user"></i> </label>
              <input type="text" placeholder="Username" name="username" required />
            </div>
            <div class="password" id="form">
              <label for="password"><i data-feather="lock"></i> </label>
              <input type="password" placeholder="Password" name="password" required />
            </div>
        </div>
        <div class="button">
          <button type="submit">LOGIN</button>
        </div>
        <div class="other">
            <p>-------------OR-------------</p>
            <div class="social">
                <div class="facebook" id="social">
                    <a href="#faceboook"><i data-feather="facebook"></i></a>
                </div>
                <div class="mail" id="social">
                    <a href="#gmail"><i data-feather="mail"></i></a>
                </div>
            </div>
        </div>
        <div class="registrasi">
            <p>Belum memiliki akun? <a href="registrasi.php"> Buat akun</a></p>
        </div>
        </form>
      </div>
      
    <script>
      feather.replace();
    </script>
  </body>
</html>
