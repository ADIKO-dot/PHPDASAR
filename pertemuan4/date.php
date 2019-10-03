<?php 
// PENGGUNAAN FUNCTION DATE UNTUK MENAMPILKAN TANGGAL 
//  DATE=========
// echo date("l, d-M-y"); 

// untuk date/tanggal format yang digunakan dalam kurung date
// 1. l : hari 
// 2. d : tanggal dalam satuan angka 
// 3. M : bulan dalam satuan text
// 4. m (kecil) : bulan dalam satuan angka
//  5. y (tahun) : tahun

//  TIME =======
// UNIX TIMESTAMP /EPOCH TIME
//  detik yang sudah berlaku sejak 1 januari 1970
//  echo time ();

//  membuat kombinasi penggunaan function 
// CONTOH : echo date ( "d - m - y ", time()-60*60*24*2);
//  contoh diatas berfungsi untuk menampilkan tanggal sebelumnya 2 hari yang lalu
//  - untuk hari yang telah berlalu
//   + untuk hari yang akan datang 

//  MXTIME 

// mktime (0,0,0,0,0,0)
//  jam,menit,detik,bulan,tanggal,tahun
// CONTOH : echo date ("l" (mktime(0,0,0,3,2,1997));

//  STRTOTIME ( sama seperti mktime tapi bisa menggunakan string)
// CONTOH : echo date ("l" (strtotime("02 mar 1997"));
?>