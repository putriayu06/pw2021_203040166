<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>


<?php
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
  <title>Document</title>
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

    .regis {
      background-color: #fff;
      width: 350px;
      text-align: center;
      padding: 40px;
      box-sizing: border-box;
      border-radius: 10px;
    }

    .regis h2 {
      margin: 0 0 20px;
      width: 100%;
      margin-bottom: 25px;
    }
  </style>
  <form method="post" action="">
    <div class="regis">
      <table>
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password"></td>
        </tr>
      </table>
      <button type="submit" name="register">Register</button>
      <form>
    </div>
</body>

</html>