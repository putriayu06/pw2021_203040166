<?php
/* 
Ayu Putri Dwi Annisa
203040166
https://github.com/putriayu06/pw2021_203040166
Pertemuan 7 (02 Maret 2021)
Mempelajari mengenai GET & POST
*/
?>

<?php 
// Superglobals 
// Variable global milik PHP
// Termasuk array Associative
$mahasiswa = [
    [
        "nama" => "Ayu Putri Dwi Annisa", 
        "nrp" => "203040166", 
        "email" => "ayuputri30302@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "sky.jpg"
    ],
    [
        "nama" => "Dandung Aji Bhatara", 
        "nrp" => "00304976", 
        "email" => "ajibhatara@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "tugas" => [90, 80, 100],
        "gambar" => "langit.jpg"
    ]
];  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
    <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>