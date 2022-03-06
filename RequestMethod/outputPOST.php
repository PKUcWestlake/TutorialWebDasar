<?php 
// menangkap data nama dengan method POST
$nama = $_POST['nama'];
// menangkap data usia dengan method POST
$umur = $_POST['umur'];
 
// menampilkan data nama
echo "Nama Anda : " . $nama;
echo "<br/>";
// menampilkan data umur
echo "Usia Anda : " . $umur;
?>