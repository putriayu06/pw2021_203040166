<?php
// Ayu Putri Dwi Annisa
// 2030401666
// Jum'at, 13:00

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
  <title>Halaman Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pangolin&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <style>
    body {
      font-family: 'Pangolin', cursive;
      background-image: url('../assets/img/mal.jpg');
    }

    .display-4 {
      font-family: 'Lobster', sans-serif;
    }

    .logout {
      float: right;
      font-size: 25px;
    }

    .table:hover {
      box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.2);
    }
  </style>

<body>
  <div class="container">
    <div class="card mt-5">
      <div class="card-body">

        <div class="logout">
          <a href="logout.php" style="text-decoration:none; color:#000;"><i class='bx bxs-log-out'></i>Logout</a>
        </div>
        <h1 class=" display-4 text-center">WORLD BAG</h1>

        <div class="col-md-3 p-3 pt-2 btn btn-online-primary rounded-pill" id="main">
          <h3 class="text-uppercase"><a href="tambah.php" style="text-decoration:none; color:#000;"><i class='bx bx-plus'></i>Tambah Data</a></h3>
        </div>

        <form action="" method="get" style="float: right;">
          <input type="text" name="keyword" size="30" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus>
          <button type="submit" name="cari" class="btn tombol-cari" style="font-size: 20px;"><span>Cari!</span></button><br><br>
        </form>

        <table id="table" class="table table-bordered table-hover text-center">
          <thead class="text-center text-uppercase" style="background-color: #f1c5c2;">
            <tr>
              <th scope="col">#</th>
              <th scope="col" width="200">Aksi</th>
              <th scope="col">Picture</th>
              <th scope="col">Name</th>
              <th scope="col">Brand</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Category</th>
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
                  <td><?= $i; ?></td>
                  <td>
                    <a href="ubah.php?id=<?= $p["id"]; ?>" class="btn btn-success btn-sm text-white" data-toggle="tooltip" title="Ubah"><i class='bx bxs-pencil'></i>
                      Ubah</a>
                    <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('Hapus Data??')" class="btn btn-danger btn-sm text-white" onclick="return confirm('Hapus Data?')" data-toggle="tooltip" title="Delete"><i class='bx bxs-trash'></i>Delete</a>
                  </td>
                  <td><img src="../assets/img/<?= $p['picture']; ?>" width="150"></td>
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