<?php
include 'connect.php';
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $nama = sha1($_POST['nama']);
  $password = sha1($_POST['password']);

  if ($username == "" && $password == "" && nama == "") {
    echo"<script>alert('jangan konsongkan form input silahkan registrasi ulang'); document.location = 'registrasi.php';</script>";
  }elseif ($username == "") {
    echo"<script>alert('jangan konsongkan username silahkan registrasi ulang'); document.location = 'registrasi.php';</script>";
  }elseif($password == ""){
    echo"<script>alert('jangan konsongkan password silahkan registrasi ulang'); document.location = 'registrasi.php';</script>";
  }elseif($nama == ""){
    echo"<script>alert('jangan konsongkan nama silahkan registrasi ulang'); document.location = 'registrasi.php';</script>";
  }else {
    $login = mysqli_query($conn, "INSERT INTO admin (username, password, nama) VALUES('$username', '$password', '$nama')");
        echo"<script>alert('Registrasi berhasil'); document.location = 'login.php';</script>";
    }
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form registrasi</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>REGISTER</h1>
      <form method="post" entypet="multipart/form-data">
        <div class="txt_field">
          <input type="text" name="username"   required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" name="nama" required>
          <span></span>
          <label>Nama</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="register" value="Submit">
      </form>
    </div>

  </body>
</html>
