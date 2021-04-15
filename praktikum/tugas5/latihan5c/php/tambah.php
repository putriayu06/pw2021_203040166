<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<h3>Form Tambah Data Tas</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="picture">Picture  :</label><br>
            <input type="file" name="picture" id="picture" required><br><br>
        </li>
        <li>
            <label for="name">Name :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="name">Brand :</label><br>
            <input type="text" name="brand" id="brand" required><br><br>
        </li>
        <li>
            <label for="name">Description :</label><br>
            <input type="text" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="name">Price :</label><br>
            <input type="text" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="name">Category :</label><br>
            <input type="text" name="category" id="category" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black">Kembali</a>
        </button>
    </ul>

    <?php
    require 'function.php';

    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
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