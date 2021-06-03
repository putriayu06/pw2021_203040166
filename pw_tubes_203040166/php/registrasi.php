<?php
// Ayu Putri Dwi Annisa
// 2030401666
// Jum'at, 13:00

require 'function.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "
			<script>
				alert('Registrasi Berhasil');
        document.location.href = 'login.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('Registrasi Gagal');
			</script>
		";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <style>
    body:before {
      content: "";
      position: fixed;
      z-index: -1;
      background-size: cover;
      background-position: center;
      display: block;
      background-image: url('../assets/img/background.jpg');
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
  <div class="container vh-100">
    <div class="row justify-content-center h-100">
      <div class="card my-auto">
        <div class="card-header text-center text-white">
          <h2><i class='bx bx-message-add'></i>Register Form</h2>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="username"><i class="bx bxs-user"></i>Username:</label>
              <input type="text" class="form-control" name="username" id="username" autocomplete="off" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="password"><i class='bx bxs-key'></i>Password:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password!" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="register">Register<i class='bx bx-check'></i></button>
          </form>
        </div>
        <p class="text-center">Already have an account? <a href="login.php">Login Now!</a></p>
      </div>
    </div>
  </div>
  </div>
</body>

</html>