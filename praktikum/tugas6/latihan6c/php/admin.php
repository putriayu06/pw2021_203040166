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

// menghubungkan dengan file php lainnya 
require 'function.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $products = query("SELECT * FROM products WHERE 
                name LIKE '%$keyword%' OR
                brand LIKE '%$keyword%' OR
                description LIKE '%$keyword%' OR
                price LIKE '%$keyword%' OR
                category LIKE '%$keyword%' ");
} else {
    $products = query("SELECT * FROM products");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">   
    <title>World Bag</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="display-4">WORLD BAG</h1>
      
                <div class="add mb-3 btn btn-online-primary rounded-pill" style="width: 170px;">
                    <a href="tambah.php" style="text-decoration:none; color:#000;">Tambah Data</a>
                </div>
                
                <form action="" method="get" style="float: right;">
                    <input type="text" name="keyword" size="30" placeholder="Cari Di Sini!" autofocus>
                    <button type="submit" name="cari" class="btn"><span>Cari!</span></button><br><br>
                </form>
                
                <div class="logout">
                  <a href="logout.php">Logout</a>
                </div>
                <style>
                  .logout{
                    display: inline-block;
                    border-radius: 6px;
                    background-color: #a7e9e1;
                    border: none;
                    text-align: center;
                    font-size: 14px;
                    padding: 6px;
                    width: 100px;
                    transition: all 0.5s;
                    cursor: pointer;
                    margin: 5px;
                  }git 
                </style>
                <table id="table" class="table table-bordered table-hover text-center">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Opsi</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($products)) : ?>
                        <tr>
                          <td colspan="9"> 
                            <h1>Data tidak ditemukan</h1>
                          </td>
                        </tr>
                      <?php else : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($products as $p) : ?>
                          <tr>
                            <td ><?= $i; ?></td>
                            <td>
                              <a href="ubah.php?id=<?= $p["id"]; ?>"><button class="btn">Ubah</button></a>
                              <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('Hapus Data??')"><button class="btn">Hapus</button></a>
                            </td>
                            <td><img src="../assets/img/<?= $p['picture']; ?>" alt=""></td>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['brand']; ?></td>
                            <td><?= $p['description']; ?></td>
                            <td><?= $p['price']; ?></td>
                            <td><?= $p['category']; ?></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>