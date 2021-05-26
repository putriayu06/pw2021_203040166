<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';

// melakukan query mengambil data dari database
$products = query("SELECT * FROM products");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Bag</title>

    <!-- Import bootsrap.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    body {
        background-color: #fdf6f0;
        font-family: 'Lobster', sans-serif;
        font-size: 20px;
    }

    .jumbotron {
        margin-top: 50px;
        height: 500px;
        background-image: url('assets/img/jumbotron.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .display-4 {
        font-family: 'Lobster', sans-serif;
        font-weight: 500;
        padding-top: 100px;
        text-shadow: 0px 1px 8px 1px rgba(0, 0, 0, .09);
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #fcc4c9">
        <div class="container">
            <a class="navbar-brand"><i class='bx bxs-shopping-bags'></i>World Bag</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active" href="#"><i class='bx bxs-home'></i>Home</a>
                    <a class="nav-link" href="#list">List Products</a>
                </div>
                <a href="php/login.php" style="text-decoration:none; color:black;"><i class='bx bxs-user'></i>Admin</a>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- jumbotron -->
    <div class="jumbotron">
        <div class="container text-center text-white">
            <h1 class="display-4">WELCOME</h1>
            <h3>In the world of bags that store various types of bags for women</h3>
        </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- List Product -->
    <section id="list">
        <div class="container">
            <h1 class="pt-5 text-center">Daftar Products</h1>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/1.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">BackPack Bag</h6>
                            <p class="card-text text-center">Rp 279.000</p>
                        </div>
                        <a href="php/detail.php?id=1" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/2.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Clutch Bag</h6>
                            <p class="card-text text-center">Rp 500.000</p>
                        </div>
                        <a href="php/detail.php?id=2" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/3.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Drawstring Bag</h6>
                            <p class="card-text text-center">Rp 300.000</p>
                        </div>
                        <a href="php/detail.php?id=3" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/4.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Halfmoon Bag</h6>
                            <p class="card-text text-center">Rp 500.000</p>
                        </div>
                        <a href="php/detail.php?id=4" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/5.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Hand Bag</h6>
                            <p class="card-text text-center">Rp 500.000</p>
                        </div>
                        <a href="php/detail.php?id=5" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/6.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Mini Backpack</h6>
                            <p class="card-text text-center">Rp 400.000</p>
                        </div>
                        <a href="php/detail.php?id=6" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/7.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Paper Bag</h6>
                            <p class="card-text text-center">Rp 15.000</p>
                        </div>
                        <a href="php/detail.php?id=7" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/8.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Shopping Bag</h6>
                            <p class="card-text text-center">Rp 20.000</p>
                        </div>
                        <a href="php/detail.php?id=8" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/9.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Sling Bag</h6>
                            <p class="card-text text-center">Rp 250.000</p>
                        </div>
                        <a href="php/detail.php?id=9" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3 mt-4">
                    <div class="card mx-auto">
                        <img src="assets/img/10.jpg" class="card-img-top" style="height: 390px;">
                        <div class="card-body">
                            <h6 class="card-title text-center">Tote Bag</h6>
                            <p class="card-text text-center">Rp 35.000</p>
                        </div>
                        <a href="php/detail.php?id=10" class="btn btn-block text-black" style="background-color: #fcc4c9"><i class='bx bxs-detail'></i>Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir List Product -->

    <!-- Footer -->
    <section class="row mt-5" style="background-color: #fcc4c9;">
        <div class="footer text-black text-center">
            <p>&copy; Copyright 2021. Design by <a href="https://www.instagram.com/_ayuuputriii" style="text-decoration:none; color:black;">Ayu Putri Dwi Annisa</a></p>
        </div>
    </section>
    <!-- Akhir Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>