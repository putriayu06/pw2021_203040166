<?php 
$mahasiswa = [
    ["Ayu Putri Dwi Annisa", "203040166", "Teknik Informatika", "ayuputri30302@gmail.com"],
    ["Dandung Aji Bhatara", "00304976", "Teknik Informatika", "ajibhatara@gmail.com"],
    ["Bunga Amelia", "12346623", "Teknik Informatika", "bungaamelia@gmail.com"]
];
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
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>NRP :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email :<?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>