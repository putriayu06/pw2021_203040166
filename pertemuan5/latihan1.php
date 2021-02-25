<?php
/*
Ayu Putri Dwi Annisa
203040166
https://github.com/putriayu06/pw2021_203040166
Pertemuan 5 (25 Februari 2021)
Mempelajari mengenai ARRAY
*/
?>

<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda 

// membuat array 
// cara lama 
$hari = array("Senin", "Selasa", "Rabu");
// cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array 
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>