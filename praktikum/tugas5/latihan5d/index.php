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
    <title>Latihan 5c</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <?php foreach ($products as $p) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $p['id'] ?>">
                    <?= $p["name"] ?>
            </p>
            <?php endforeach ?>
    </div>
</body>
</html>