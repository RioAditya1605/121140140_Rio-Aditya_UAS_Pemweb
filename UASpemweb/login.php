<?php
include 'connect.php';
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = sha1($_POST['password']);

  if ($username == "" && $password == "") {
    echo"<script>alert('jangan konsongkan form input silahkan login ulang'); document.location = 'login.php';</script>";
  }elseif ($username == "") {
    echo"<script>alert('jangan konsongkan username silahkan login ulang'); document.location = 'login.php';</script>";
  }elseif($password == ""){
    echo"<script>alert('jangan konsongkan password silahkan login ulang'); document.location = 'login.php';</script>";
  }else {
    $login = mysqli_query($conn, "SELECT * FROM admin where username='$username' AND password='$password'");
    if (mysqli_num_rows($login)) {
        
        $_SESSION['admin'] = mysqli_fetch_array($login);
        echo"<script>alert('login berhasil'); document.location = 'index.php';</script>";
    }else {
      echo"<script>alert('input yg anda masukan salah silahkan coba lagi'); document.location = 'login.php';</script>";
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" entypet="multipart/form-data">
        <div class="txt_field">
          <input type="text" name="username"   required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="login" value="Login">
      </form>
    </div>

  </body>
</html>
