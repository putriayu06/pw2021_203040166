<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php
session_start();
require 'function.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  //ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokan USERNAME dan Password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remenber me dicentang 
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'],time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
      
      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">   
</head>

<body>
  <style>
      body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        height: 600px;
        background-color: pink;
        align-items: center;
        font-family: AkayaTelivigala-Regular;
      }

      .login {
       background-color: #fff;
        width: 350px;
        text-align: center;
        padding: 40px;
        box-sizing: border-box;
        border-radius: 10px;
      }

      .login h2{
        margin: 0 0 20px;
        width: 100%;
        margin-bottom: 25px;
      }

  </style>
  <form action="" method="post">
  <div class="login">
      <h2>Halaman Login</h2>
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">username atau password salah</p>
        <?php endif; ?>
      <table>
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username" placeholder="Username"></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password" placeholder="Password"></td>
        </tr>
      </table>
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember Me</label>
      </div>
      <div class="registrasi">
        <p>Buat akun <a href="registrasi.php">Disini</a></p>
      </div>
      <button type="submit" name="submit">Login</button>
    </form>
  </div>
  </div>
</body>
</html>