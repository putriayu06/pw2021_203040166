<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php

// melakukan koneksi dapat menggunakan function :
$conn = mysqli_connect("localhost", "root", "");

// memilih database yang akan digunakan :
mysqli_select_db($conn, "pw_tubes_203040166");

// melakukan query mengambil data dari database
$result = mysqli_query($conn , "SELECT * FROM products");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Bag</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container mt-5 mb-5">
        <table id="cari" class="table table-bordered text-center">
            <thead>
                <tr style="background-color: aliceblue;">
                    <th>No</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
            </thead>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td style="background-color: aliceblue;"><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["picture"]; ?>"></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["brand"] ?></td>
                    <td><?= $row["description"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><?= $row["category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>