<?php
/* 
Ayu Putri Dwi Annisa
203040166
https://github.com/putriayu06/pw2021_203040166
Pertemuan 6 (26 Februari 2021)
Mempelajari mengenai ARRAY ASSOCIATIVE
*/
?>

<?php 
$books = [
    [
        "Judul" => "Laskar Pelangi",
        "Penulis" => "Andrea Hirata",
        "Penerbit" => "Bentang Pustaka",
        "Halaman" => "529 halaman",
        "Genre" => "Roman",
        "Gambar" => "lp.jpg"
    ],
    [
        "Judul" => "Sang Pemimpin",
        "Penulis" => "Andrea Hirata",
        "Penerbit" => "Bentang Pustaka",
        "Halaman" => "318 halaman",
        "Genre" => "Roman",
        "Gambar" => "sp.jpg"
    ],
    [
        "Judul" => "Surat Kecil Untuk Tuhan",
        "Penulis" => "Agnes Davonar",
        "Penerbit" => "Inandra Published",
        "Halaman" => "216 halaman",
        "Genre" => "Biografi",
        "Gambar" => "skut.png"
    ],
    [
        "Judul" => "Hujan",
        "Penulis" => "Tere Liye",
        "Penerbit" => "Gramedia Pustaka Utama",
        "Halaman" => "413 halaman",
        "Genre" => "Roman kontemporer",
        "Gambar" => "hujan.jpg"
    ]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku</title>
    <style>
    html, body {
        display: flex;
        flex-direction: row;
        text-align: center;
    }
    li {
        list-style: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.1rem; 
    }
    h1 {
        margin-bottom: 285px;
        padding: 50px;
    }
    </style>
</head>
<body>
    <h1>Rekomendasi Buku</h1>
    <?php foreach ( $books as $book ) : ?>
            <ul>
                <li>
                 <img src="img/<?= $book["Gambar"]; ?>">
                </li>
                <li>Judul : <?= $book["Judul"]; ?></li>
                <li>Penulis : <?= $book["Penulis"]; ?></li>  
                <li>Penerbit : <?= $book["Penerbit"]; ?></li>
                <li>Halaman : <?= $book["Halaman"]; ?></li>
                <li>Genre : <?= $book["Genre"]; ?></li>
            </ul>
<?php endforeach; ?>

</body>
</html>
