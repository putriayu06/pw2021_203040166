<?php
// Ayu Putri Dwi Annisa
// 2030401666
// Jum'at, 13:00

// mengecek apakah ada id yang dikirimkan 
// jika tidak maka akan dikembalikan ke halaman index.php 
if (!isset($_GET['id'])) {
    header("localhost: ../index.php");
    exit;
}
require 'function.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$products = query("SELECT * FROM products WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pangolin&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>World Bag</title>
</head>
<style>
    body {
        background-color: #fdf6f0;
        font-family: 'Pangolin', sans-serif;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="gambar">
                    <img src=" ../assets/img/<?= $products["picture"]; ?>" style="height: 550px; width: 450px">
                </div>
            </div>
            <div class="card-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-group list-group-flush" style="text-align: center; width:450px;">
                            <li class="list-group-item">
                                <p>Name :</p>
                                <p><?= $products["name"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p>Brand :</p>
                                <p><?= $products["brand"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p>Description :</p>
                                <p><?= $products["description"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p>Price :</p>
                                <p><?= $products["price"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p>Category :</p>
                                <p><?= $products["category"]; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="../index.php" class="btn btn-block text-black" style="background-color: #fcc4c9; width:450px; text-align: center;"><i class='bx bxs-log-out'></i>Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>