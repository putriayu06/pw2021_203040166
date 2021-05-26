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

$id = $_GET['id'];
$p = query("SELECT * FROM products WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "  <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "  <script>
                    alert('Data Gagal Diubah!');
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
    <!-- Link Boostrap dan Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Ubah Data</title>
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
        <div class="row mx-auto">
            <div class="col-lg-6 mx-auto">
                <div class="card my-4">
                    <div class=" card-header text-black text-center text-uppercase" style="background-color: #fee1eb;">
                        <h4>Form Ubah Data</h4>
                    </div>
                    <div class="card-body mx-auto">
                        <form action="" method="post">
                            <ul class="list-group ">
                                <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
                                <li class="list-group-item text-center card border-danger mb-3">
                                    <label for="picture">Picture :</label><br>
                                    <input type="file" name="picture" id="picture" autocomplete="off" value="<?= $p['picture'] ?>"><br><br>
                                </li>
                                <ul class="list-group">
                                    <li class="list-group-item text-center card border-danger mb-3">
                                        <label for="name">Name :</label><br>
                                        <input type="text" name="name" id="name" autocomplete="off" required value="<?= $p['name']; ?>"><br><br>
                                    </li>
                                </ul>
                                <ul class="list-group">
                                    <li class="list-group-item text-center card border-danger mb-3">
                                        <label for="brand">Brand :</label><br>
                                        <input type="text" name="brand" id="brand" autocomplete="off" required value="<?= $p['brand'] ?>"><br><br>
                                    </li>
                                </ul>
                                <ul class="list-group">
                                    <li class="list-group-item text-center card border-danger mb-3">
                                        <label for="description">Description :</label><br>
                                        <input type="text" name="description" id="description" autocomplete="off" required value="<?= $p['description'] ?>"><br><br>
                                    </li>
                                </ul>
                                <ul class="list-group">
                                    <li class="list-group-item text-center card border-danger mb-3">
                                        <label for="price">Price :</label><br>
                                        <input type="text" name="price" id="price" autocomplete="off" required value="<?= $p['price'] ?>"><br><br>
                                    </li>
                                </ul>
                                <ul class="list-group">
                                    <li class="list-group-item text-center card border-danger mb-3">
                                        <label for="category">Category :</label><br>
                                        <input type="text" name="category" id="category" autocomplete="off" required value="<?= $p['category'] ?>"><br><br>
                                    </li>
                                </ul>
                                <ul class="list-group" style="list-style-type: none;">
                                    <li class="mx-auto">
                                        <button class="btn" type="submit" name="ubah"><i class='bx bx-pencil'></i>Ubah Data!</button>
                                        <button class="btn" type="submit">
                                            <a href="admin.php" style="text-decoration: none; color: black"><i class='bx bxs-log-out'></i>Kembali</a>
                                        </button>
                                    </li>
                                </ul>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>