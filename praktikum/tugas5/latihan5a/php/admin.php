<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php
// menghubungkan dengan file php lainnya
require 'function.php';

// melakukan query
$products = query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Latihan 5a</title>
</head>
<body>
    <h1 class="display-4">World Bag</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr style="background-color: aliceblue;">
            <th>#</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($products as $p) : ?>
            <tr>
                <td style="background-color: aliceblue;"><?= $i; ?></td>
                <td>
                    <a href=""><button style=" border-color: red">Ubah</button></a>
                    <a href=""><button style=" border-color: blue">Hapus</button></a>
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
    </table>
</body>
</html>