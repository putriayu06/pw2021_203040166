<?php
/*
Ayu Putri Dwi Annisa
203040166
https://github.com/putriayu06/pw2021_203040166
Pertemuan 2 (09 Februari 2021)
Mempelajari mengenai sintaks PHP
*/
?>
<?php
// Standar Output 
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalm PHP 

// Variabel dan Tipe Data 
// Variabel 
// tidak boleh diawali dengan angka, tapi boleh mengandung angka 
// $nama = "Ayu Putri";
// echo 'Halo, nama saya $nama';

// Operator 
// aritmatika 
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat 
// .
// $nama_depan = "Ayu";
// $nama_belakang = "Putri";
// echo $nama_depan . " " . $nama_belakang;

// Assigment 
// =, +=, -=, *=, /=, %=, .=
// $x = 1; 
// $x = 5;
// echo $x;
// $nama = "Ayu";
// $nama .= " ";
// $nama .= "Putri";
// echo $nama;

// Perbandingan 
// <, >, <=, >=, ==, !=
// var_dump(1 === "1")

// Logika
// &&, ||, ! 
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>