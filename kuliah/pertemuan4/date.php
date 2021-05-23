<?php
/*
Ayu Putri Dwi Annisa
203040166
https://github.com/putriayu06/pw2021_203040166
Pertemuan 4 (19 Februari 2021)
Mempelajari mengenai FUNCTION
*/
?>
<?php 
// Date 
// Untuk menampilkan tanggal dengan format 
// echo date("l, d-M-Y");

// time 
// UNIX Timestamp / EPOCH time 
// detik yang sudah beralu sejak 1 januari 1970
// echo time();
// echo date("d M Y", time()-60*60*24*100);

// mktime 
// membat sendiri detik 
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 
// echo date("l", mktime(0,0,0,3,31,2002));


// strtotime
echo date("l", strtotime("31 mar 2002"));
?>

