<?php 
// menangkap data nama dengan method GET
$nama = $_GET['nama'];
// menangkap data usia dengan method GET
$umur = $_GET['umur'];
 
// menampilkan data nama
echo "Nama Anda : " . $nama;
echo "<br/>";
// menampilkan data umur
echo "Usia Anda : " . $umur;
?>