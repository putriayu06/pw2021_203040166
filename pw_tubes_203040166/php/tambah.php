<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "  <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "  <script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Tambah Data </title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #fdf6f0;
        font-family: 'Pangolin', sans-serif;
    }

    .btn {
        display: inline-block;
        border-radius: 6px;
        background-color: #fee1eb;
        border: none;
        text-align: center;
        font-size: 15px;
        padding: 6px;
        width: 100px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }
</style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="card my-4">
                    <div class=" card-header text-black text-center text-uppercase" style="background-color: #fee1eb;">
                        <h4>Form Tambah Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <ul class="list-group">
                                <li class="list-group-item text-center card border-danger mb-3">
                                    <label for="picture">Picture :</label><br>
                                    <input type="file" name="picture" id="picture" required><br><br>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item text-center card border-danger mb-3">
                                    <label for="name">Name :</label><br>
                                    <input type="text" name="name" id="name" autocomplete="off" required><br><br>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item text-center card border-danger mb-3">
                                    <label for="brand">Brand :</label><br>
                                    <input type="brand" name="brand" id="brand" autocomplete="off" required><br><br>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item text-center card border-danger mb-3">
                                    <label for="description">Description :</label><br>
                                    <input type="description" name="description" id="description" autocomplete="off" required><br><br>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item text-center card border-danger mb-3">
                                    <label for="price">Price :</label><br>
                                    <input type="price" name="price" id="price" autocomplete="off" required><br><br>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item text-center card border-danger mb-3">
                                    <label for="category">Category :</label><br>
                                    <input type="category" name="category" id="category" autocomplete="off" required><br><br>
                                </li>
                            </ul>
                            <br>
                            <ul class="list-group" style="list-style-type: none;">
                                <li class="mx-auto">
                                    <button class="btn" type="submit" name="tambah" style="text-decoration: none; color: black">Tambah Data!</button>
                                    <button class="btn" type="submit">
                                        <a href="admin.php" style="text-decoration: none; color: black;"><i class='bx bxs-log-out'></i>Kembali</a>
                                    </button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>