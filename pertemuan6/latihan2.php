<?php 
// $mahasiswa = [
//    ["Ayu Putri Dwi Annisa", "203040166", "ayuputri30302@gmail.com", "Teknik Informatika"],
//    ["Dandung Aji Bhatara", "00304976", "Teknik Informatika", "ajibhatara@gmail.com"]
// ]; 

// Array Associative 
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri 
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
// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>