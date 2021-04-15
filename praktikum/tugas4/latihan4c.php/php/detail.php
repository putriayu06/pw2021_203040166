<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php 

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
    <title>World Bag</title>
</head>
<body>
    <div class="container">
    <h1>WOMEN BAG</h1>
        <div class="gambar">
            <img src=" ../assets/img/<?= $products["picture"]; ?>">
        </div>
        <div class="keterangan">
            <p><?= $products["name"]; ?></p>
            <p><?= $products["brand"]; ?></p>
            <p><?= $products["description"]; ?></p>
            <p><?= $products["price"]; ?></p>
            <p><?= $products["category"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href=" ../index.php">Kembali</a></button>
    </div>
</body>
</html>