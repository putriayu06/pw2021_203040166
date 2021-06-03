<?php
// Ayu Putri Dwi Annisa
// 2030401666
// Jum'at, 13:00

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
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <title>Login</title>

  <style>
    body:before {
      content: "";
      position: fixed;
      z-index: -1;
      background-size: cover;
      background-position: center top;
      display: block;
      background-image: url('../assets/img/bg.jpg');
      width: 100%;
      height: 700px;
      filter: blur(4px);
      -webkit-filter: blur(4px);
    }

    body {
      font-family: 'Pangolin', sans-serif;
    }

    .card {
      width: 350px;
      box-shadow: 1px 1px 20px 5px rgba(0, 0, 0, 0.1);
    }

    .card-header,
    button {
      background-color: #fcc4c9 !important;
    }

    p {
      font-size: 14px;
      color: rgba(0, 0, 0, 0.6);
    }

    p a {
      color: #d291bc;
    }

    p a:hover {
      color: #dabfde;
    }
  </style>
</head>

<body>

  <div class="container vh-100">
    <div class="row justify-content-center h-100">
      <div class="card my-auto">
        <div class="card-header text-center text-white">
          <h2><i class='bx bxs-lock'></i></i>Login Form</h2>
        </div>
        <div class="card-body">
          <?php if (isset($error)) : ?>
            <div class="alert alert-danger text-center" role="alert">
              Username / Password Salah!
            </div>
          <?php endif; ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="username"><i class="bx bxs-user"></i>Username:</label>
              <input type="text" class="form-control" name="username" id="username" autofocus autocomplete="off" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="password"><i class='bx bxs-key'></i>Password:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password!" required>
            </div>
            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit"><i class='bx bxs-lock-open'></i>Login</button>
          </form>
        </div>
        <p class="text-center">Don't have an account? <a href="registrasi.php">Register Now!</a></p>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>

</html>